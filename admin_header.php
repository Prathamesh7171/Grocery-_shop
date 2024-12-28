<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<header class="header">

   <div class="flex">

      <a href="admin_page.php" class="logo">Admin<span>Panel</span></a>

      <nav class="navbar">
         <a href="admin_page.php">HOME</a>
         <a href="admin_products.php">PRODUCTS</a>
         <a href="admin_orders.php">ORDERS</a>
         <a href="admin_users.php">USERS</a>
         <a href="admin_contacts.php">MESSAGES</a>
         <a href="admin_boy.php">DELIVERY-BOYS</a>
      
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$admin_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <i class="far fa-smile" style="font-size:100px"></i>
         <p>Hello <?= $fetch_profile['name']; ?></p>
         <a href="admin_update_profile.php" class="btn">Update Profile</a>
         <a href="logout.php" class="delete-btn">Logout</a>
      </div>

   </div>

</header>