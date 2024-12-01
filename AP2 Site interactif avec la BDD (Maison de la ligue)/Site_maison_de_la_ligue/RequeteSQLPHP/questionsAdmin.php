<!-- -RAJOUTER DES BOUTONS (TYPE SOMMAIRE) qui AFFICHE LES REPONSES SUR UNE AUTRE PAGE OU QUI REDIRIGE SUR LA MEME PAGE
- L'authentification va afficher cette page avec toutes les réponses si on se connecte (hors rapport avec boutons),
- il faudrat enlever les commentaires et nommer le fichier resultat_auth pour pouvoir y acceder.
- Cette page est la page d'index. (non)
- L'authentification va directement afficher tout les résultats. (Va permettre d'accéder à cette page) --> 


<?php
session_start();
include("config.php");
?>

<?php 
if ((!isset($_SESSION['username'])) || (empty($_SESSION['username']))) {
// variable 'login' est non déclarée ou vide ATTENTION CHANGEMENT
echo "Tu n'es pas connecté(e).<br>";
echo "Tu dois te connecter pour accéder à cette page.<br>";
echo '<a href="../Authentification/login.php" title="Connexion">Connexion</a><br>';
exit();
}
if ($_SESSION['role'] !== 'admin') {
    echo "Tu n'as pas les autorisations nécessaires pour accéder à cette page.<br>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<link rel="stylesheet" href = "styles/style.css"/>
		<meta charset="utf-8" />
		<title> Requête SQL PHP </title>
	</head>
	<body>
		<header>
			<p> <strong> Maison de la ligue </strong> <br> </p>
			<p>Requête SQL PHP ADMIN</p>
		</header>
		<section>
			<nav>
				<ul>
					<li><a href="../index.html">Accueil</a></li>
					<li><a href="../Authentification/login.php">Connexion</a></li>
            		<li><a href="../Authentification/register.php">Inscription</a></li>
					<li><a href="questions.php"> Questions </a></li>
                    <li><a href="../RequeteSQLPHP/questionsAdmin.php">Questions admin</a></li>
					<li><a href="AllResult.php">Résultats</a></li>
				</ul>
			</nav>
			<h1>Questions ADMIN</h1> <br>

            <?php
			// question 1
			// pas utilisé, remplacé par <label> -> echo "<b> 1. Afficher le nombre total de type de stand </b> <br>"
			//1) En utilisant une requête particulière
			//$question1 = "SELECT COUNT(*) FROM TypeStand;";
			//$sth = $db->query($question1);
			//$result = $sth->fetchColumn();
			//$nombre = $result;
			//echo $nombre.'<br>';
			?>

			<form id="question1" method="POST" action="resultat.php">
				<label>  <b> 1. Afficher le nombre total de type de stand. </b>  <br> </label>
				<input type="hidden" name="question" value="question1">
                <input name="valider" type="submit" value="Afficher le résultat">
            </form>

			<?php
			// question 2
			// pas utilisé, remplacé par <label> -> echo "<b> 2. Afficher le types de stands pour lequel le montant de la location est supérieur a 1500€  </b> <br>"
			//$question2 = "SELECT TypeStand.descTypeStand
			//FROM TypeStand, Stand, Louer
			//WHERE TypeStand.codeTypeStand = Stand.codeTypeStand
			//AND Stand.codeTypeStand = Louer.codeTypeStand
			//AND Louer.montant > 1500
			//GROUP BY TypeStand.descTypeStand;";
			//$sth = $db->query($question2);
			//$result2 = $sth->fetchAll();	
			//foreach ($result2 as $row) {
			//	echo $row['descTypeStand'] . ' ';
			//}
			//echo '<br>';
			?>

			<form id="question2" method="POST" action="resultat.php">
				<label> <b> 2. Afficher le types de stands pour lequel le montant de la location est supérieur à :  </b> <br> </label>
				<input name="montant" id="montant" type="text" required="required" value="Supérieur à combien ?" style="background-color: yellow;">
				<input type="hidden" name="question" value="question2">
                <input name="valider" type="submit" value="Afficher le résultat">
            </form>

			<form id="question2.1" method="POST" action="resultat.php">
				<label> <b> 2.1 Afficher le types de stands pour lequel le montant de la location est supérieur ou égal à :  </b> <br> </label>
				<input name="montant2_1" id="montant2_1" type="text" required="required" value="Supérieur ou égal à combien ?" style="background-color: yellow;>
				<input type="hidden" name="question" value="question2.1">
                <input name="valider" type="submit" value="Afficher le résultat">
            </form>

			<form id="question2.2" method="POST" action="resultat.php">
				<label> <b> 2.2 Afficher le types de stands pour lequel le montant de la location est égal à :  </b> <br> </label>
				<input name="montant2_2" id="montant2_2" type="text" required="required" value="Egal à combien ?" style="background-color: yellow;>
				<input type="hidden" name="question" value="question2.2">
                <input name="valider" type="submit" value="Afficher le résultat">
            </form>

			<form id="question2.3" method="POST" action="resultat.php">
				<label> <b> 2.3 Afficher le types de stands pour lequel le montant de la location est inférieur à :  </b> <br> </label>
				<input name="montant2_3" id="montant2_3" type="text" required="required" value="Inférieur à combien ?" style="background-color: yellow;>
				<input type="hidden" name="question" value="question2.3">
                <input name="valider" type="submit" value="Afficher le résultat">
            </form>

			<form id="question2.4" method="POST" action="resultat.php">
				<label> <b> 2.4 Afficher le types de stands pour lequel le montant de la location est inférieur ou égal à :  </b> <br> </label>
				<input name="montant2_4" id="montant2_4" type="text" required="required" value="Inférieur ou égal à combien ?" style="background-color: yellow;>
				<input type="hidden" name="question" value="question2.4">
                <input name="valider" type="submit" value="Afficher le résultat">
            </form>

			<?php
			// question 3
			// pas utilisé, remplacé par <label> -> echo " <b> 3. Afficher le montant total de toutes les locations de stands </b>";
			//$question3 = "SELECT SUM(montant) AS MontantTotal
			//FROM Louer;";
			//$sth = $db->query($question3);
			//$result3 = $sth->fetch();	

			//$result3Final = $result3['MontantTotal'];
			//echo '<br>' . $result3Final;
			?>

			<form id="question3" method="POST" action="resultat.php">
				<label> <b> 3. Afficher le montant total de toutes les locations de stands. </b> <br> </label>
				<input type="hidden" name="question" value="question3">
                <input name="valider" type="submit" value="Afficher le résultat">
            </form>

			<?php
			// question 4
			// pas utilisé remplacé par <label> -> echo "<br> <b> 4. Afficher le nombre de total de stands pour chaque allée </b>";
			//$question4 = "SELECT numAlleeStand, COUNT(*) AS NombreStands
			//FROM Stand
			//GROUP BY numAlleeStand;";
			//$sth = $db->query($question4);
			//$result4 = $sth->fetchAll();	
			//echo '<br>';
			//foreach ($result4 as $row) {
			//	echo 'Allee : ' . $row['numAlleeStand'] . ' - Nombre de Stands : ' . $row['NombreStands'] . '<br>';
			//}
			?>

			<form id="question4" method="POST" action="resultat.php">
				<label> <b> 4. Afficher le nombre total de stands pour chaque allée. </b> <br> </label>
				<input type="hidden" name="question" value="question4">
				<input id="question4" name="valider" type="submit" value="Afficher le résultat">
			</form>
		
			<?php
				//question 5
				// pas utilisé, remplacé par <label> -> echo " <b> 5. Afficher les exposants ayant loué un stand de type A </b> <br>";
				//$question5 = "SELECT DISTINCT Exposant.*
				//FROM Exposant, Stand, TypeStand, Louer
				//WHERE Exposant.numExposant = Stand.numExposant
				//AND Stand.codeTypeStand = TypeStand.codeTypeStand
				//AND Exposant.codeTypeExposant = Louer.codeTypeExposant
				//AND Stand.codeTypeStand = Louer.codeTypeStand
				//AND TypeStand.descTypeStand IN ('A');";
				//$sth = $db->query($question5);
				//$result5 = $sth->fetchAll();	

				//foreach ($result5 as $row) {
				//	echo  'Nom : ' . $row['nomExposant'] . ' ' ;
				//}
				?>

			<form id="question5" method="POST" action="resultat.php">
				<label> <b> 5. Afficher les exposants ayant loué un stand de type A. </b> <br> </label>
				<input type="hidden" name="question" value="question5">
                <input name="valider" type="submit" value="Afficher le résultat">
            </form>

			<form id="question6" method="POST" action="resultat.php">
				<label><b>6. Afficher les descriptions des types d'exposants.</b><br></label>
				<input type="hidden" name="question" value="question6">
				<input name="valider" type="submit" value="Afficher le résultat">
			</form>

			<form  id="question7" method="POST" action="resultat.php">
				<label><b>7. Afficher les noms des exposants et leur ville.</b><br></label>
				<input type="hidden" name="question" value="question7">
				<input name="valider" type="submit" value="Afficher le résultat">
			</form>

			<form id="question8" method="POST" action="resultat.php">
				<label><b>8. Afficher tous les champs de la table Stand.</b><br></label>
				<input type="hidden" name="question" value="question8">
				<input name="valider" type="submit" value="Afficher le résultat">
			</form>

			<form id="question9" method="POST" action="resultat.php">
				<label><b>9. Afficher les descriptions des types de stands en renommant la colonne "descTypeStand" en "Description".</b><br></label>
				<input type="hidden" name="question" value="question9">
				<input name="valider" type="submit" value="Afficher le résultat">
			</form>

			<form id="question10" method="POST" action="resultat.php">
				<label><b>10. Afficher les différents types d'exposants.</b><br></label>
				<input type="hidden" name="question" value="question10">
				<input name="valider" type="submit" value="Afficher le résultat">
			</form>

			<form id="question11" method="POST" action="resultat.php">
				<label><b>11. Afficher les différents types de stands.</b><br></label>
				<input type="hidden" name="question" value="question11">
				<input name="valider" type="submit" value="Afficher le résultat">
			</form>

			<form id="question12" method="POST" action="resultat.php">
				<label><b>12. Afficher le nom de l'exposant, le prix de la location du stand (montant de la location), et le type de stand.</b></br></label>
				<input type="hidden" name="question" value="question12">
				<input name="valider" type="submit" value="Afficher le résultat">
			</form>

			<form id="question13" method="POST" action="resultat.php">
				<label><b>13. Compléter la requête précédente pour afficher en plus une remise de 5% applicable sur le montant de la location et le montant de la TVA (taux 20%).<b><br></label>
				<input type="hidden" name="question" value="question13">
				<input name="valider" type="submit" value="Afficher le résultat">
			</form>

			<form id="question14" method="POST" action="resultat.php">
				<label><b>14.Afficher les stands par type croissant et prix décroissant <b><br></label>
				<input type="hidden" name="question" value="question14">
				<input name="valider" type="submit" value="Afficher le résultat">
			</form>

			<form id="question15" method="POST" action="resultat.php">
				<label><b>15. Afficher les stands de moins d’1000 €.<b><br></label>
				<input type="hidden" name="question" value="question15">
				<input name="valider" type="submit" value="Afficher le résultat">
			</form>

			<form id="question16" method="POST" action="resultat.php">
				<label><b>16. Afficher les exposants habitant à Ville2.<b><br></label>
				<input type="hidden" name="question" value="question16">
				<input name="valider" type="submit" value="Afficher le résultat">
			</form>

			<form id="question17" method="POST" action="resultat.php">
				<label><b>17. Afficher les exposants qui n'habitent pas dans la Ville1.<b><br></label>
				<input type="hidden" name="question" value="question17">
				<input name="valider" type="submit" value="Afficher le résultat">
			</form>

			<form id="question18" method="POST" action="resultat.php">
				<label><b>18. Afficher les exposants qui n'ont pas renseigné leurs adresse.<b><br></label>
				<input type="hidden" name="question" value="question18">
				<input name="valider" type="submit" value="Afficher le résultat">
			</form>

			<form id="question19" method="POST" action="resultat.php">
				<label><b>19. Afficher les exposants habitant dans la Ville1 ou la Ville3.<b><br></label>
				<input type="hidden" name="question" value="question19">
				<input name="valider" type="submit" value="Afficher le résultat">
			</form>

			<form id="question20" method="POST" action="resultat.php">
				<label><b>20. Afficher les stands dont le numéro d'allée (numAlleeStand) est 3.<b><br></label>
				<input type="hidden" name="question" value="question20">
				<input name="valider" type="submit" value="Afficher le résultat">
			</form>

			<form id="question21" method="POST" action="resultat.php">
				<label> <b> 21. Afficher les types de stands pour lesquels les montants de la location sont entre 
				<input name="montant21" id="montant21" type="text" required="required" value="" style="background-color: yellow;" > et 
				<input name="montant212" id="montant212" type="text" required="required" value="" style="background-color: yellow;" >. </b> <br> </label>
				<input type="hidden" name="question" value="question21">
                <input name="valider" type="submit" value="Afficher le résultat">
            </form>

			<form id="question22" method="POST" action="resultat.php">
				<label><b>22. Afficher le prix moyen des stands.<b><br></label>
				<input type="hidden" name="question" value="question22">
				<input name="valider" type="submit" value="Afficher le résultat">
			</form>

			<form id="question23" method="POST" action="resultat.php">
				<label><b>23. Afficher le prix maximum des stands.<b><br></label>
				<input type="hidden" name="question" value="question23">
				<input name="valider" type="submit" value="Afficher le résultat">
			</form>
			
			<form id="question24" method="POST" action="resultat.php">
				<label><b>24. Afficher le prix minimum des stands.<b><br></label>
				<input type="hidden" name="question" value="question24">
				<input name="valider" type="submit" value="Afficher le résultat"><br><br>
			</form>

			<form id="question25" method="POST" action="resultat.php">
				<label><b> 25. Ajouter un nouveau exposant</b><br></label>
				<label for="nom">Nom de l'exposant :</label>
				<input type="text" id="nom" name="nom" required="required" style="background-color: yellow;"> <br>
				
				<label for="adresse">Adresse :</label>
				<input type="text" id="adresse" name="adresse" required="required"="required" style="background-color: yellow;"><br>
				
				<label for="code_postal">Code postal :</label>
				<input type="text" id="code_postal" name="code_postal" required="required"="required" style="background-color: yellow;"><br>
				
				<label for="ville">Ville :</label>
				<input type="text" id="ville" name="ville" required="required" style="background-color: yellow;"><br>
				
				<label for="codeTypeExposant">Type d'exposant :</label>
				<select id="codeTypeExposant" name="codeTypeExposant" required="required">
					<option value="1">Type 1</option>
					<option value="2">Type 2</option>
					<option value="3">Type 3</option>
				</select><br>
				
				<input type="hidden" name="question" value="question25">
				<input name="valider" type="submit" value="Ajouter l'exposant"><br><br>
			</form>

			<form id="question26" method="POST" action="resultat.php">
				<label><b>26. Modifier un exposant :</b></label><br>
				<label for="numExposant">Numéro de l'exposant :</label>
				<input type="text" required="required" id="numExposant" name="numExposant" style="background-color: yellow;"><br>

				<label for="nouveauNomExposant">Nouveau nom :</label>
				<input type="text" required="required" id="nouveauNomExposant" name="nouveauNomExposant" style="background-color: yellow;"><br>

				<label for="nouvelleAdrExposant">Nouvelle adresse :</label>
				<input type="text" required="required" id="nouvelleAdrExposant" name="nouvelleAdrExposant" style="background-color: yellow;"><br>

				<label for="nouveauCpExposant">Nouveau code postal :</label>
				<input type="text" required="required" id="nouveauCpExposant" name="nouveauCpExposant" style="background-color: yellow;"><br>

				<label for="nouvelleVilleExposant">Nouvelle ville :</label>
				<input type="text" required="required" id="nouvelleVilleExposant" name="nouvelleVilleExposant" style="background-color: yellow;"><br>

				<label for="nouveauCodeTypeExposant">Nouveau code type exposant :</label>
				<input type="text" required="required" id="nouveauCodeTypeExposant" name="nouveauCodeTypeExposant" style="background-color: yellow;"><br>

				<input type="hidden" required="required" name="question" value="question26">
				<input name="valider" type="submit" value="Modifier l'exposant"><br><br>
			</form>

			<form id="question27" method="POST" action="resultat.php">
				<label><b>27. Supprimer un exposant</b><br></label>
				<label>Numéro de l'exposant à supprimer :</label>
				<input type="text" required="required" name="numExposant"	style="background-color: yellow;">
				<input type="hidden" name="question" value="question27"><br>
				<input name="valider" type="submit" value="Supprimer l'exposant"><br><br>
			</form>
				
			<form id="question28" method="POST" action="resultat.php">
				<label><b>28. Nombre de stands dans l'allée 3.</b><br></label>
				<input type="hidden" name="question" value="question28">
				<input name="valider" type="submit" value="Afficher le résultat">
			</form>

			<form id="question29" method="POST" action="resultat.php">
				<label> <b> 29. Sélectionner tous les stands dont le numéro d'allée n'est pas égal à 15. </b> <br> </label>
				<input type="hidden" name="question" value="question29">
                <input name="valider" type="submit" value="Afficher le résultat">
            </form>
				
			<form id="question30" method="POST" action="resultat.php">
				<label><b>30. Afficher les détails des stands avec le nom de l'exposant associé.</b><br></label>
				<input type="hidden" name="question" value="question30">
				<input name="valider" type="submit" value="Afficher le résultat">
			</form>
			
			<form id="question31" method="POST" action="resultat.php">
    <label><b>31. Afficher toutes les informations selon le nom de l'exposant :</b><br></label>
    <label>Mot-clé : </label>
    <input type="text" name="keyword" required style="background-color: yellow;"><br>
    <input type="hidden" name="question" value="question31">
    <input type="submit" name="valider" value="Rechercher">
</form>



			
			<footer>
				<p> Fin de la page </p>
			</footer>
			</nav>
		</section>
	</body>
</html>