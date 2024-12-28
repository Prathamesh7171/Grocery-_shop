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

      <a href="dhome.php" class="logo">DeliveryBoy<span>Panel</span></a>

      <nav class="navbar">
         <a href="dhome.php">HOME</a>
      
         <a href="d_orders.php">ORDERS</a>

         
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$deliveryboy_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <i class="far fa-smile" style="font-size:100px"></i>
         <p>Hello <?= $fetch_profile['name']; ?></p>
         <a href="boy_profile_update.php" class="btn">Update Profile</a>
         <a href="logout.php" class="delete-btn">Logout</a>
      </div>

   </div>

</header>