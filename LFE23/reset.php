<?php
session_start();

        $conn = new PDO("mysql:host=localhost;dbname=lfe23", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $resetRankingQuery = "UPDATE equipe_8 SET mj = 0, bp = 0, bc = 0, db = 0, pt = 0";
        $conn->exec($resetRankingQuery);

        $deleteMatchesQuery = "DELETE FROM matchj";
        $conn->exec($deleteMatchesQuery);

        header('Location: gestion.php'); 

?>