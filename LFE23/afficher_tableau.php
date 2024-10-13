<?php
require_once('connexion.php');
$stm = $conn->prepare("SELECT nomeq, mj, bp, bc, db, pt FROM equipe_8");
$stm->execute();
$data = $stm->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Tableau des équipes</title>
</head>
<body>
    <table class="table">
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>prenom</th>
            <th>email</th>
            <th>sexe</th>
            <th>dn</th>
            <th>passeport</th>
            <th>pays</th>
            <th>photo</th>
            <th>actions</th>

        </tr>

        <?php foreach($data as $row): ?>
        <tr>
            <td><?php echo $row['nom']; ?></td>
            <td><?php echo $row['prenom']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['sexe']; ?></td>
            <td><?php echo $row['datedenaissance']; ?></td>
            <td><?php echo $row['passeword']; ?></td>
            <td><?php echo $row['pays']; ?></td>
            <td><?php echo $row['photo']; ?></td>
            <td><?php echo $row['actions']; ?></td>


        </tr>

   
    </table>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
