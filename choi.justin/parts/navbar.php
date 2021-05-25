<header class="navbar">
   <div class="container display-flex flex-align-center">
      <div class="flex-none">
         <ul>
          <li><img class="nav-image" src="img/tab.png" alt="logo" a href="index.php"></li>
       </ul>

      </div>
      <div class="flex-stretch"></div>
      <nav class="flex-none nav flex">
         <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="product_list.php">PRODUCTS</a></li>
            <li><a href="product_cart.php">
               <span>CART</span>
               <span class="badge"><?= makeCartBadge() ?></span>
            </a></li>
         </ul>
      </nav>
   </div>
</header>