<!DOCTYPE html>
<html lang="en">
<head>
	<title>Checkout Page</title>
	<link rel="stylesheet" href="shopstylesheet.css">
</head>
<body>
	<header>
		<h1 id="logo" >Jonny's Candles</h1>
	</header>
	<hr>
	<h2>Checkout</h2>
	<a class="link" href="viewCart.php">Return to Cart</a>
	
	<br><br>
	<p>Please fill out your shipping address: </p>
	
<?php
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

<!-- 	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post"> -->

	<form action="confirmation.php" method="post">
	Address: <input type="text" name="address" value="<?php echo $address;?>" required>
	<span class="error"> * <?php echo $addressErr;?></span>
	<br>
	City: <input type="text" name="city" value="<?php echo $city;?>" required>
	<span class="error"> * <?php echo $cityErr;?></span>
	<br>
	State: <input type="text" name="state" value="<?php echo $state;?>" required>
	<span class="error"> * <?php echo $stateErr;?></span>
	<br>
	Zip Code: <input type="text" name="zip" value="<?php echo $zip;?>" required>
	<span class="error"> * <?php echo $zipErr; ?></span>
	<br>
	<input class="submit" type="submit" name="submit" value="Submit">
	</form>

	<br>
<!-- 	<a class="link" href="confirmation.php">Complete Purchase</a> -->
	<hr>	
	<footer class="h">
	Jonny's Candles Copyright 2018
	</footer>
</body>
</html>