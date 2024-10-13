<?php
    if (isset($_GET['id_j'])) {
        $id_j = $_GET['id_j'];

        $conn = new PDO("mysql:host=localhost;dbname=lfe23", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT nomeq, nom, prenom, buts FROM jequipe WHERE id_j = :id_j";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id_j', $id_j, PDO::PARAM_INT);
        $stmt->execute();
        $joueur = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $nomeq = $_POST["nomeq"];
        $buts = $_POST["buts"];


        if (!empty($nom) && !empty($prenom) && !empty($nomeq)) {
            $sql = "UPDATE jequipe SET nom = :nom, prenom = :prenom, nomeq = :nomeq, buts = :buts WHERE id_j = :id_j";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':nomeq', $nomeq);
            $stmt->bindParam(':buts', $buts);
            $stmt->bindParam(':id_j', $id_j, PDO::PARAM_INT);
            $stmt->execute();
            header('Location: gestion.php');
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modifier le résultat du match</title>
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

    body {
  font-family: Arial, sans-serif;
  background-color: #e9e9eb;
  color: #333;
  margin: 0;
  padding: 20px;
}

h2 {
  text-align: center;
  margin-bottom: 20px;
}

form {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 5px;
}

label {
  display: block;
  margin-bottom: 10px;
}

input[type="number"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

input[type="submit"] {
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  margin-left:9px;
}

input[type="submit"]:hover {
  background-color: #0056b3;
}


@media (max-width: 600px) {
  body {
    font-size: 14px;
  }
}


@media (min-width: 601px) {
  body {
    font-size: 16px;
  }
}


@media print {
  body {
    font-size: 12px;
  }
  form {
    border: none;
    box-shadow: none;
  }
  input[type="submit"] {
    display: none;
  }
}
.total{
    margin-top :180px;
    background:  rgb(214, 231, 214);

}
body{
    background-color: #e9e9eb;
    /* margin-top:180px; */
}
.float a{
  background-color: #007bff;
  color:black;
}

    </style>
</head>
<body>
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
            
            <a href="gestion.php"><b> .: Panneau de commande :. </b></a>

        </div>
    
        </section>

<div class="registrazione">
    <form method="POST" action="">
        <fieldset>
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" id="nom" name="nom" pattern="[A-Za-z]{2,30}"
                    placeholder="Entrez votre nom" value="<?php echo $joueur['nom']; ?>" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prenom :</label>
                <input type="text" class="form-control" id="prenom" name="prenom" pattern="[A-Za-z]{2,30}"
                    placeholder="Entrez votre prenom" value="<?php echo $joueur['prenom']; ?>" required>
            </div>

            <div class="form-group">
                <label for="prenom">Buts :</label>
                <input type="number" value="<?php echo $joueur['buts']; ?>" min="0" name="buts">
            </div>


            <div class="form-group">
                <label for="nomeq">Nom d'equipe :</label>
                <select name="nomeq">
                    <?php
                    include('connexion.php');

                    $sql = "SELECT * FROM equipe_8";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();

                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        $nomeq = htmlspecialchars($row['nomeq']);
                        $selected = ($joueur['nomeq'] === $nomeq) ? 'selected' : '';
                        echo "<option value='$nomeq' $selected>$nomeq</option>";
                    }
                    ?>
                </select>
            </div>       
            <button type="submit" class="btn">enregistrer</button>
        </fieldset>
    </form>
</div>
</body>
</html>    </div>
</body>
</html>
