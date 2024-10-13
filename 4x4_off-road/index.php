<?php
require_once('connexion.php');

if (isset($_POST['btsubmit'])) {
    $mc = $_POST['motcle'];
    $reqSelect = "SELECT * FROM automobil WHERE marque LIKE :mc";
    $stmt = $conn->prepare($reqSelect);
    $stmt->bindValue(':mc', '%' . $mc . '%', PDO::PARAM_STR);
    $stmt->execute();
} else {
    $reqSelect = "SELECT * FROM automobil";
    $stmt = $conn->query($reqSelect);
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4x4 off-road</title>
    <link rel="stylesheet" href="css/haytham.css">
</head>
<body>
<div id="entete">
    <video autoplay loop muted class="video_entete">
        <source src="image/loc.mp4" type="video/mp4">
    </video>
</div>
<div id="formauto">
    <p class="nomsite">location car</p>
    <form name="formauto" method="post" action="">
        <input type="text" class="motcle" name="motcle" placeholder="recherche par marque...">
        <input type="submit" class="btfind" name="btsubmit" value="recherche">
    </form>
</div>
<div>
    <?php while ($ligne = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
        <div id="auto">
            <img src="<?php echo $ligne['photo']; ?>"/><br>
            <?php echo $ligne['marque']; ?><br>
            <?php echo $ligne['prix']; ?><br>
            <?php echo $ligne['mat']; ?><br>
        </div>
    <?php } ?>
</div>
</body>
</html>