<?php

  if(!isset($_POST["nom"])){
        header('Location:contact.html');
      exit();
    }
    $nom=$_POST["nom"];
    $email=$_POST["email"];
    $message=$_POST["message"];

    if(empty($nom) || empty($email) || empty($message) ){
      header('Location:contact.html');
    }else{
        $query="insert into messages values (NULL,'$email','$nom','$message')";

        require_once('connexion.php'); 
        $conn->exec($query);
       // echo "bien!";
        header('Location:home.html');
        exit();
    }