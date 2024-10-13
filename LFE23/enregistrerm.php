<!DOCTYPE html>
<html lang="fr">
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
        <a href="gestion.php">
        </a>
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
      
    
    <section class="registrazione">
    
    <form method="POST" action="matchj.php">
    <fieldset>
        <legend>Jour du match record</legend>

        <label>Nom d'équipe :</label>
        <select name="nomeq1">
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
         <label>Score</label>
  <input type="number" value="0" min="0" name="sc1"><br>
				<h5>VS</h5>
                <label>Nom d'équipe :</label>
<select name="nomeq2">
    <?php
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $nomeq = htmlspecialchars($row['nomeq']);
        if ($nomeq !== $_POST['nomeq1']) {
            echo "<option value='$nomeq'>$nomeq</option>";
        }
    }
    ?>
</select><label>Score</label>
<input type="number" value="0" min="0" name="sc2">
<label>Game-Weeq :</label>
  <input type="number" value="1" min="1" name="gm"><br>

				
                  <input type="submit" value="enregistrer" name="submit">
                  <input type="reset" value="reset">
				</fieldset>
				
				</form>

    
    </section>

      
</body>
</html>

