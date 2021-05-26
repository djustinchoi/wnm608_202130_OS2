<?php
include "lib/php/functions.php";
include "parts/templates.php";
?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Confirmation</title>
   
   <?php include "parts/meta.php" ?>
</head>
<body>
   <?php include "parts/navbar.php" ?>
   <hr>
   

   <div class="container">

         <h2>ORDER PLACED, THANKS!</h2>
          
           <div class="type-center">Comfirmation will be sent to your email</div>
           <div class="type-center">Shipping to William Smith, xxx Arguello Blvd</div>
           <div class="type-center">Estimated delivery - Tomorrow May 28</div>
          
          <div class="display-flex">
          <div class="flex-stretch"></div>
               <div class="flex-none"><a class="form-button" href="product_list.php">Continue Shopping</a></div>
          <div class="flex-stretch"></div>
        </div>
          <div class="flex-stretch"></div>
         <nav class="flex-none nav flex white"></nav>
   </div>
<?php include "parts/suggest.php" ?>
 <?php include "parts/footer.php" ?>
</body>
</html>