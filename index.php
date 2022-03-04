<?php 
    // fichier utile à ma base de données.
    include ("config.php");
?>
   <a href="/pages/edit.php"> editer </a> </br>
<?php
    
    
    // connection de ma base de données "todolist".
    


    // Ma requête de lecture de la table tache.
    // Sélectionner tous les champs(*) de la table message.
    
    $result = $mysqli->query("SELECT *  FROM task");

    //var_dump ($result);

    foreach ($result as $rowtache) {
        /* Processing of the data retrieved from the database */
       // Traitement des données récupérer depuis   la base de données
      

       echo $rowtache["id"]."</br>" ;
       echo $rowtache["dateins"]."</br>" ;
       echo $rowtache["tache"]."</br>" ;
       
       ?>
      <?php 
      if ($rowtache["etat"]!='o') { 
          // début de test etat pour afficher réaliser.

          
      
      ?> 
      <a href="/pages/edit.php?actionmodifier&id=<?php echo$rowtache["id"]; ?>"> réaliser </a> </br>

        <?php 
      } //end if test état.
        ?>


       <a href="/pages/edit.php?actionsupprimer&id=<?php echo$rowtache["id"]; ?>"> suprrimer </a> </br>
       <?php

     
          

    }

    
    echo"index de todolist";
    
?>

    <a href="/pages/formulaire.php"> Ajouter une page  </a> </br> 

