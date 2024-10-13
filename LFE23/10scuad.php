<?php

    session_start();

    $NT=$_POST["NT"];
    $E1=$_POST["E1"];
    $E2=$_POST["E2"];
    $E3=$_POST["E3"];
    $E4=$_POST["E4"];
    $E5=$_POST["E5"];
    $E6=$_POST["E6"];
    $E7=$_POST["E7"];
    $E8=$_POST["E8"];
    $E9=$_POST["E9"];
    $E10=$_POST["E10"];

    
    if(empty($E1) || empty($E2) || empty($E3) || empty($E4) || empty($E5) || empty($E6) || empty($E7) || empty($E8) || empty($E9) || empty($E10)){
        header('Location:10-scuad.html');
        exit(); 
     }else{
        $query="insert into calendrier10 values (NULL,'$NT','$E1','$E2','$E3','$E4','$E5','$E6','$E7','$E8','$E9','$E10')";

        include('connexion.php'); 
        $conn->exec($query);
        echo("save done!"); 

     }
?>
    
