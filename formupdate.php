<?php 
require("db.php");
   
if (isset($_POST['submit'])) {

   
    if(!empty($_POST['nom']) ){ 

        $nom = $_POST['nom']; 
        $id = $_POST['id'];
       
        if($id){
         
          $result=$db->prepare("UPDATE client
                                  SET nom = :nom
                                  WHERE id = :id");
          $result->execute([
                  'nom' => $nom, 
                  'id' => $id         
               ]);
            $result ->closeCursor();      
            header("Location: index.php");
        }else {
          
          echo "Vous n'avez pas le droit d'effectuer cette modification";
        }
        
        
    } else { 
        $_SESSION['erreur'] = "URL invalide";
        header('Location: index.php');
    }
}

?>   


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout des informations</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css"> 

</head>

<body> 
    <div class="container">
        <div class="row">
          <H1 class="text-center" style="text-align: center;"> Modfier vos informations </H1>
        </div>
        <form action="" method="POST" class="mx-auto" style="width: 800px;" >
            <div class="form-row " >
              <div class="form-group col-md-6">
                <label for="nom">Nom</label>
                <input type="text" name="nom" class="form-control" id="nom" value = "<?= $modif['nom']?>">
              </div>

              <div class="form-group col-md-6">
                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" class="form-control" id="prenom"  value = "<?= $modif['prenom']?>">
              </div>
            </div>

            <div class="form-group">
              <label for="Numero">Numero</label>
              <input type="phone" name="Numero" class="form-control" id="Numero" value = "<?= $modif['Numero_tel']?>">
            </div>

            <div class="form-group">
              <label for="com">Commentaire</label>
              <input type="text" name="com" class="form-control" id="com" value = "<?= $modif['commentaire']?>">
            
            </div>
            <button type="submit" name="submit" id='submit' class="btn btn-primary">Envoyez</button>
          </form>
     </div> 
</body> 

</html> 