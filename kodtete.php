<!DOCTYPE html>
<html>
<head>
	<title>Veliki odmor</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>

	<?php include("nav.php"); ?>

	<h1>Unos narudžbe</h1>

	<form method="post" action="Spreminarudžbu.php">
		
		Ime:<br>
		<input type="text" name="ime">
		<br><br>

		Adresa:<br>
		<textarea name="adresa"></textarea>
		<br><br>

		Menu:<br>
		<select name="menu">
			<option>-</option>
			<option>Pizza</option>
			<option>Kroasan</option>
			<option>Lisnato</option>
			<option>Hot Dog</option>
		</select>
		<br><br>

		<input type="submit" value="Naruči">
		<input type="reset" value="Obriši">

	</form>

	<br>


</body>
</html>