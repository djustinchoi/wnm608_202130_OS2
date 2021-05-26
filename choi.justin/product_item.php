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
         <div class="col-xs-12 col-md-6">
            <div class="card soft">
               <div class="image-main">
                  <img src="<?= $product->url ?>">
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-md-6">
            <form class="card soft flat" action="product_actions.php?crud=add-to-cart" method="post">
               <input type="hidden" name="id" value="<?= $product->id ?>">
               <div class="card-section">
                  <div class="product-title"><?= $product->name ?></div>
                  <div class="product-price">&dollar;<?= $product->price ?></div>
                  <div class="product-text"><?= $product->description ?></div>

               </div>
               <div class="card-section">
                  <label class="form-label">Quantity</label>
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

<?php include "parts/like.php" ?>
<?php include "parts/footer.php" ?>

</body>
</html>