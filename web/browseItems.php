<?php
session_start();

$image = array("tulipcandle", "cakecandle", "linencandle", "christmascandle", "mooncandle");
$products = array("Tulip Blush", "Birthday Cake", "Blue Linen", "Christmas Holiday", "Midnight Moon");
$price = array("10.00", "12.00", "11.00", "14.00", "8.00");

if(!isset ($_SESSION["total"]) ) {
	$_SESSION["total"] = 0;
	for ($i=0; $i<count($products); $i++){
		$_SESSION["qty"][$i] = 0;
		$_SESSION["price"][$i] = 0;	
	}
} 

if (isset($_GET['reset'])) {
	if ($_GET["reset"] == 'true') {
   		unset($_SESSION["qty"]); 
   		unset($_SESSION["price"]); 
   		unset($_SESSION["total"]); 
   		unset($_SESSION["cart"]); 
	}
}

if (isset($_GET["add"])) {
   $i = $_GET["add"];
   $qty = $_SESSION["qty"][$i] + 1;
   $_SESSION["price"][$i] = $price[$i] * $qty;
   $_SESSION["cart"][$i] = $i;
   $_SESSION["qty"][$i] = $qty;
 }
 
if ( isset($_GET["delete"]) )
   {
   $i = $_GET["delete"];
   $qty = $_SESSION["qty"][$i];
   $qty--;
   $_SESSION["qty"][$i] = $qty;
   if ($qty == 0) {
		$_SESSION["price"][$i] = 0;
    	unset($_SESSION["cart"][$i]);
  }
 else
  {
   $_SESSION["price"][$i] = $price[$i] * $qty;
  }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Browse Items</title>
	<link rel="stylesheet" href="shopstylesheet.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<header>
		<h1 id="logo" >Jonny's Candles</h1>
		<div id="shopcart">
			<div class="cart end"><a href="viewCart.php"><img src="cart.png" alt="View Cart Page image" width="50"></a></div>
			<div class="end"><a class="link" href="viewCart.php">View Cart</a></div>
		</div>
	</header>

	<hr>
	<h2>Browse Inventory</h2>
   	<div class="p box">	
	 <?php
 		for ($i=0; $i< count($products); $i++) {
   	 ?>
		<div class="group"><?php echo "<img src='$image[$i].jpg' width='100'> <br>"; ?><br></div>
   		<div class="group"><?php echo($products[$i]); ?><br></div>
   		<div class="group"><?php echo ($price[$i]); ?><br><br></div>
   		<div class="group"><a class="button" href="?add=<?php echo($i); ?>">Add to cart</a> <br> <br> <br></div>
   <?php
 	}
 	?>
    </div>

<!-- 
 <hr>
 
	<div>
		<img src="tulipcandle.jpg" alt="Tulip Candle" width="100">
		<h4>Tulip Blush Candle</h4>
		<p>$10.00</p>
		<button type="submit" formtarget="_self">Add to Cart</button><br>
	</div>
	<div>
		<img src="cakecandle.jpg" alt="Birthday Cake Candle" width="100">
		<h4>Birthday Cake Candle</h4>
		<p>$12.00</p>
		<button type="submit" formtarget="_self">Add to Cart</button><br>
	</div>
	<div>
		<img src="linencandle.jpg" alt="Blue Linen Candle" width="100">
		<h4>Blue Linen Candle</h4>
		<p>$11.00</p>
		<button type="submit" formtarget="_self">Add to Cart</button><br>
	</div>	
	<div>
		<img src="christmascandle.jpg" alt="Christmas Holiday Candle" width="100">
		<h4>Christmas Holiday Candle</h4>
		<p>$14.00</p>
		<button type="submit" formtarget="_self">Add to Cart</button><br>
	</div>
	<div>
		<img src="mooncandle.jpg" alt="Midnight Moon Candle" width="100">
		<h4>Midnight Moon Candle</h4>
		<p>$8.00</p>
		<button type="submit" formtarget="_self">Add to Cart</button><br>
	</div>
 -->	
	<hr>	
	<footer class="h">
	Jonny's Candles Copyright 2018
	</footer>
</body>
</html>