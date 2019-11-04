<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Randonnées</title>
  <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>

<body>
  <h1>Liste des randonnées</h1>
  <table>
    <!-- Afficher la liste des randonnées -->
    <?php
    if (extension_loaded('PDO')) {
      echo 'PDO OK';
    } else {
      echo 'PDO KO';
    }

    $dsn = 'mysql:host=localhost;dbname=reunion_island;port=3306;charset=utf8';
    $pdo = new PDO($dsn, 'root', 'kenya2010');

    $query = $pdo->query("SELECT * FROM hiking");
    $resultat = $query->fetchAll();

    print("<table border=\"1\">");

    foreach ($resultat as $key => $variable) {
    
      print("<tr>");
      print("<td>" . $resultat[$key]['id'] . "</td>");
      print("<td><a href=\"update.php?name=".$resultat[$key]['name']."&difficulty=".$resultat[$key]['difficulty']."&distance=".$resultat[$key]['distance']."&duration=".$resultat[$key]['duration']."&height_difference=".$resultat[$key]['height_difference']."\">" . $resultat[$key]['name'] . "</a></td>");
      print("<td>" . $resultat[$key]['difficulty'] . "</td>");
      print("<td>" . $resultat[$key]['distance'] . "</td>");
      print("<td>" . $resultat[$key]['duration'] . "</td>");
      print("<td>" . $resultat[$key]['height_difference'] . "</td>");
      print("<tr>");
    }
    print("</table>");
    ?>
  </table>
</body>

</html>