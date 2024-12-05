<?php
    $user = 'root';
    $pass = ''; // ou 'root' ou rien
    // Data Source Name
    $dsn = 'mysql:host=localhost;dbname=cyber';
    $db = new PDO($dsn, $user, $pass);
    try { //tentative de connexion :  création d’un objet de la classe PDO
        $pdo= new PDO($dsn, $user, $pass);
        //echo 'Connect -> OK ! <br>' ;
        // S'il y a des erreurs de connexion, un objet PDOException est lancé.
    }
    catch (PDOException $e) { // Gestion des erreurs
        print "Erreur ! :".$e->getMessage()."<br>";
        die();
}
?>