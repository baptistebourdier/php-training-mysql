<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
	<a href="/read.php">Liste des données</a>
	<h1>Ajouter</h1>
	<form action="/update.php" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value="<?= $_GET['name']?>">
		</div>

		<div>
			<label for="difficulty">Difficulté</label>
			<select name="difficulty">
				<option value="<?= $_GET['difficulty']?>"><?= $_GET['difficulty']?></option>
				<option value="très facile">Très facile</option>
				<option value="facile">Facile</option>
				<option value="moyen">Moyen</option>
				<option value="difficile">Difficile</option>
				<option value="très difficile">Très difficile</option>
			</select>
		</div>
		
		<div>
			<label for="distance">Distance</label>
			<input type="text" name="distance" value="<?= $_GET['distance']?>">
		</div>
		<div>
			<label for="duration">Durée</label>
			<input type="duration" name="duration" value="<?= $_GET['duration']?>">
		</div>
		<div>
			<label for="height_difference">Dénivelé</label>
			<input type="text" name="height_difference" value="<?= $_GET['height_difference']?>">
		</div>
		<button type="button" name="button">Envoyer</button>
	</form>
<?php
/*include('connexion.php');

if (!empty($_POST["name"]) && !empty($_POST["difficulty"]) && !empty($_POST["distance"]) && !empty($_POST["duration"]) && !empty($_POST["height_difference"])) {

$sql = 'UPDATE hiking SET '*/
?>
</body>
</html>
