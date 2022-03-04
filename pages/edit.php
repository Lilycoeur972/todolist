<?php
    //var_dump($_GET);

    include ("../config.php");

 // Je teste l'existence de $_GETaction.

    if (isset($_GET["action"])) { ;
        // Je contrôle l'action à effectuer.

        // Je fabrique ma requête.
        
        switch ($_GET["action"]) {

            case "ajouter":
                $marequete ="INSERT INTO `task` (`id`,`tache`,`etat`) VALUES (NULL, '".$_POST["tache"]."','n')";
                
                break;

            case "modifier":
                $marequete="UPDATE `task` SET `etat` = 'o' WHERE `task`.`id` =".$_GET["id"]; 
                break;

            case "supprimer":
                $marequete="delete from task where id=".$_GET["id"];
                
                break;
        }
        // J'exécute ma requête.
     if ($mysqli->query($marequete)){

        // Je fait une redirection vers la page index.
        header('Location:/');

        
        } 
    }
    
?>
