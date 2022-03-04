<?php
    //Paramètrage de ma base de donnée.

    $host="localhost";
    $username = "root";
    $password="";
    $database= "todolist";

    // connection de ma base de données "livredor".
    
   
    $mysqli = @new mysqli($host, $username, $password,$database);

    if ($mysqli->connect_errno) {

        echo "site en maintenance";

        exit();// j'arrête l'exécution du programme.

        /* Use your preferred error logging method here */

        //error_log('Connection error: ' . $mysqli->connect_errno);
    }






?>