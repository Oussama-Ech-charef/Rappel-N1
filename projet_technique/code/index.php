
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
    <title>Liste des evenements</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

        <header>
            <h1>Liste des evenements</h1>
            <nav>
                <a href="index.php">Accuile</a>
                <a href="ajout.php">Ajouter</a>
            </nav>
        </header>


        <div class="events">
            <?php foreach ($evenments as $eve) : ?>
                <div class="card">
                    <img src="<?php echo htmlspecialchars($eve['image']); ?>" alt="<?php echo htmlspecialchars($eve['titre']); ?>">
                    <h2><?php echo htmlspecialchars($eve['titre']); ?></h2>
                    <p><?php echo htmlspecialchars($eve['content']); ?></p>
                    <p>Date événement : <?php echo htmlspecialchars($eve['date_evenement']); ?></p>
                    <p>Lieu : <?php echo htmlspecialchars($eve['lieu']); ?></p>
                    <p>Prix : <?php echo htmlspecialchars($eve['prix']); ?></p>
                    <p>Heure : <?php echo htmlspecialchars($eve['heure_evenement']); ?></p>
                    <p>Places disponibles : <?php echo htmlspecialchars($eve['nombre_places']); ?></p>
                    <p>Date fin : <?php echo htmlspecialchars($eve['date_fin']); ?></p>

                </div>
            <?php endforeach ; ?>

        </div>
</body>
</html>