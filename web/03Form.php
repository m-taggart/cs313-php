<?php

$locations = array ( "na" => "North America", "sa" => "South America", "eu" => "Europe", "as" => "Asia", "au" => "Australia", "af" => "Africa", "an" => "Antarctica");
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$major = $_POST['major'];
$comment = htmlspecialchars($_POST['comment']);
$continent = $_POST['check'];

echo "Form Results <br> <br>";

echo "Name: $name <br/>";
//echo "e-mail: $email <br/>";
echo "Email: <a href='mailto: $email '>$email</a><br />";
echo "Major: $major <br/>";
echo "Continents visited: ";
//print_r($locations);
foreach($continent as $cont){
   $cont_clean = htmlspecialchars($cont);
   echo "$locations[$cont_clean], ";
};
echo "<br> Comments: $comment <br/>";
?>
