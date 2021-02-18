<?php 
	require("db.php"); 
  
    	   $id=$_POST['id'];
	      

	       $r=$db->query("DELETE FROM client WHERE id =".$id);
	       $r->execute();


	 	   echo 'Suppression effectuer avec succès';
	 	   header("Location : index.php");


 ?>