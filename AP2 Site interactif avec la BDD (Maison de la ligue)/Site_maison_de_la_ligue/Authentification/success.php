<?php session_start();
if ((!isset($_SESSION['username'])) || (empty($_SESSION['username']))) {
// variable 'login' est non déclarée ou vide ATTENTION CHANGEMENT
echo "Tu n'es pas connecté(e).<br>";
echo "Tu dois te connecter pour accéder à cette page.<br>";
echo '<a href="index_connexion.php" title="Connexion">Connexion</a><br>';
exit();
}
?>

<p> Succès <p>
<p> Tu t'es bien authentifier.</p>