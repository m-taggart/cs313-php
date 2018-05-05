<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
			CS 313 | Assignments
		</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" media="screen" href="stylesheetHome.css"> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
		</script>
		<script src="scriptHome.js">
		</script>
	</head>
	
	<body>
        <header>
            <div>
                <?php include 'headerHome.php'; ?>
            </div>
        </header>
        
	    <main>
            <h1> Assignments </h1>
            <hr>
            <h2 id="special"> Coming Soon! </h2>
            <hr>
        </main>
        
        <footer> 
            <?php include'footerHome.php'; ?>
            <p class="bottom"><?php echo "Last modified: " . date("F d, Y", filemtime("assignments.php")); ?> </p>
        </footer>
	</body>
</html>
