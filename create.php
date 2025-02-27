<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<?php
	
?>
<body>
	<a href="/read.php">Liste des données</a>
	<h1>Ajouter</h1>
	<form action="/create.php" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value="">
		</div>

		<div>
			<label for="difficulty">Difficulté</label>
			<select name="difficulty">
				<option default value="très facile">Très facile</option>
				<option value="facile">Facile</option>
				<option value="moyen">Moyen</option>
				<option value="difficile">Difficile</option>
				<option value="très difficile">Très difficile</option>
			</select>
		</div>
		
		<div>
			<label for="distance">Distance</label>
			<input type="text" name="distance" value="">
		</div>
		<div>
			<label for="duration">Durée</label>
			<input type="duration" name="duration" value="">
		</div>
		<div>
			<label for="height_difference">Dénivelé</label>
			<input type="text" name="height_difference" value="">
		</div>
		<button type="submit" name="button">Envoyer</button>
	</form>

<?php

include("connexion.php");

if (!empty($_POST["name"]) && !empty($_POST["difficulty"]) && !empty($_POST["distance"]) && !empty($_POST["duration"]) && !empty($_POST["height_difference"])) {

	$pre = $pdo->prepare("INSERT INTO hiking(name, difficulty, distance, duration, height_difference) VALUES (:name, :difficulty, :distance, :duration, :height_difference)");
 
	$pre->bindParam(":name", $_POST['name']);$pre->bindParam(":difficulty", $_POST['difficulty']);
	$pre->bindParam(":distance", $_POST['distance']);
	$pre->bindParam(":duration", $_POST['duration']);	
	$pre->bindParam(":height_difference", $_POST['height_difference']);	

	$pre->execute();

	echo "Les données ont bien été ajoutées";
	
}else{
	echo "Tous les champs doivent être renseignés";
}

?>
</body>
</html>
