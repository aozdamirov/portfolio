<?php
session_start();
include("config.php");
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<link rel="stylesheet" href = "styles/style.css"/>
		<meta charset="utf-8" />
		<title> Authentification </title>
	</head>
	<body>
		<header>
			<p> <strong> Maison de la ligue </strong> <br>
				<p>Authentification</p>
		</header>
		<section>
			<nav>
				<ul>
					<li><a href="../index.html">Accueil</a></li>
					<li><a href="login.php" >Connexion</a> </li>
                    <li><a href="register.php" >Inscription</a></li>
					<li><a href="../RequeteSQLPHP/questions.php">Questions</a></li>
					<li><a href="../RequeteSQLPHP/questionsAdmin.php">Questions admin</a></li>
					<li><a href="../RequeteSQLPHP/AllResult.php">Résultats</a></li>
				</ul>
			</nav>


<?php

$message = '';

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['role'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $role = $_POST['role']; // Récupérer le rôle sélectionné dans le formulaire

    $sql = "INSERT INTO user (email, username, password, role) VALUES (:email, :username, :password, :role)";
    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute(['email' => $email, 'username' => $username, 'password' => $password, 'role' => $role]);

    if ($result) {
        $message = 'Inscription réussie!';
        header('Location: login.php');
    } else {
        $message = 'Erreur lors de l\'inscription.';
    }
}
?> 


<h1>Inscription</h1>

<form action="register.php" method="post">

<label for="role">Rôle :</label><br>
    <select id="role" name="role">
        <option value="user">Utilisateur</option>
        <option value="admin">Administrateur</option>
    </select><br><br>

    <label for="username">Nom d'utilisateur :</label><br>
    <input type="text" id="username" name="username" required><br><br>

    <label for="email">Email :</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">Mot de passe :</label><br>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" value="S'inscrire">
</form>

			<footer>
				<a href="FormulaireContact.html" >Contact</a> <br>
				<p> Fin de la page </p>
			</footer>
		</section>
	</body>
</html>