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
	<title>View Cart</title>
	<link rel="stylesheet" href="shopstylesheet.css">
</head>
<body>
	<header>
		<h1 id="logo" >Jonny's Candles</h1>
	</header>
	<hr>
	<a class="link" href="browseItems.php">Back to Browse Items</a>
	<h2>View Cart</h2>

	<a class="link" href="?reset=true">Reset Cart</a>

 <?php
 if ( isset($_SESSION["cart"]) ) {
 ?>
 <br/><br/>
 <table>
 <tr>
 <th>Product</th>
 <th width="10px">&nbsp;</th>
 <th>Qty</th>
 <th width="10px">&nbsp;</th>
 <th>Price</th>
 <th width="10px">&nbsp;</th>
 <th>Action</th>
 </tr>
 <?php
 $total = 0;
 foreach ( $_SESSION["cart"] as $i ) {
 ?>
 <tr>
 <td><?php echo( $products[$_SESSION["cart"][$i]] ); ?></td>
 <td width="10px">&nbsp;</td>
 <td><?php echo( $_SESSION["qty"][$i] ); ?></td>
 <td width="10px">&nbsp;</td>
 <td>$<?php echo( $_SESSION["price"][$i] ); ?>.00</td>
 <td width="10px">&nbsp;</td>
 <td><a class="delete" href="?delete=<?php echo($i); ?>">Delete from cart</a></td>
 </tr>
 <?php
 $total = $total + $_SESSION["price"][$i];
 }
 $_SESSION["total"] = $total;
 ?>
 <tr>
 <td colspan="7" class='largeP'><hr>Total : $<?php echo($total); ?>.00</td>
 </tr>
 </table>
 <?php
 }
 ?>
 <br><br>
 	<a class="link" href="checkout.php">Continue to Checkout</a>
 	
	<hr>	
	<footer class="h">
	Jonny's Candles Copyright 2018
	</footer>
</body>
</html>