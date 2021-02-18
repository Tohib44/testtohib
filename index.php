<?php 
  
  require('insert.php') ; 

  $sql = 'SELECT * FROM `client`' ; 

  $query = $db->prepare($sql) ; 

  $query->execute(); 

  $result = $query->fetchAll(PDO::FETCH_ASSOC); 

  require_once('close.php') ; 
  
  /*require('insert.php') ;
  $results=$db->query("SELECT * FROM cleints");
  $results->execute();
  $result=$results->fetchAll();
  var_dump($result);*/
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Tohib </title> 

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css"> 

</head>
<body>
     <main class="container"> 
        <div class="row">
          <section class="col-12"> 
          <br>
        <h1>LISTE DES INFORMATIONS ENREGISTREES</h1>
         <br>
             <table class="table">
               <thead > 
                 <th>ID</th>
                 <th>Nom</th> 
                 <th>Prenom</th>
                 <th>Numero</th>
                 <th>commentaire</th>
                 <th>Modifier</th>
                 <th>Supprimer</th>
                </thead> 

                <tbody> 
                   <?php
                   //var_dump($result);
                       foreach($result as $info) { 
                       ?> 
                         <tr> 
                              <td><?= $info['id'] ?></td>
                              <td><?= $info['nom'] ?></td> 
                              <td><?= $info['prenom'] ?></td>
                              <td><?= $info['numero_tel'] ?></td>
                              <td><?= $info['commentaire'] ?></td>
                              <td><a href="update.php?id=<?= $info['id'] ?>" class="btn btn-success">Modifier</a></td>
                              <td>
                                <form method="post" action="delete.php">
                                    <input type="hidden" name="id" value="id=<?= $info['id'] ?>">
                                    <input class="btn btn-danger" type="submit" name="supprimer" value="Supprimer">
                                </form>
                              </td>
                         </tr> 
                     <?php 
                      }
                     ?>
                 
              </tbody>
           </table>
           <a href="create.php" class="btn btn-primary">Entrez vos informations</a> 

          </section>


        </div>


      </main>
  </body>
</html>