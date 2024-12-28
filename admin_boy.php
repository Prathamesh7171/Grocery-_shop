<?php

@include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
};

if(isset($_GET['delete'])){

   $delete_id = $_GET['delete'];
   $delete_deliveryboy = $conn->prepare("DELETE FROM `deliveryboy` WHERE id = ?");
   $delete_deliveryboy->execute([$delete_id]);
   header('location:admin_boy.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>deliveryboy</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
   
<?php include 'admin_header.php'; ?>

<section class="user-accounts">

   <h1 class="title">deliveryboy Accounts</h1>

   <div class="box-container">

      <?php
         $select_deliveryboy = $conn->prepare("SELECT * FROM `deliveryboy`");
         $select_deliveryboy->execute();
         while($fetch_deliveryboy = $select_deliveryboy->fetch(PDO::FETCH_ASSOC)){
      ?>
      <div class="box" style="<?php if($fetch_deliveryboy['id'] == $admin_id){ echo 'display:none'; }; ?>">
         <i class="far fa-smile" style="font-size:100px"></i>
         <p> User id : <span><?= $fetch_deliveryboy['id']; ?></span></p>
         <p> Username : <span><?= $fetch_deliveryboy['name']; ?></span></p>
         <p> Mobile : <span><?= $fetch_deliveryboy['mobile']; ?></span></p>
         <p> Email : <span><?= $fetch_deliveryboy['email']; ?></span></p>
         <p> User type : <span style=" color:<?php if($fetch_deliveryboy['user_type'] == 'admin'){ echo 'orange'; }; ?>"><?= $fetch_deliveryboy['user_type']; ?></span></p>
         <a href="admin_boy.php?delete=<?= $fetch_deliveryboy['id']; ?>" onclick="return confirm('delete this user?');" class="delete-btn">delete</a>
      </div>
      <?php
      }
      ?>
   </div>

</section>













<script src="js/script.js"></script>

</body>
</html>