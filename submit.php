<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

// Récupérer les données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];

// Afficher les données
echo "<h1>Formulaire d'inscription</h1>";
echo "<p>Nom : $nom</p>";
echo "<p>Prénom : $prenom</p>";
echo "<p>Âge : $age</p>";

?>
</body>
</html>
