<?php

require "database.php";


$sql = "select * from evenement";
$result = $conn->query($sql);

$evenments = $result->fetchAll();



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billetterie - Événements</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <header>
        <h1>Liste des evenements</h1>
        <nav>
            <a href="index.php">Accueil</a>
            <a href="ajout.php">Ajouter</a>
        </nav>
    </header>



    <div class="events">
        <?php foreach ($evenments as $e) : ?>
            <div class="card">
                <img src="<?php echo htmlspecialchars($e['image']) ?>" width="200px" alt="<?php echo htmlspecialchars($e['titre']); ?>">
                <h2><?php echo htmlspecialchars($e['titre']); ?></h2>
                <p><?php echo htmlspecialchars($e['content']); ?></p>
                <p>Date événement : <?php echo htmlspecialchars($e['date_evenement']); ?></p>
                <p>Date fin : <?php echo htmlspecialchars($e['date_fin']); ?></p>
                <p>Heure : <?php echo htmlspecialchars($e['heure_evenement']); ?></p>
                <p>Lieu : <?php echo htmlspecialchars($e['lieu']); ?></p>
                <p>Prix : <?php echo htmlspecialchars($e['prix']); ?> DH</p>
                <p>Status : <?php echo htmlspecialchars($e['status']); ?></p>
                <p>Places disponibles : <?php echo htmlspecialchars($e['nombre_places']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
    
</body>
</html>
