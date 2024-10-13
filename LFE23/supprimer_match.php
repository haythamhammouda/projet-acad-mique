<?php

session_start();

if (isset($_GET['idm']) && is_numeric($_GET['idm'])) {
    $idm = $_GET['idm'];
    include('connexion.php');

    $query = "SELECT nomeq1, sc1, sc2, nomeq2,idm FROM matchj WHERE idm = :idm";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':idm', $idm);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $nomeq1 = $row['nomeq1'];
    $sc1 = $row['sc1'];
    $nomeq2 = $row['nomeq2'];
    $sc2 = $row['sc2'];
     
 if($sc1==$sc2){
    $deleteQuery = "DELETE FROM matchj WHERE idm = :idm";
    $stmtDelete = $conn->prepare($deleteQuery);
    $stmtDelete->bindParam(':idm', $idm);
    $stmtDelete->execute();

    $updateClassementQuery = "UPDATE equipe_8 SET bp = bp - :sc1, bc = bc - :sc2, mj = mj - 1,pt=pt-1 ,db=bp-bc WHERE nomeq = :nomeq1";
    $stmtClassement = $conn->prepare($updateClassementQuery);
    $stmtClassement->bindParam(':sc1', $sc1);
    $stmtClassement->bindParam(':sc2', $sc2);
    $stmtClassement->bindParam(':nomeq1', $nomeq1);
    $stmtClassement->execute();

    $updateClassementQuery2 = "UPDATE equipe_8 SET bp = bp - :sc2, bc = bc - :sc1, mj = mj -1 ,db=bp-bc,pt=pt-1 WHERE nomeq = :nomeq2 ";
    $stmtClassement2 = $conn->prepare($updateClassementQuery2);
    $stmtClassement2->bindParam(':sc1', $sc1);
    $stmtClassement2->bindParam(':sc2', $sc2);
    $stmtClassement2->bindParam(':nomeq2', $nomeq1);
    $stmtClassement2->execute();


 }


  if($sc1<$sc2){
     $deleteQuery = "DELETE FROM matchj WHERE idm = :idm";
     $stmtDelete = $conn->prepare($deleteQuery);
     $stmtDelete->bindParam(':idm', $idm);
     $stmtDelete->execute();

     $updateClassementQuery = "UPDATE equipe_8 SET bp = bp - :sc2, bc = bc - :sc1, mj = mj -1 ,db=bp-bc,pt=pt-3 WHERE nomeq = :nomeq2";
     $stmtClassement = $conn->prepare($updateClassementQuery);
     $stmtClassement->bindParam(':sc1', $sc1);
     $stmtClassement->bindParam(':sc2', $sc2);
     $stmtClassement->bindParam(':nomeq2', $nomeq2);
     $stmtClassement->execute();

     $updateClassementQuery2 = "UPDATE equipe_8 SET bp = bp - :sc1, bc = bc - :sc2, mj = mj -1 ,db=bp-bc WHERE nomeq = :nomeq1 ";
     $stmtClassement2 = $conn->prepare($updateClassementQuery2);
     $stmtClassement2->bindParam(':sc1', $sc1);
     $stmtClassement2->bindParam(':sc2', $sc2);
     $stmtClassement2->bindParam(':nomeq1', $nomeq1);
     $stmtClassement2->execute();
 
 }
 if($sc1>$sc2){

    $deleteQuery = "DELETE FROM matchj WHERE idm = :idm";
    $stmtDelete = $conn->prepare($deleteQuery);
    $stmtDelete->bindParam(':idm', $idm);
    $stmtDelete->execute();

    $updateClassementQuery = "UPDATE equipe_8 SET bp = bp - :sc1, bc = bc - :sc2, mj = mj -1 ,db=bp-bc,pt=pt-3 WHERE nomeq = :nomeq1";
    $stmtClassement = $conn->prepare($updateClassementQuery);
    $stmtClassement->bindParam(':sc1', $sc1);
    $stmtClassement->bindParam(':sc2', $sc2);
    $stmtClassement->bindParam(':nomeq1', $nomeq1);
    $stmtClassement->execute();


    $updateClassementQuery2 = "UPDATE equipe_8 SET bp = bp - :sc2, bc = bc - :sc1, mj = mj -1 ,db=bp-bc WHERE nomeq = :nomeq2 ";
    $stmtClassement2 = $conn->prepare($updateClassementQuery2);
    $stmtClassement2->bindParam(':sc1', $sc1);
    $stmtClassement2->bindParam(':sc2', $sc2);
    $stmtClassement2->bindParam(':nomeq2', $nomeq2);
    $stmtClassement2->execute();


 }
    header('Location: gestion.php');
    exit();
} else {
    echo("not supp");
}
?>