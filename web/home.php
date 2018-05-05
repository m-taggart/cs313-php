<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
			CS 313 | Homepage 
		</title>
		<meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" media="screen" href="/cs313/stylesheetHome.css"> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
		</script>
		<script src="scriptHome.js">
		</script>
		
	</head>
	<body>
		<header>
			<div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/cs313/headerHome.php'; ?>
			</div>
		</header>
		<main>
			<h1>
				About Me 
			</h1>
			<hr>
			<p>Click the box to see the answer</p>
			<div id="info">
			<div id="card">
			<div class="square front" onclick="hideOne()">
				<h3 class="label family">My Life in an Emoji</h3>
			</div>
			<div class="square back" id="one">
				<img src="laptopEmoji.png" alt="Emoji typing on computer" width="200" height="200">
			</div>
			</div>
			
			<div id="card">
			<div class="square front" onclick="hideTwo()">
				<h3 class="label">Saturday Morning Hobby</h3>
			</div>
			<div class="square back" id="two">
				<img src="biking.JPG" alt="Saturday morning biking" width="200" height="200">
			</div>
			</div>
			
			<div id="card">
			<div class="square front" onclick="hideThree()">
				<h3 class="label">Favorite Food</h3>
			</div>
			<div class="square back" id="three">
				<img src="raspberry.png" alt="Favorite food fruit" width="200" height="200">
			</div>
			</div>
			
			<div id="card">
			<div class="square front" onclick="hideFour()">
				<h3 class="label">May I suggest a podcast?</h3>
			</div>
			<div class="square back" id="four">
				<img src="happierpodcast.png" alt="Happier Podcast" width="200" height="200">
			</div>
			</div>
			</div>
			<hr>
		</main>
		<footer>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/cs313/footerHome.php'; ?>
			<p class="bottom">
<?php echo "Last modified: " . date("F d, Y", filemtime("home.php")); ?>
			</p>
		</footer>
	</body>
</html>
