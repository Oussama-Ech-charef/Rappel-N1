

<?php

require "db.php";


$sql = "select * from category";
$resulet = $conn->query($sql);
$category = $resulet->fetchAll();



if ($_SERVER['REQUEST_METHOD'] === "POST"){



    $titre = $_POST['titre'] ;
    $content = $_POST['content'] ;
    $image = $_POST['image'] ;
    $date_evenement = $_POST['date_evenement'] ;
    $lieu = $_POST['lieu'] ;
    $prix  = $_POST['prix'];
    $status = $_POST['status'] ;
    $id_category = $_POST['id_category'];
    $heure_evenement = $_POST['heure_evenement'] ;
    $nombre_places = $_POST['nombre_places'] ;
    $date_fin = $_POST['date_fin'] ;






    $stmt = $conn->prepare("
                            insert into evenement (titre, content, image, date_evenement, date_publication, lieu, prix, status, id_organisateur, id_category, heure_evenement, nombre_places, date_fin   ) 
                            values (:titre, :content, :image, :date_evenement, NOW(), :lieu, :prix, :status, :id_organisateur, :id_category, :heure_evenement, :nombre_places, :date_fin )
                            
                            
    ");


    $stmt->execute([
        'titre' => $titre,
        'content' => $content,
        'image' => $image,
        'date_evenement' => $date_evenement,
        'lieu' => $lieu,
        'prix' => $prix,
        'status' => $status,
        'id_organisateur' => 1,
        'id_category' => $id_category,
        'heure_evenement' => $heure_evenement,
        'nombre_places' => $nombre_places,
        'date_fin' => $date_fin
    ]);

    header("Location: inedex.php");
    exit;
}

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
        <h1>Ajouter un evenement </h1>
        <nav>
            <a href="inedex.php">Accueil</a>
            <a href="ajout.php">Ajouter</a>
        </nav>
    </header>



    <form  method="post">

            

            <label for="">Titre :</label>
            <input type="text" name="titre">

            <label for="">Content :</label>
            <input type="text" name="content">

            <label for="">Image :</label>
            <input type="text" name="image">

            <label for="">Dat evement :</label>
            <input type="date" name="date_evenement">

            <label for="">Lieu :</label>
            <input type="text" name="lieu">

            <label for="">Prix :</label>
            <input type="number" name="prix">

            <label for="">Heure evenment :</label>
            <input type="time" name="heure_evenement">

            <label for="">Nomvre places :</label>
            <input type="number" name="nombre_places">

            <label for="">Date fin :</label>
            <input type="date" name="date_fin">

            <label for="">Status :</label>
            <select name="status" id="">
                <option value="publish">Publish</option>
                <option value="draft">Draft</option>
            </select>

            <label>Category :</label>
            <select name="id_category">
                <?php foreach ($category as $cate): ?>
                <option value="<?php echo htmlspecialchars($cate['id_category']) ?>">
                    <?php echo htmlspecialchars($cate['nom_category']) ?>
                </option>
                
                <?php endforeach; ?>
            </select>
            
            <button type="submit">Ajoute</button>





    </form>
</body>
</html>


