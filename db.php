<?php 


    try{
        //database credentials
        define('DB_HOST', 'localhost');

        define('DB_NAME', 'client');

        define('DB_USERNAME', 'root');

        define('DB_PASSWORD', '');
        //$db est l'objet qu'on utilisera partout dans le projet pour se connecter à la BDD
        $db =  new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USERNAME,DB_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); 

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch (PDOException $e){
        die('erreur: ' .$e->getMessage());
    }


 ?>
