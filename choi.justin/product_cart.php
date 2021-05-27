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
     <div class="bgbox">
<div class="product-text">
         <h2> Cart</h2>
         <div class="product-text2">Minimal is about value</div>
    </div>

   <div class="container">
      <hr>
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
            <div class="card-flat">
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


   <?php include "parts/like.php" ?>
   
</div>
</div>

<?php include "parts/footer.php" ?>

</body>
</html>
