<?php

$connexion = new Database;
$pdo = $connexion->dbConnection();

if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id_student'])) {
    $id_student = $_GET['id_student'];
    $req = $pdo->prepare("DELETE FROM dev WHERE id_student = :id_student");
    $req->bindParam(':id_student', $id_student);
    $req->execute();
}
?>



