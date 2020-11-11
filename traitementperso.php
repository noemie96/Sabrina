<?php
    if(isset($_POST['titre'])){
        $err=0;
            if($_POST['titre']==""){
                $err=1;
            }
            else{
                $titre=htmlspecialchars($_POST['titre']);
            }

            if($_POST['texte']==""){
                $err=2;
            }      
            else{
                  
                $texte=htmlspecialchars($_POST['texte']);
            }
            
              

        if($err==0){
            $dossier = 'images/';
            $fichier = basename($_FILES['couverture']['name']);
            $taille_maxi = 2000000;
            $taille = filesize($_FILES['couverture']['tmp_name']);
            $extensions = array('.png','.jpg','.jpeg');
            $extension = strrchr($_FILES['couverture']['name'], '.'); 


            if(!in_array($extension, $extensions)) // on test si l'extension du fichier uploadé correspond aux extensions autorisées
            {
                $erreur = 'Vous devez uploader un fichier de type png, jpg, jpeg, ...';
            }
            if($taille>$taille_maxi)		// on teste la taille de notre fichier 
            {
                $erreur = 'Le fichier dépasse la taille autorisée';
            }


            if(!isset($erreur)) // Si tous les tests sont OK on passe à l'étape de l'upload sur notre serveur
            {
                //On formate le nom du fichier, strtr remplace tous les KK spéciaux en normaux suivant notre liste 
                $fichier = strtr($fichier, 
                    'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
                    'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
                $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier); // preg_replace remplace tout ce qui n'est pas un KK normal en tiret 
                $fichiercptl= rand().$fichier;
                
                if(move_uploaded_file($_FILES['couverture']['tmp_name'], $dossier . $fichiercptl)) // la fonction renvoie True si l'upload a été réalisé 
                {
                    include("connexion.php");
                    $req=$bdd->prepare("INSERT INTO perso(titre, texte, image) VALUES (:tit,:tx,:img)");
                    $req->execute(array(
                        ":tit"=>$titre,
                        ":tx"=>$texte,
                        ":img"=>$fichiercptl));
                    $req->closeCursor();
                    header('LOCATION:index.php?addsuccess=1');        
                }
                else{
                    header('LOCATION:ajouterperso.php?error=errorUpdate');
                }
            }   
            else{
                header('LOCATION:ajouterperso.php?error='.$erreur);
            }     

        }
        else{

        }            
    }   
    else{
        header("LOCATION:index.php");
    }     

    
?>