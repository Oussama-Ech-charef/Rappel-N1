<?php

require "database.php";

$sql = "select * from category";
$result = $conn->query($sql);

$categories = $result->fetchAll();



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titre = trim($_POST['titre']);
    $content = trim($_POST['content']);
    $image = trim($_POST['image']);
    $date_evenement = trim($_POST['date_evenement']);
    $heure_evenement = trim($_POST['heure_evenement']);
    $lieu = trim($_POST['lieu']);
    $prix = trim($_POST['prix']);
    $nombre_places = trim($_POST['nombre_places']);
    $status = trim($_POST['status']);
    $id_category = trim($_POST['id_category']);
    $date_fin = trim($_POST['date_fin']);



$stmt = $conn->prepare("
                        insert into evenement (titre, content, image, date_evenement, date_publication,  heure_evenement, lieu, prix, nombre_places, status, id_organisateur,  id_category, date_fin)

                        values (:titre, :content, :image, :date_evenement, NOW(), :heure_evenement, :lieu, :prix, :nombre_places, :status, :id_organisateur,  :id_category, :date_fin)
");

    $stmt->execute([
    ':titre' => $titre,
    ':content' => $content,
    ':image' => $image,
     ':date_evenement' => $date_evenement,
     ':heure_evenement' => $heure_evenement,
     
     ':lieu' => $lieu,
     ':prix' => $prix,
     ':nombre_places' => $nombre_places,
     ':status' => $status,
     ':id_organisateur' => 1,
     ':id_category' => $id_category,
     ':date_fin' => $date_fin
 ]);

header("Location: index.php");
exit();

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un événement</title>
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


    <form action="" method="post">

            <label>Titre :</label>
            <input type="text" name="titre" required>

            <label>Content :</label>
            <textarea type="text" name="content" required></textarea>

            <label>Image :</label>
            <input type="text" name="image" >

            <label>Date evenement :</label>
            <input type="date" name="date_evenement" required>

            <label>Heure evenement :</label>
            <input type="time" name="heure_evenement" required>

            <label>Date fin :</label>
            <input type="date" name="date_fin">

            <label>Lieu :</label>
            <input type="text" name="lieu" required>

            <label>Prix :</label>
            <input type="number" name="prix" required>

            <label>Nombre de places :</label>
            <input type="text" name="nombre_places" required>

            <label>Status :</label>
            <select name="status">
                <option value="publish">publish</option>
                <option value="draft">draft</option>
            </select>

            <label>Categorie :</label>
            <select name="id_category">
            <?php foreach ($categories as $cat) : ?>
                <option value="<?php echo htmlspecialchars($cat['id_category']); ?>"><?php echo htmlspecialchars($cat['nom_category']); ?></option>
            <?php endforeach; ?>
            </select>

            <button type="submit">Ajouter</button>
    </form>
    
</body>
</html>