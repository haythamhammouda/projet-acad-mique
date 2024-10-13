<?php
    session_start();
    if(!isset($_POST["password"])){
        header('Location:Login.html');
        exit();
    }

    $password=$_POST["password"];
    $nomadmin=$_POST["nomadmin"];
    if(empty($password) || empty($nomadmin)){
        header('Loaction:login.html');
        exit();
    }
    require_once('connexion.php');
    $stm=$conn->prepare("select * from admins where password=:password and nomadmin=:nomadmin");
    $stm->execute(array(":nomadmin"=>$nomadmin,":password"=>$password));
    $data=$stm->fetch();
    if($data != null){
        
        $_SESSION['password']=$data['password'];
        $_SESSION['nomadmin']=$data['nomadmin'];
        
        //echo"bien!";
       header('Location:admin.html');
       // exit();
    }else{
        header('Location:login.html');
    }
    

?>