<?php

    session_start();

    $NE=$_POST["nomeq"];

    
      if(empty($NE)) {
        header('Location: inscriequipe.html');
        exit(); 
     }else{
      $query="insert into equipe_8 values (NULL,'$NE',0,0,0,0,0)";

        include('connexion.php'); 
        $conn->exec($query);
        // echo("save done!"); 
        header('Location: inscriequipe.html');

     }

     ?>