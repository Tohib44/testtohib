


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
    

    <div class="container fluid">
        <div class="Contenu">
          <H1 class="text-center" style="text-align: center;"> FORMULAIRE CLIENT </H1>
        </div>
    </div>

     <div class="container"> 

        <form action="ajouter.php" method="POST" class="mx-auto" style="width: 800px;" >
            <div class="form-row " >
              <div class="form-group col-md-6">
                <label for="nom">Nom</label>
                <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom">
              </div>

              <div class="form-group col-md-6">
                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prenom">
              </div>
            </div>

            <div class="form-group">
              <label for="Numero">Numero</label>
              <input type="phone" name="numero_tel" class="form-control" id="Numero" placeholder="Votre numero de téléphone">
            </div>

            <div class="form-group">
              <label for="com">Commentaire</label>
              <input type="text" name="commentaire" class="form-control" id="com" placeholder="Ecrivez ce que vous voulez">
            
            </div>
            <button type="submit" name="envoyer" id='submit' class="btn btn-primary">Envoyez</button>
          </form>
     </div> 
</body> 

</html> 





