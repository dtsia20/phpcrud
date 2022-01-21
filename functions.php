<?php
function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = 'root';
    $DATABASE_NAME = 'phpcrud';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
    <nav class="navtop"  id="myTopnav">
    	<div>
    		<h1>Κατάλογος Επαφών</h1>
            <a href="index.php"><i class="fas fa-home"></i>Αρχική</a>
    		<a href="read.php"><i class="fas fa-address-book"></i>Επαφές</a>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    		<i class="fa fa-bars"></i></a>
    	</div>
    </nav>
EOT;
}
function template_footer() {
echo <<<EOT
<nav class="footer">
<div>
    		<p>Created by Dimitris</p>

    	</div>
		</nav>
    </body>
	<script>
	function myFunction() {
	  var x = document.getElementById("myTopnav");
	  if (x.className === "navtop") {
		x.className += " responsive";
	  } else {
		x.className = "navtop";
	  }
	}
	</script>	
</html>
EOT;
}
?>