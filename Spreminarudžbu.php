<!DOCTYPE html>
<html>
<head>
	<title>Spremi Adresu</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>

	<?php include("nav.php"); ?>

	<h1>Narudžba je naručena!</h1>

	<?php

		$ime = $_POST['ime'];
		$adresa = $_POST['adresa'];
		$menu = $_POST['menu'];


		echo "Ime: $ime <br>";
		echo "Adresa: $adresa <br>";
		echo "Menu: $menu <br>";


		$datoteka = fopen("menu.txt", "a");

		fwrite($datoteka, "\n$ime\n$adresa\n$menu");

		fclose($datoteka);

	?>


</body>
</html>