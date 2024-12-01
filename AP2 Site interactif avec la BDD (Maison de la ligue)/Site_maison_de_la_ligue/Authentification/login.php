<?php
/* ANCIEN CODE
session_start();
include("config.php");

$message = '';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    //enfait il sufisait d'enlever AND password = :password, vu sur un forum, corrigé juste en dessous. 
    // https://forum.phpfrance.com/php-avance/topic281880-15.html?sid=e8fb78b582bf8171cb2551e84ef09cd5 réponse sur la 2nd page
    //$sql = "SELECT * FROM user WHERE username = :username AND password = :password";

    $sql = "SELECT * FROM user WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    // J'avais l'erreur : Uncaught PDOException: SQLSTATE[HY093] ... &  PDOException: SQLSTATE[HY093]: ...
    // Cette erreur venait du fait que dans $sql il n'y avait pas 'password', il fallait le supprimer. Corrigé en dessous.
    //$stmt->execute(['username' => $username, 'password' => $password]);
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch();

    if ($user) {
       if (password_verify($password, $user['password'])){
        $_SESSION['username'] = $username;
        header('Location: success.php');
        exit;
    } else {
        $message = 'Identifiants incorrects.';
    }
}
} */
?>

<?php
session_start();
include("config.php");

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE username = :username";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $user['role']; // Définir le rôle dans la session
            header('Location: success.php'); // Redirection vers success.php
            exit(); // Arrêter le script après la redirection
        } else {
            $message = 'Identifiants incorrects.';
        }
    } else {
        $message = 'Veuillez remplir tous les champs du formulaire.';
    }
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="styles/style.css"/>
    <meta charset="utf-8"/>
    <title>Authentification</title>
</head>
<body>
<header>
    <p><strong>Maison de la ligue</strong> <br>
        <p>Authentification</p>
</header>
<section>
    <nav>
        <ul>
            <li><a href="../index.html">Accueil</a></li>
            <li><a href="login.php">Connexion</a></li>
            <li><a href="register.php">Inscription</a></li>
            <li><a href="../RequeteSQLPHP/questions.php">Questions</a></li>
            <li><a href="../RequeteSQLPHP/questionsAdmin.php">Questions admin</a></li>
            <li><a href="../RequeteSQLPHP/AllResult.php">Résultats</a></li>
        </ul>
    </nav>

    <h1>Connexion</h1>

    <?php if ($message) : ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>

    <form action="login.php" method="post">
        <label for="username">Nom d'utilisateur :</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Mot de passe :</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Se connecter">
    </form>

    <footer>
        <a href="FormulaireContact.html">Contact</a> <br>
        <p>Fin de la page</p>
    </footer>
</section>
</body>
</html>