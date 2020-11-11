<?php
$tabmenu = array(
    'news' => 'news.php',
    'persos'=> 'perso.php',
    'error'=>'error.php');    

    if(isset($_GET['menu']))
    {   
        if(array_key_exists($_GET['menu'],$tabmenu)){
        $choix=$_GET['menu'];
        $menu=$tabmenu[$choix];
        }
        else{
            $menu=$tabmenu['error'];
        }
    }
   
    include("connexion.php");
?>



<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" text="text/css" />
    <title>Sabrina</title>
</head>

<body>
    <div id="slide1">
        
            <div id="logo"></div>
            <div id="menu">
                <nav>
                    <ul>
                        <li><a href="#slide2">Histoire</a></li>
                        <li><a href="#slide3">Persos</a></li>
                        <li><a href="#slide4">News</a></li>

                    </ul>

                </nav>
            </div>


    </div>


    <div id="slide2">
        <div class="wrapper">
        <h1>Histoire</h1><br />
            <div id="sabrina">
                <p>Sabrina Spellman est née suite à la relation<br />
                    entre un sorcier et une mortelle, ce qui fait<br />
                    d'elle un hybride des deux.</p>
            </div>
            <div id="greendale">
                <p>Elle vit dans la petite ville de Greendale,<br />élevée par ses deux tantes paternelles,<br />
                    Hilda et Zelda, et fréquente le lycée de la<br />
                    ville avec des adolescents mortels.</p>
            </div>

            <div id="néan">
                <p>Néanmoins, à l'aube de son seizième anniversaire,<br/>
                    elle doit faire un choix : accepter d'être baptisée pour<br/>
                    devenir membre de la satanique Église de la Nuit<br/>
                    ou renoncer et continuer sa vie au côté des mortels mais <br/>
                    avec peu de pouvoirs.</p>
            </div>
        </div>
    </div>
    </div>

    <div id="slide3">
        <div class="wrapper">
        <h1>Personnages</h1><br />
       
            <div id="persos">
                
                
                <?php
    
    $req=$bdd->query("SELECT id, titre FROM perso");
    while($don=$req->fetch()){
        echo "<div class='perso'>";
        echo "<div><a href='perso.php?id=".$don['id']."'>".$don['titre']."</a></div>";
        
             
    echo "</div>";
    }
    $req->closeCursor();?>
            </div>
        </div>
    </div>
    <div id="slide4">
        <div class="wrapper">
        <h1> News</h1><br />
            <div id="news">
                
                <?php
   
    $req=$bdd->query("SELECT id, titre, auteur, DATE_FORMAT(date,'%d - %m - %Y ') AS date FROM news ORDER BY date ASC");
    while($don=$req->fetch()){
        echo "<div class='news'>";
        echo "<div><a href='news.php?id=".$don['id']."'>".$don['titre']."</a></div>";
        echo "<div>".$don['date']."</div>";
             
    echo "</div>";
    }
    $req->closeCursor();?>
            </div>
        </div>
    </div>
    <footer>
<p>Site réalisé par nonosaurus Rex</p>
</footer>
</body>

</html>