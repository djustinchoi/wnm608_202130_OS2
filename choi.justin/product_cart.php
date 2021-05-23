<?php

include "lib/php/functions.php";
include "parts/templates.php";
include "data/api.php";

//resetCart();
//pretty_dump(getCart());

$cart = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Product Cart</title>
   
   <?php include "parts/meta.php" ?>
</head>
<body>
   <?php include "parts/navbar.php" ?>
   

   <div class="container">
      <div class="grid gap">
         <div class="col-xs-12 col-md-8">
            <div class="card soft flat">

               <?php

               if(!count($cart)) {
                  echo "<div class='card-section'>No Items In Cart Yet.</div>";
               }
               else {
                  echo array_reduce($cart,'makeCartList');
               }

               ?>
            </div>
         </div>
         <div class="col-xs-12 col-md-4">
            <div class="card soft flat">
               <div class="card-section">
                  <h2>Confirm Cart</h2>
               </div>
               <?= cartTotals() ?>
               <div class="card-section">
                  <a class="form-button" href="product_checkout.php">Checkout</a>
               </div>
            </div>
         </div>
      </div>
   </div>

     <div class="container display-flex flex-justify-center hide">
    <h2>You May Also Like</h2>
   </div>

   <div class="containerwide grid-justify-around">
      <div class="grid">
    
   
   <? 

   $products = MYSQLIQuery("
      SELECT *
      FROM `products`
      WHERE `category` = 'Product'
      LIMIT 4
   ");

   // pretty_dump($recommended);
   echo array_reduce($products,'makeProductList');

   ?>

   </div>
  </div>
   
    
   </div>
  </div>

  <?php include "parts/footer.php" ?>

</body>
</html>
