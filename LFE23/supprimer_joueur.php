<?php
session_start();
if (isset($_GET['id_j']) && is_numeric($_GET['id_j'])) {
    $id_j = $_GET['id_j'];

    try {
        $conn = new PDO("mysql:host=localhost;dbname=lfe23", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "DELETE FROM jequipe WHERE id_j = :id_j";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id_j', $id_j, PDO::PARAM_INT);
        $stmt->execute();

        header('Location: gestion.php');
        exit();
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
?>