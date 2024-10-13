<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $teamName = $_POST['nomesq'];

    if (empty($teamName)) {
        echo "Veuillez saisir le nom de l'équipe.";
    } else {
        // $dbHost = 'your_database_host';
        // $dbName = 'your_database_name';
        $dbUser = 'lfe23';
        $dbPass = '';

        try {
            $conn = new PDO("mysql:host=localhost;dbname=lfe23","root","");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Database connection failed: " . $e->getMessage();
            exit();
        }

        // Prepare the SQL statement to insert the team into the database
        $stmt = $conn->prepare("INSERT INTO teams (team_name) VALUES (:teamName)");

        // Bind the team name parameter
        $stmt->bindParam(':teamName', $teamName);

        // Execute the SQL statement
        if ($stmt->execute()) {
            echo "L'équipe a été enregistrée avec succès!";
        } else {
            echo "Une erreur s'est produite lors de l'enregistrement de l'équipe.";
        }
    }
}
?>
