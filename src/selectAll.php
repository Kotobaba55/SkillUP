

<?php 
require "connexion.php";

$connexion = new Database;
$pdo = $connexion->dbConnection();

$sql = "SELECT * FROM dev ";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

?>


