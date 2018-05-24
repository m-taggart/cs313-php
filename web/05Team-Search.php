<!DOCTYPE HTML>
<html>  
<body>

<form action="05Team-Stretch1.php" method="get">

<?php
try
{
  $user = 'zbtcatofxkzmhb';
  $password = 'd9cd849b8ace4580f8750914aa316620a0664db6d22851643f3dfd9c9f9ad2ad';
  $db = new PDO('pgsql:host=ec2-107-20-249-68.compute-1.amazonaws.com;dbname=dctomhkkjlic3u', $user, $password);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}

$statement = $db->query('SELECT DISTINCT book FROM scriptures');
 echo'<tr>';
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
 
  echo '<th><input type="checkbox" name="check[]" id="check" value="'. $row['book'] .'">'. $row['book'] .'</th><br>';
 
}
 echo '</tr>';


?>


   <input type="submit" value="submit">

</form>
</body>
</html>