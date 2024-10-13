<?php require_once('connexion.php');?>
<!doctype html>
<html>
<head>
<meta charset ="UTF-8">
<title> 4x4 of-road </title>
<link rel="stylesheet" href ="loccar_style.css" type="text/css">
<style>
.myphoto{
    width:50px; height:50px;border-radius:50%;border: 1px solid;
}
</style> 
</head>
<body>
    <div id="globl">
        <div id="profil">
            <?php 
            session_start();
            echo "bnj et bienvenue".$_sesssion['monlogin']."<br>";
            $req ="select * from utilisateur where login = '"$_session['monlogin']."'";
            $resultat=mysqli_query($cnloccar,$req);
            $ligne=mysqli_ fetch_assoc($resultat);
            ?> 
            <img src="<?php echo =$ligne['my_photo'];?>"class="myphoto">
            <br>
            <a href="deconnecter.php">Deconnections</a>

            </div> 

            <div id="tableaubord">

</div>
</div> 
                

