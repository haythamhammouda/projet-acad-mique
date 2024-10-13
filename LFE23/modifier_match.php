<?php
if (isset($_GET['idm'])) 
    $idm = $_GET['idm'];

    $conn = new PDO("mysql:host=localhost;dbname=lfe23", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT nomeq1, sc1, sc2, nomeq2, gm FROM matchj WHERE idm = :idm";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':idm', $idm, PDO::PARAM_INT);
    $stmt->execute();
    $match = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$match) {
        die("Match n'existe pas.");
    }
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nsc1 = $_POST['nsc1'];
        $nsc2 = $_POST['nsc2'];
    
        if (!is_numeric($nsc1) || !is_numeric($nsc2)) {
            die("Invalid input. Scores must be numeric.");
        }
    
        $sqlUpdate = "UPDATE matchj SET sc1 = :nsc1, sc2 = :nsc2 WHERE idm = :idm";
        $stmtUpdate = $conn->prepare($sqlUpdate);
        $stmtUpdate->bindValue(':nsc1', $nsc1, PDO::PARAM_INT);
        $stmtUpdate->bindValue(':nsc2', $nsc2, PDO::PARAM_INT);
        $stmtUpdate->bindValue(':idm', $idm, PDO::PARAM_INT);
        $stmtUpdate->execute();
    
        
    
        header('Location: gestion.php'); 
        exit;
    }


?>

<!DOCTYPE html>
<html>
<head>
    <title>Modifier le résultat du match</title>
    <style>

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
    margin-top:180px;
}

    </style>
</head>
<body>
    <form method="post">
    <h2>Modifier le résultat du match</h2>

        <label for="nsc1">Score Equipe Local:</label>
        <input type="number" name="nsc1" value="<?php echo $match['sc1']; ?>" required />

        <label for="nsc2">Score Visiteurs:</label>
        <input type="number" name="nsc2" value="<?php echo $match['sc2']; ?>" required />


        <input type="submit" value="Sauvegarder les modifications" />
    </form>
</body>
</html>