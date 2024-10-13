<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Nom = $_POST["nom"];
    $Prenom = $_POST["prenom"];
    // $buts = $_POST["buts"];
    $nomeq = $_POST["nomeq"];

    // if (empty($Nom) || empty($Prenom) || empty($nomeq)) {
    //     header('Location: enregistrerj.php');
    //     exit();
    
        include('connexion.php');




        // $query = "INSERT INTO jequipe VALUES (NULL, :Nom, :Prenom, :buts, :nomeq)";
        $query = "insert into jequipe values (NULL,'$Nom','$Prenom',0,'$nomeq')";

        
        
        include('connexion.php'); 
        $conn->exec($query);


        header('Location: enregistrerj.php');
        exit();
    }

?>

<!DOCTYPE html>
<html lang="ar">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Area Gestione" /> 
    <meta name="keywords" content="Area Gestione" />
    <title>Gestion</title>

    
    <link rel="icon" href="cup.ico" />   
       
    <link rel="stylesheet" type="text/css" href="style2.css" /> 
    
    <link rel="stylesheet" media="mobile" href="styletrn2.css" />
    <link rel="stylesheet" media="pc" href="styletrn3.css" />
    
    <link rel="stylesheet" type="text/css" href="styletrn.css" media="print" />
    <style>
    .btn {
        background-color: blue;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: darkblue;
    }
    
</style>
<style>
                 .float a {
            display: inline-block;
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }

    </style>

</head>

<body>
<header>
        <h1 class="invisible"></h1>
        <p class="invisible"></p>
    
     
      </header>    

      
      <section class="modoflex">
      <div>
        <img src="logo-ehei.png" alt="logo eheioujda">
    </div>

    <div class="float"> 

  <img src="lfe23.png" style="height: 148px; margin-top: 13px;">

    </div>


    
        <div class="float">
            <h3>Mettre à jour le tournoi</h3>
            
            <a href="gestion.php"><b> .: Panneau de commande :. </b></a>

            <a href="inscriequipe.html">Inscrire l'équipe</a>
        <a href="enregistrerj.php">Enregistrer un joueur</a>
        <a href="enregistrerm.php">Enregistrer Match</a>
        </div>
    
      </section>
    <div class="registrazione">
        <form method="POST" action="">
        <fieldset>

            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" id="nom" name="nom" pattern="[A-Za-z]{2,30}" placeholder="Entrez votre nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prenom :</label>
                <input type="text" class="form-control" id="prenom" name="prenom" pattern="[A-Za-z]{2,30}" placeholder="Entrez votre prenom" required>
            </div>

            <!-- <div class="form-group">
                <label>Buts :</label>
                <input type="number" value="0" min="0" name="buts">

            </div> -->
            <div class="form-group">
                <label for="nomeq">Nom d'equipe :</label>
                <select name="nomeq" >
                    <?php
                    include('connexion.php');

                    $sql = "SELECT * FROM equipe_8";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();

                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        $nomeq = htmlspecialchars($row['nomeq']);
                        echo "<option value='$nomeq'>$nomeq</option>";
                    }
                    ?>
                </select>

            </div>       
                     <button type="submit" class="btn">enregistrer</button>

                  </fieldset>

        </form>
    </div>
</body>

</html>