<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <title>Dreams Tourism</title>
  <meta name="author" content="Irene Nousiainen">
  <link rel="stylesheet" href="dreams_store_style.css">
  <link rel="icon" type="image/png" href="../images/dreams_tour.png">
</head>

<body>

    <div class="brand">
		<img src="../images/dreams_tour.png" class="item_thumb" />
    </div>

  <?php
      if(!empty($_SESSION['shopping_cart'])) {
          $cart_count = count(array_keys($_SESSION["shopping_cart"]));
  ?>
  
  <div class="cart_div">
      <a href="store_prod.php"><img src="shop_cart.png"/>Cart<span>
      <?php echo $cart_count; ?></span></a>
  </div>
  <?php
  }
  ?>



<input type="button" name="purch_continue" class="btn" value="Continue shopping?"></button>
<input type="button" name="purch_final" class="btn" value="Finalize purchase?"></button>


</body>

</html>