<?php

include "lib/php/functions.php";
include "parts/templates.php";

$cart = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
 <title>Checkout</title>
 
 <?php include "parts/meta.php" ?>
</head>
<body>
 <?php include "parts/navbar.php" ?>
 <div class="container">
  <div class="grid gap small">
   <div class="col-xs-12 col-md-8">
    <div class="card.content.center">
     <a href="#" onclick="history.back();return false;">Back</a>
     <h4>Shipping information</h4>
     <div class="grid gap">
      <div class="col-xs-12 col-md-6">
        <div class="form-control">
          <label for="example1" class="form-label">First name</label>
          <input id="example1" type="text" placeholder="William" class="form-input">
        </div>
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="form-control">
          <label for="example2" class="form-label">Last name</label>
          <input id="example2" type="text" placeholder="Smith" class="form-input">
        </div>
      </div>
    </div>
    
    <div class="grid gap">
      <div class="col-xs-12 col-md-6">
       <div class="form-control">
        <label for="example3" class="form-label">Address</label>
        <input id="example3" type="text" placeholder="xxx Arguello Blvd" class="form-input">
      </div>
    </div>
    <div class="col-xs-12 col-md-6">
      <div class="form-control">
        <label for="example3" class="form-label">City</label>
        <input id="example3" type="text" placeholder="SF" class="form-input">
      </div>
    </div>
  </div>

  <div class="grid gap">
    <div class="col-xs-12 col-md-6">
     <div class="form-control">
      <label for="example3" class="form-label">State</label>
      <input id="example3" type="text" placeholder="CA" class="form-input">
    </div>
  </div>
  <div class="col-xs-12 col-md-6">
    <div class="form-control">
      <label for="example3" class="form-label">ZIP</label>
      <input id="example3" type="text" placeholder="9xxxx" class="form-input">
    </div>
  </div>
</div>

<div class="grid gap">
  <div class="col-xs-12 col-md-6">
   <div class="form-control">
    <label for="example3" class="form-label">Email</label>
    <input id="example3" type="text" placeholder="xxxx@xxxxx.com" class="form-input">
  </div>
</div>
<div class="col-xs-12 col-md-6">
  <div class="form-control">
    <label for="example3" class="form-label">Phone</label>
    <input id="example3" type="text" placeholder="628-xxx-xxxx" class="form-input">
  </div>
</div>
</div>

<h4>Credit card information</h4>
<div class="grid gap">
  <div class="col-xs-12 col-md-6">
   <div class="form-control">
    <label for="example5" class="form-label">Credit Card Number</label>
    <input id="example5" type="text" placeholder="1234 1234 1234" class="form-input-lined">
  </div>
</div>

<div class="col-xs-12 col-md-6">
 <div class="form-control">
  <label for="example6" class="form-label">Exp date</label>
  <input id="example6" type="text" placeholder="mm/yy" class="form-input-lined">
</div>
</div>

<div class="col-xs-12 col-md-6">
 <div class="form-control">
  <label for="example6" class="form-label">CVV</label>
  <input id="example6" type="text" placeholder="xxx" class="form-input-lined">
</div>
</div>
</div>
</div>
</div>

<div class="col-xs-12 col-md-4">
  <div class="card soft flat">
    <?
    echo array_reduce($cart,'makeCondensedCartList');
    echo cartTotals();
    ?>

    <div class="card-section">
      <a class="form-button" href="product_actions.php?crud=reset-cart">CONFIRM PURCHASE</a>
    </div>
  </div>
</div>
</div>
</div>
<?php include "parts/like.php" ?>
</body>
</html>