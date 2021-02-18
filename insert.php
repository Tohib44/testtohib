<?php
require("db.php");


















     /*
     $server = "localhost" ; 
     $username = "root" ; 
     $password = "" ; 
     $dbname = "client" ; 
     

     $conn = mysqli_connect ( $server , $username , $password , $dbname ) ; 
       if(!$conn)
           {
              die ("Erreur connection:" .mysqli_connect_error()) ; 
           }
         else 
           {
              echo "Connecté" ;
           }
   
     if (isset($_post['submit1'])) {


        if(!empty($_post['nom1']) && !empty($_post['prenom1']) && !empty($_post['Numero1']) && !empty($_post['com1'])) { 
 
            $Nom = $_POST['nom1'];
            $Prenom = $_POST['prenom1'];
            $Numero = $_POST['Numero1'];
            $Comm = $_POST['com1'];

            $query = "insert into client (nom,prenom,numero_tel,commentaire) values ('$Nom','$Prenom','$Numero','$Comm')" ; 

            $run = mysqli_query( $conn , $query ) or die (mysqli_query_error()); 

            if ($run)  { 
                echo "Vos infrmations ont été enregistrées" ; 
            }
            else { 
                echo " Erreur " ;
            }
        }
        else { 
            echo "Veuillez remplir tous les champs" ; 
        }
      }

    
  
  */
  ?> 