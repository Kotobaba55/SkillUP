


<?php
require "connexion.php";



class insert{
    public static function insertData($putName,$putFirstName,$putMail){
        $connexion = new Database;
        $pdo = $connexion->dbConnection();
        $req = $pdo->prepare("INSERT INTO dev (student_name, student_firstname, student_mail) VALUES (:putName, :putFirstName, :putMail)");
        // Liaison des paramètres
        $req->bindParam(':putName', $putName);
        $req->bindParam(':putFirstName', $putFirstName);
        $req->bindParam(':putMail', $putMail);
        $req->execute();
       
    }
}



if (isset($_POST['button'])) {
    $putName = htmlentities($_POST['putName']);
    $putFirstName = htmlentities($_POST['putFirstName']);
    $putMail = htmlentities($_POST['putMail']);

    // CODE-KO ITY : 

    // // Assurez-vous d'inclure votre classe Database ici
    // $connexion = new Database;
    // $pdo = $connexion->dbConnection();

    // // Utilisation de requête préparée pour éviter l'injection SQL
    // $req = $pdo->prepare("INSERT INTO dev (student_name, student_firstname, student_mail) VALUES (:putName, :putFirstName, :putMail)");

    // // Liaison des paramètres
    // $req->bindParam(':putName', $putName);
    // $req->bindParam(':putFirstName', $putFirstName);
    // $req->bindParam(':putMail', $putMail);

    // // Exécution de la requête
    // $req->execute();

    //
    
    insert::insertData($putName,$putFirstName,$putMail);
    header("location:../public/home.php");
}
?>






<?php
// // if (isset($_POST['button'])) {

// //     $putName = $_POST['putName'];
// //     $putFirstName = $_POST['putFirstName'];
// //     $putMail = $_POST['putMail'];

// //     $connexion = new Database;
// //     $pdo = $connexion->dbConnection();
// //     $req =  $pdo->prepare("INSERT INTO dev(student_name, student_firstname, student_mail) VALUES ($_POST['putName'],$_POST['putFirstName'],$_POST['putMail'])");
// //     $req->execute();
// }
?>

