<?php
session_start();

if(!isset($_POST["txtequipe1"])){
    header('Location:8-scuad.html');
    exit();
}

$A=$_POST["txtequipe1"];
$B=$_POST["txtequipe2"];
$C=$_POST["txtequipe3"];
$D=$_POST["txtequipe4"];
$E=$_POST["txtequipe5"];
$F=$_POST["txtequipe6"];
$G=$_POST["txtequipe7"];
$H=$_POST["txtequipe8"];


if(empty($A) || empty($B) || empty($C) || empty($D) || empty($E) || empty($F) || empty($G) || empty($H) ){
    header('Loaction:8-scuad.html');
    exit();
}
?>