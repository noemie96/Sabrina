<?php
include("connexion.php");
if(isset($_GET['id'])){
    $id=htmlspecialchars($_GET['id']);
}
else{
    header("LOCATION:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap-4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
    
</head>
<body>
    <div id="wood">
<div class="wrapper">
    <?php
    
    $req=$bdd->prepare("SELECT * FROM perso WHERE id=?");
    $req->execute(array($id));
    while($don=$req->fetch()){
        echo "<div class='all'>";
        echo "<h3>".nl2br($don['titre'])."</h3>";        
        echo "<div class='txt'>".nl2br($don['texte'])."</div>";
        echo "<div class='img'><img src='images/".$don['image']."'></div>";

    echo "</div>";
    }
    $req->closeCursor();
    ?>
    <a href="index.php?#slide3">Retour</a><br/>

    <a href="ajouterperso.php">Ajouter un élément</a>
</div>
</div>
<footer>
<p>Site réalisé par nonosaurus</p>
</footer>

</body>
</html>