<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Store</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/components.css">

    <style>
        .features .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   gap:1.5rem;
}

.features .box-container .box{
   padding:3rem 2rem;
   background: var(--white);
   outline: .1rem solid rgba(0,0,0,.1);
   outline-offset: -1rem;
   text-align: center;
   box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.1);
}

.features .box-container .box:hover{
   outline: .2rem solid #130f40;
   outline-offset: 0rem;
}

.features .box-container .box img{
   margin:1rem 0;
   height: 15rem;
}

.features .box-container .box h3{
   font-size: 2.5rem;
   line-height: 1.8;
   color:#130f40;
}

.features .box-container .box p{
   font-size: 1.5rem;
   line-height: 1.8;
   color:#666;
   padding:1rem 0;
}
</style>

</head>
<body style="display:flex">
    
<!-- header section starts  -->
<?php include 'header.php'; ?>

<!-- header section ends -->

<!-- features section starts  -->

<section class="features">

    <h1 class="title"> our <span>features</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/feature-img-1.png" alt="">
            <h3>fresh and organic</h3>
            <p>Our online grocery store has fresh fruits and vegetables, a wide range of breads and other packaged bakery products as well as a range of fresh cheeses from around the world.</p>
        </div>

        <div class="box">
            <img src="images/feature-img-2.png" alt="">
            <h3>fast delivery</h3>
            <p>Order the online grocery comfortably from home for timely doorstep delivery.Book convenient delivery slots, and we guarantee you on-time delivery each time and enjoy hassle free delivery</p>
        </div>

        <div class="box">
            <img src="images/feature-img-3.png" alt="">
            <h3>easy payments</h3>
            <p>You can save the time otherwise lost in waiting in lengthy queues for billing and payments by easily adding the chosen items to your cart online.</p>
        </div>

    </div>

</section>

<!-- features section ends -->

<!-- footer section starts  -->

<?php include 'footer.php'; ?>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>