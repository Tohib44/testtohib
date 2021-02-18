<?php
require("db.php");

     if (isset($_POST['envoyer'])) {


        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['numero_tel']) && !empty($_POST['commentaire'])) { 
            extract($_POST);

            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $numero_tel = $_POST['numero_tel'];
            $commentaire = $_POST['commentaire'];
            $query = $db->prepare("INSERT INTO client(nom, prenom, numero_tel, commentaire)
                         VALUES (:nom, :prenom, :numero_tel, :commentaire)"); 
            $query->execute([
                'nom' => $nom,
                'prenom' => $prenom, 
                'numero_tel' => $numero_tel,
                'commentaire' => $commentaire,
            ]);

            header('Location: index.php');

         

        } else { 
          
            echo "Veuillez remplir tous les champs" ; 
        }

      }else {
        
      }

    
?>   