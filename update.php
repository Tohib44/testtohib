<?php 
    require("db.php"); 
    
    $result=$db->query("SELECT id, nom FROM client WHERE id=".$_GET['id']."");

   

    $result->execute();
    $c=$result->fetchAll();
   

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
          <H1 class="text-center" style="text-align: center;"> MODIFICATION </H1>
        </div>
        <form action="formupdate.php" method="POST" class="mx-auto" style="width: 800px;" >
            <div class="form-row " >
              <div class="form-group col-md-12">
                <label for="nom">ID</label>
                <input type="text" name="nom" value="<?= $c[0]['nom']; ?>" class="form-control" id="id" placeholder="Entrez votre ID">
                <input type="hidden" name="id" value="<?= $c[0]['id'] ?>" class="form-control" id="id" placeholder="Entrez votre ID">
              </div> 
              <button type="submit" name="submit" id='submit' class="btn btn-primary">Envoyez</button>
          </form>
     </div> 
</body> 

</html> 





