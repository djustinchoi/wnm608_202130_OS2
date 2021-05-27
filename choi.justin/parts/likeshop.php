 

  <div class="bgbox2">
<div class="product-text">
         <h2> SHOP OUR PRODUCTS</h2>
         <div class="product-text2">Minimal is about value</div>
    </div>


    <div class="grid">
      <?php
      $product = MYSQLIQuery("SELECT * FROM `products`");
      shuffle($product);
      for ($i = 0; $i < 4; $i++) {
        $image = $product[$i]->image;
        $name = $product[$i]->name;
        $price = $product[$i]->price;
        $id = $product[$i]->id;
        echo "
        <div class='col-xs-12 col-md-3'>
          <a href='product_item.php?id=$id' class='product'>
            <div class='product-image'>
              <img src='$image' alt='' />
              <figcaption class='product-caption2'>
                <div class='product-title3'>$name</div>
                <div class='product-price3'>$$price</div>
              </figcaption>
            </div>
          </a>
        </div>
            ";
      }
      ?>
    </div>
</div>