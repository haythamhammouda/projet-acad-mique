<?php
session_start();

$conn = new PDO("mysql:host=localhost;dbname=lfe23", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $deleteTeamsQuery = "DELETE FROM equipe_8";
        $conn->exec($deleteTeamsQuery);

        $deleteMatchesQuery = "DELETE FROM matchj";
        $conn->exec($deleteMatchesQuery);

        $deleteJoueursQuery = "DELETE FROM jequipe";
        $conn->exec($deleteJoueursQuery);



        header('Location: gestion.php'); 

        ?>