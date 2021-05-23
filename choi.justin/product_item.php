<?php
include "lib/php/functions.php";
include "data/api.php";

$product = makeStatement("product_by_id")[0];

$thumbs = explode(",", $product->url);

$thumb_elements = array_reduce($thumbs,function($r,$o){
   return $r."<img src='$o'>";
});

// echo $_SESSION['num'];

?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Product List</title>
   
   <?php include "parts/meta.php" ?>
</head>
<body>
   <?php include "parts/navbar.php" ?>
   

   <div class="container">
      <div class="grid gap product-display">
         <div class="col-xs-12 col-md-7">
            <div class="card soft">
               <div class="image-main">
                  <img src="<?= $product->url ?>">
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-md-5">
            <form class="card soft flat" action="product_actions.php?crud=add-to-cart" method="post">
               <input type="hidden" name="id" value="<?= $product->id ?>">
               <div class="card-section">
                  <div class="product-title"><?= $product->name ?></div>
                  <div class="product-price">&dollar;<?= $product->price ?></div>
               </div>
               <div class="card-section">
                  <label class="form-label">Amount</label>
                  <div class="form-select">
                     <select name="amount">
                        <!-- option[value='$']*10>{$} -->
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                     </select>
                  </div>
               </div>
               <div class="card-section">
                  <button type="submit" class="form-button sell">Add To Cart</button>
               </div>
            </form>
           </form>
      </div>
   </div>
</div>

<div class="container display-flex flex-justify-center hide">
    <h2>You May Also Like</h2>
   </div>

   <div class="containerwide grid-justify-around">
      <div class="grid">
     <!--  <div class="col-md-1"></div> -->
      <div class="col-sm-6 col-md-3">
        <div id="product6" class="product card bottom soft" style="background-image:url(img/product4.jpg)"></div>
        <h5>product</h5>
        <h5>$ 10.00</h5>
         <div class="center"><a href="product_list.php" class="button col-sm-6 col-md-3">VIEW MORE</a></div>
      </div>
   
      <div class="col-sm-6 col-md-3">
        <div id="product7" class="product card bottom soft col-sm-6 col-md-3" style="background-image:url(img/product1.jpg)"></div>
        <h5>product</h5>
        <h5>$ 10.00</h5>
         <div class="center"><a href="product_list.php" class="button col-sm-6 col-md-3">VIEW MORE</a></div>
     </div>
     <div class="col-sm-6 col-md-3">
        <div id="product8" class="product card bottom soft col-sm-6 col-md-3" style="background-image:url(img/product2.jpg)"></div>
        <h5>product</h5>
        <h5>$ 10.00</h5>
        <div class="center"><a href="product_list.php" class="button col-sm-6 col-md-3">VIEW MORE</a></div>
     </div>
     <div class="col-sm-6 col-md-3">
        <div id="product9" class="product card bottom soft col-sm-6 col-md-3" style="background-image:url(img/product3.jpg)"></div>
        <h5>product</h5>
        <h5>$ 10.00</h5>
       <div class="center"><a href="product_list.php" class="button col-sm-6 col-md-3">VIEW MORE</a></div>
     </div>
    
      </div>
   </div>
  </div>

</body>
</html>