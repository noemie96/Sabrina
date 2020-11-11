<?php
    if(isset($_POST['titre'])){
        $err=0;
            if($_POST['titre']==""){
                $err=1;
            }
            else{
                $titre=htmlspecialchars($_POST['titre']);
            }

            if($_POST['auteur']==""){
            $err=2;
             }
             else{
            $auteur=htmlspecialchars($_POST['auteur']);
             }

             if($_POST['date']==""){
             $err=3;
             }

            else{
               
             $date=htmlspecialchars($_POST['date']);
            }
            if($_POST['texte']==""){
                $err=4;
                }
   
               else{
                  
                $texte=htmlspecialchars($_POST['texte']);
               }
               

        if($err==0){
            
             include("connexion.php");
            $req=$bdd->prepare("INSERT INTO news (titre, auteur, date, texte) VALUES (:tit,:aut,NOW(),:tx)");
            $req->execute(array(
                ":tit"=>$titre,
                ":aut"=>$auteur,
                ":tx"=>$texte));
            $req->closeCursor();
            header('LOCATION:index.php?addsuccess=1');      
          }
        else{
            header('LOCATION:ajouternews.php?error=1');
        }
    }   
    else{
        header("LOCATION:index.php");
    }     
    
    
 ?>