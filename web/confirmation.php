<?php
session_start();

$image = array("tulipcandle", "cakecandle", "linencandle", "christmascandle", "mooncandle");
$products = array("Tulip Blush", "Birthday Cake", "Blue Linen", "Christmas Holiday", "Midnight Moon");
$price = array("10.00", "12.00", "11.00", "14.00", "8.00");
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Confirmation</title>
	<link rel="stylesheet" href="shopstylesheet.css">
</head>
<body>
	<header>
		<h1 id="logo" >Jonny's Candles</h1>
	</header>
	<hr>
	<h2>Confirmation Page</h2>
	<a class="link" href="browseItems.php">Back to Browse Items</a>
 <?php
 echo "<p class='largeP'> You have purchased: </p>";
 	
 if ( isset($_SESSION["cart"]) ) {
 ?>
 <br/>
 <table>
 <tr>
 <th>Product</th>
 <th width="10px">&nbsp;</th>
 <th>Qty</th>
 <th width="10px">&nbsp;</th>
 <th>Price</th>
 <th width="10px">&nbsp;</th>
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

<br>

<?php
	echo "<br>";
	echo "<p class='largeP'> These products will be sent to:</p>";

// define variables and set to empty values
$addressErr = $cityErr = $stateErr = $zipErr = "";
$address = $city = $state = $zip = "";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty ($_POST["address"])) {
	$addressErr = "Address is required";
	} else {
  $address = test_input($_POST["address"]);
  if (!preg_match("/[A-Za-z0-9\-\\,.]+/", $address)) {
  	$addressErr = "Only letters, numbers, and white space allowed";
  }
  }
  
  if (empty ($_POST["city"])) {
  	$cityErr = "City is required";
  	} else {
  $city = test_input($_POST["city"]);
	if (!preg_match("/^[a-zA-Z ]*$/",$city)) {
  		$cityErr = "Only letters and white space allowed"; 
	}
  }
  
  if (empty ($_POST["state"])) {
  	$stateErr = "State is required";
  	} else {
  $state = test_input($_POST["state"]);
  if (!preg_match ("/^(A[LKSZRAP]|C[AOT]|D[EC]|F[LM]|G[AU]|HI|I[ADL N]|K[SY]|LA|M[ADEHINOPST]|N[CDEHJMVY]|O[HKR]|P[ARW]|RI|S[CD] |T[NX]|UT|V[AIT]|W[AIVY])$/", $state)) {
  	$stateErr = "Use two letter state code.";
  }
  }
  
  if (empty ($_POST["zip"])) {
  $zipErr = "Zip is required";
  } else {
  $zip = test_input($_POST["zip"]);
  if (!preg_match ("/^[0-9]{5,5}([- ]?[0-9]{4,4})?$/", $zip)){
  $zipErr = "Use 5 to 9 number postal code.";
  }
}
}
?>
<div class="p border">
<?php
	echo $address;
	echo "<br>";
	echo $city;
	echo ", ";
	echo $state;
	echo "<br>";
	echo $zip;
?>	
</div>	
	<hr>	
	<footer class="h">
	Jonny's Candles Copyright 2018
	</footer>
</body>
</html>

<?php session_unset(); ?>