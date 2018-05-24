<?php
// Start the session
session_start();
$listOfScriptues = $_GET["check"];
?>

<?php
try
{
  $user = 'zbtcatofxkzmhb';
  $password = 'd9cd849b8ace4580f8750914aa316620a0664db6d22851643f3dfd9c9f9ad2ad';
  $db = new PDO('pgsql:host=ec2-107-20-249-68.compute-1.amazonaws.com;dbname=dctomhkkjlic3u;', $user, $password);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
	 
foreach($listOfScriptues as $scripture){
	
	$statement = $db->query("SELECT book, chapter, verse FROM scriptures where book = '".$scripture."';");
	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
	  echo 'Scriptures: ' . $row['book'] . " " .$row['chapter'] .':'. $row['verse'] . '<br/>';
	}
}
?>