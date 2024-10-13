<?php


session_start();

$nomeq1 = $_POST["nomeq1"];
$sc1 = $_POST["sc1"];
$nomeq2 = $_POST["nomeq2"];
$sc2 = $_POST["sc2"];
$gm = $_POST["gm"];

if (!isset($nomeq1) || !isset($sc1) || !isset($nomeq2) || !isset($sc2) || !isset($gm)) {
    header('Location: enregistrerm.php');
    exit();
} else {
    include('connexion.php');

    $query = "INSERT INTO matchj VALUES (NULL, :nomeq1, :sc1, :nomeq2, :sc2, :gm)";
    $stmt = $conn->prepare($query);

    $stmt->bindParam(':nomeq1', $nomeq1);
    $stmt->bindParam(':sc1', $sc1);
    $stmt->bindParam(':nomeq2', $nomeq2);
    $stmt->bindParam(':sc2', $sc2);
    $stmt->bindParam(':gm', $gm);

    $stmt->execute();


if($sc1==$sc2){ 
    $updateTeam1Query = "UPDATE equipe_8 SET bp = bp + :sc1, bc = bc + :sc2, pt = pt + 1,mj=mj+1 WHERE nomeq = :nomeq1";
    $stmtTeam1 = $conn->prepare($updateTeam1Query);
    $stmtTeam1->bindParam(':sc1', $sc1);
    $stmtTeam1->bindParam(':sc2', $sc2);
    $stmtTeam1->bindParam(':nomeq1', $nomeq1);
    $stmtTeam1->execute();

    $updateTeam2Query = "UPDATE equipe_8 SET bp = bp + :sc2, bc = bc + :sc1, pt = pt + 1,mj=mj+1 WHERE nomeq = :nomeq2";
    $stmtTeam2 = $conn->prepare($updateTeam2Query);
    $stmtTeam2->bindParam(':sc1', $sc1);
    $stmtTeam2->bindParam(':sc2', $sc2);
    $stmtTeam2->bindParam(':nomeq2', $nomeq2);
    $stmtTeam2->execute();
}

if($sc1>$sc2){ 
    $updateTeam1Query = "UPDATE equipe_8 SET bp = bp + :sc1, bc = bc + :sc2, pt = pt + 3,db = bp - bc,mj=mj+1 WHERE nomeq = :nomeq1";
    $stmtTeam1 = $conn->prepare($updateTeam1Query);
    $stmtTeam1->bindParam(':sc1', $sc1);
    $stmtTeam1->bindParam(':sc2', $sc2);
    $stmtTeam1->bindParam(':nomeq1', $nomeq1);
    $stmtTeam1->execute();

    $updateTeam2Query = "UPDATE equipe_8 SET bp = bp + :sc2, bc = bc + :sc1,db = bp - bc,mj=mj+1 WHERE nomeq = :nomeq2";
    $stmtTeam2 = $conn->prepare($updateTeam2Query);
    $stmtTeam2->bindParam(':sc1', $sc1);
    $stmtTeam2->bindParam(':sc2', $sc2);
    $stmtTeam2->bindParam(':nomeq2', $nomeq2);
    $stmtTeam2->execute();
}

if($sc1<$sc2){ 
    $updateTeam1Query = "UPDATE equipe_8 SET bp = bp + :sc1, bc = bc + :sc2,db = bp - bc,mj=mj+1 WHERE nomeq = :nomeq1";
    $stmtTeam1 = $conn->prepare($updateTeam1Query);
    $stmtTeam1->bindParam(':sc1', $sc1);
    $stmtTeam1->bindParam(':sc2', $sc2);
    $stmtTeam1->bindParam(':nomeq1', $nomeq1);
    $stmtTeam1->execute();

    $updateTeam2Query = "UPDATE equipe_8 SET bp = bp + :sc2, bc = bc + :sc1, pt = pt + 3,db = bp - bc,mj=mj+1 WHERE nomeq = :nomeq2";
    $stmtTeam2 = $conn->prepare($updateTeam2Query);
    $stmtTeam2->bindParam(':sc1', $sc1);
    $stmtTeam2->bindParam(':sc2', $sc2);
    $stmtTeam2->bindParam(':nomeq2', $nomeq2);
    $stmtTeam2->execute();
    
}





    header('Location: enregistrerm.php');
    exit();
}

  
    

?>

