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
    $E11=$_POST["E11"];
    $E12=$_POST["E12"];

    
    if(empty($E1) || empty($E2) || empty($E3) || empty($E4) || empty($E5) || empty($E6) || empty($E7) || empty($E8) || empty($E9) || empty($E10) ||empty($E11) ||empty($E12)){
        header('Location:12-scuad.html');
        exit(); 
     }else{
        $query="insert into calendrier12 values (NULL,'$NT','$E1','$E2','$E3','$E4','$E5','$E6','$E7','$E8','$E9','$E10','$E11','$E12')";

        include('connexion.php'); 
        $conn->exec($query);
        echo("save done!"); 

     }
?>
    
