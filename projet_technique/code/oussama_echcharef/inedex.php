<?php
require "db.php";

$sql = "select * from evenement";
$resulet = $conn->query($sql);
$evenets = $resulet->fetchAll();



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>liste des evenements</h1>
        <nav>
            <a href="inedex.php">Accueil</a>
            <a href="ajout.php">Ajouter</a>
        </nav>
    </header>

    <div class="events">
        <?php foreach ($evenets as $eve) : ?>
        <div class="card">
            <img src="<?php echo htmlspecialchars($eve['image']); ?>" alt="<?php echo htmlspecialchars($eve['titre']); ?>">
            <h2><?php echo htmlspecialchars($eve['titre']) ?></h2>
            <p><?php echo htmlspecialchars($eve['content']) ?></p>
            <p>Date evenement :<?php echo htmlspecialchars($eve['date_evenement']) ?></p>
            <p>Lieu :<?php echo htmlspecialchars($eve['lieu']) ?></p>
            <p>Prix :<?php echo htmlspecialchars($eve['prix']) ?></p>
            <p>Heure evenement :<?php echo htmlspecialchars($eve['heure_evenement']) ?></p>
            <p>Nomevre de places :<?php echo htmlspecialchars($eve['nombre_places']) ?></p>
            <p>Date fin :<?php echo htmlspecialchars($eve['date_fin']) ?></p>
        </div>
        <?php endforeach; ?>
    </div>
    
</body>
</html>