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
			<p>Requête SQL PHP</p>
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
			<h1>Tous les résultats</h1> <br>
            
            <?php

            // 1. Afficher le nombre total de type de stand.
            $question1 = "SELECT COUNT(*) FROM TypeStand;";
            $sth = $db->query($question1);
            $result = $sth->fetchColumn();
            $nombre = $result;
            echo " <b> 1. Afficher le nombre total de type de stand. </b> <br>";
            echo "Résultat de la question 1 : " . $nombre . '<br><br>';

            // 3. Afficher le montant total de toutes les locations de stands.
            $question3 = "SELECT SUM(montant) AS MontantTotal
                        FROM Louer;";
            $sth = $db->query($question3);
            $result3 = $sth->fetch();

            $result3Final = $result3['MontantTotal'];
            echo "<b> 3. Afficher le montant total de toutes les locations de stands. </b> <br>";
            echo "Résultat de la question 3 : " . $result3Final . '<br><br>';

            // 4. Afficher le nombre total de stands pour chaque allée.
            $question4 = "SELECT numAlleeStand, COUNT(*) AS NombreStands
                        FROM Stand
                        GROUP BY numAlleeStand;";
            $sth = $db->query($question4);
            $result4 = $sth->fetchAll();
            echo " <b> 4. Afficher le nombre total de stands pour chaque allée. </b> <br>";
            echo "Résultat de la question 4 : ";
            foreach ($result4 as $row) {
                echo 'Allee : ' . $row['numAlleeStand'] . ' - Nombre de Stands : ' . $row['NombreStands'] . '<br><br>';
            }

            // 5. Afficher les exposants ayant loué un stand de type A.
            $question5 = "SELECT DISTINCT Exposant.*
                        FROM Exposant, Stand, TypeStand, Louer
                        WHERE Exposant.numExposant = Stand.numExposant
                        AND Stand.codeTypeStand = TypeStand.codeTypeStand
                        AND Exposant.codeTypeExposant = Louer.codeTypeExposant
                        AND Stand.codeTypeStand = Louer.codeTypeStand
                        AND TypeStand.descTypeStand IN ('A');";
            $sth = $db->query($question5);
            $result5 = $sth->fetchAll();
            echo " <b> 5. Afficher les exposants ayant loué un stand de type A. </b><br>";
            echo "Résultat de la question 5 : ";
            foreach ($result5 as $row) {
                echo 'Nom : ' . $row['nomExposant'] . ' ' . '<br><br>';
            }

            // 6. Afficher les descriptions des types d'exposants.
            $question6 = "SELECT descTypeExposant 
                        FROM typeexposant";
            $sth = $db->query($question6);
            $result6 = $sth->fetchAll(PDO::FETCH_COLUMN);
            echo "<b> 6. Afficher les descriptions des types d'exposants. </b> <br>";
            echo "Résultat de la question 6 : <br>";
            foreach ($result6 as $result6) {
                echo $result6 . "<br><br>";
            }

            // 7. Afficher les noms des exposants et leur ville.
            $question7 = "SELECT nomExposant, villeExposant
                        FROM Exposant;";
            $sth = $db->query($question7);
            $result7 = $sth->fetchAll();
            echo "<b>7. Afficher les noms des exposants et leur ville.</b><br>";
            echo "Résultat de la question 7 : <br> ";
            foreach ($result7 as $row) {
                echo "Nom de l'exposant : " . $row['nomExposant'] . ", Ville : " . $row['villeExposant'] . "<br><br>";
            }

            // 8. Afficher tous les champs de la table Stand
            $question8 = "SELECT *
            FROM Stand;";
            $sth = $db->query($question8);
            $result8 = $sth->fetchAll();
            echo "<b>8. Afficher tous les champs de la table Stand</b><br>";
            echo "Résultat de la question 8 : <br><br> ";
            if (count($result8) > 0) {
                foreach ($result8 as $row) {
                    echo "Numéro du stand : " . $row['numStand'] . "<br>";
                    echo "Numéro de l'allée : " . $row['numAlleeStand'] . "<br>";
                    echo "Place de l'allée du stand : " . $row['placeAlleeStand'] . "<br>";
                    echo "Code du type de stand : " . $row['codeTypeStand'] . "<br>";
                    echo "Numéro de l'exposant : " . $row['numExposant'] . "<br><br>";
                }
            } else {
                echo "Aucun résultat trouvé.";
            }

            // 9. Afficher les descriptions des types de stands en renommant la colonne 'descTypeStand' en 'Description'.
            $question9 = "SELECT descTypeStand AS Description
                        FROM TypeStand;";
            $sth = $db->query($question9);
            $result9 = $sth->fetchAll();
            echo "<b>9. Afficher les descriptions des types de stands en renommant la colonne 'descTypeStand' en 'Description'.</b><br>";
            echo "Résultat de la question 9: <br> ";
            if (count($result9) > 0) {
                foreach ($result9 as $row) {
                    echo "Description : " . $row['Description'] . "<br><br>";
                }
            } else {
                echo "Aucun résultat trouvé.";
            }

            // 10. Afficher les différents types d'exposants.
            $question10 = "SELECT DISTINCT descTypeExposant
                        FROM TypeExposant;";
            $sth = $db->query($question10);
            $result10 = $sth->fetchAll();
            echo "<b>10. Afficher les différents types d'exposants.</b><br>";
            echo "Résultat de la question 10: <br> ";
            if (count($result10) > 0) {
            foreach ($result10 as $row) {
                echo "Type d'exposant : " . $row['descTypeExposant'] . "<br><br>";
            }
            } else {
            echo "Aucun résultat trouvé.";
            }

            // 11. Afficher les différents types de stands.
            $question11 = "SELECT DISTINCT descTypeStand
                        FROM TypeStand;";
            $sth = $db->query($question11);
            $result11 = $sth->fetchAll();
            echo "<b>11. Afficher les différents types de stands.</b><br>";
            echo "Résultat de la question 11: <br> ";
            if (count($result11) > 0) {
                foreach ($result11 as $row) {
                    echo "Description type de stand : " . $row['descTypeStand'] . "<br><br>";
                }
            } else {
                echo "Aucun résultat trouvé.";
            }

            // 12. Afficher le nom de l'exposant, le prix de la location du stand (montant de la location), et le type de stand.
            $question12 = "SELECT DISTINCT descTypeStand
                        FROM TypeStand;";
            $sth = $db->query($question12);
            $result12 = $sth->fetchAll();
            echo "<b>12. Afficher le nom de l'exposant, le prix de la location du stand (montant de la location), et le type de stand.</b></br>";
            echo "Résultat de la question 12: <br> ";
            if (count($result12) > 0) {
                foreach ($result12 as $row) {
                    echo "Description type de stand : " . $row['descTypeStand'] . "<br><br>";
                }
            } else {
                echo "Aucun résultat trouvé.";
            }

            // 13.Afficher les exposants triés par nom.
            $question13 = "SELECT nomExposant
                            FROM Exposant
                            ORDER BY nomExposant;
            ";
            $sth = $db->query($question13);
            $result13 = $sth->fetchAll();
            echo "<b>13.Afficher les exposants triés par nom.</b></br>";
            echo "Résultat de la question 13: <br><br> ";
            if (count($result13) > 0) {
                foreach ($result13 as $row) {
                    echo "Nom de l'exposant: " . $row['nomExposant'] . "<br><br>";
                }
            } else {
                echo "Aucun résultat trouvé.";
            }
    
            // 14. Afficher les stands par type croissant et prix décroissant 
            $question14 = "SELECT Stand.numStand, TypeStand.descTypeStand, Louer.montant
                            FROM Stand, TypeStand, Louer
                            WHERE Stand.codeTypeStand = TypeStand.codeTypeStand
                            AND Stand.codeTypeStand = Louer.codeTypeStand
                            ORDER BY TypeStand.descTypeStand ASC, Louer.montant DESC;";
            $sth = $db->query($question14);
            $result14 = $sth->fetchAll();
            echo "<b>14. Afficher les stands par type croissant et prix décroissant </b></br>";
            echo "Résultat de la question 14: <br><br> ";
            if (count($result14) > 0) {
                foreach ($result14 as $row) {
                    echo "Numéro du stand (croissant) " . $row['numStand']. "<br>";
                    echo " Prix du stand (décroissant) " . $row['montant']. "<br><br>";
                    // echo "<br>";
                }
            } else {
                echo "Aucun résultat trouvé.";
            }
             
    
            // 15. Afficher les stands de location de moins de 1000€
            $question15 = "SELECT Stand.numStand, Louer.montant
            FROM Stand
            NATURAL JOIN Louer
            WHERE Louer.montant < 1000";
            $sth = $db->query($question15);
            $result15 = $sth->fetchAll();
            echo "<b>15. Afficher les stands de location de moins de 1000€</b></br>";
            echo "Résultat de la question 15: <br><br> ";
            if (count($result15) > 0) {
                foreach ($result15 as $row) {
                    echo "Numéro du stand: " . $row['numStand']. "<br>";
                    echo "Prix de location du stand: " . $row['montant']. "€<br><br>";
                    //echo "<br>";
                }
            } else {
                echo "Aucun résultat trouvé.";
            }
    
            // 16. Afficher les exposants habitant à Ville2
            $question16 = "SELECT *
                            FROM Exposant
                            WHERE villeExposant = 'Ville2'";
            $sth = $db->query($question16);
            $result16 = $sth->fetchAll();
            echo "<b>16. Afficher les exposants habitant à Ville2</b><br>";
            echo "Résultat de la question 16 : <br><br> ";
            if (count($result16) > 0) {
                foreach ($result16 as $row) {
                    echo "Nom de l'exposant: " . $row['nomExposant'] . "<br><br>";
                    // Affichez d'autres informations si nécessaire
                }
            } else {
                echo "Aucun résultat trouvé.";
            }
    
            // 17. Afficher les exposants n'habitant pas à Ville1
            $question17 = "SELECT *
                            FROM Exposant
                            WHERE villeExposant <> 'Ville1'";
            $sth = $db->query($question17);
            $result17 = $sth->fetchAll();
            echo "<b>17. Afficher les exposants n'habitant pas à Ville1</b><br>";
            echo "Résultat de la question 17 : <br><br> ";
            if (count($result17) > 0) {
                foreach ($result17 as $row) {
                    echo "Nom de l'exposant: " . $row['nomExposant'] . "<br><br>";
                    // Affichez d'autres informations si nécessaire
                }
            } else {
                echo "Aucun résultat trouvé.";
            }
    
            // 18. Afficher les exposants qui n'ont pas renseigné leur adresse
            $question18 = "SELECT *
                            FROM Exposant
                            WHERE AdrExposant IS NULL OR AdrExposant = ''";
            $sth = $db->query($question18);
            $result18 = $sth->fetchAll();
            echo "<b>18. Afficher les exposants qui n'ont pas renseigné leur adresse</b><br>";
            echo "Résultat de la question 18 : <br><br> ";
            if (count($result18) > 0) {
                foreach ($result18 as $row) {
                    echo "Nom de l'exposant: " . $row['nomExposant'] . "<br><br>";
                    // Affichez d'autres informations si nécessaire
                }
            } else {
                echo "Aucun résultat trouvé.";
            }
    
            // 19. Afficher les exposants habitant dans la Ville1 ou la Ville3
            $question19 = "SELECT *
                            FROM Exposant
                            WHERE villeExposant = 'Ville1' OR villeExposant = 'Ville3'";
            $sth = $db->query($question19);
            $result19 = $sth->fetchAll();
            echo "<b>19. Afficher les exposants habitant dans la Ville1 ou la Ville3</b><br>";
            echo "Résultat de la question 19 : <br><br> ";
            if (count($result19) > 0) {
                foreach ($result19 as $row) {
                    echo "Nom de l'exposant: " . $row['nomExposant'] . "<br><br>";
                    // Affichez d'autres informations si nécessaire
                }
            } else {
                echo "Aucun résultat trouvé.";
            }
    
            // 20. Afficher les stands dont le numéro d'allée est 3
            $question20 = "SELECT *
                            FROM Stand
                            WHERE numAlleeStand IN (3)";
            $sth = $db->query($question20);
            $result20 = $sth->fetchAll();
            echo "<b>20. Afficher les stands dont le numéro d'allée est 3</b><br>";
            echo "Résultat de la question 20 : <br><br> ";
            if (count($result20) > 0) {
                foreach ($result20 as $row) {
                    echo "Numéro du stand: " . $row['numStand'] . "<br>";
                    echo "Numéro allée du stand: " . $row['numAlleeStand'] . "<br>";
                    echo "Place allée stand : " . $row['placeAlleeStand'] . "<br>";
                    echo "Code type stand : " . $row['codeTypeStand'] . "<br>";
                    echo "Num exposant : " . $row['numExposant'] . "<br><br>";
                    //echo "<br>";

                    // Affichez d'autres informations si nécessaire
                }
            } else {
                echo "Aucun résultat trouvé.";
            }   

            // 22. Afficher le prix moyen des stands.
            $question22 = "SELECT AVG(montant) AS montant_moyen FROM Louer;";
            $sth = $db->prepare($question22);
            $sth->execute();
            $result = $sth->fetch(PDO::FETCH_ASSOC);
            if ($result) {
                $montant_moyen = $result['montant_moyen'];
                echo "<b>22. Afficher le prix moyen des stands.</b><br>";
                echo "Résultat de la question 22 : <br>";
                echo "Le prix moyen des stands est de : $montant_moyen<br><br>";
            } else {
                echo "Aucun prix moyen trouvé.";
            }

            // 23. Afficher le prix maximum des stands.
            $question23 = "SELECT MAX(montant) AS montant_max FROM Louer;";
            $sth = $db->prepare($question23);
            $sth->execute();
            $result = $sth->fetch(PDO::FETCH_ASSOC);
            if ($result) {
                $montant_max = $result['montant_max'];
                echo "<b>23. Afficher le prix maximum des stands.</b><br>";
                echo "Résultat de la question 23 : <br>";
                echo "Le prix maximum des stands est de : $montant_max<br><br>";
            } else {
                echo "Aucun prix maximum trouvé.";
            }

                // 24. Afficher le prix minimum des stands.
                $question24 = "SELECT MIN(montant) AS montant_min FROM Louer;";
                $sth = $db->prepare($question24);
                $sth->execute();
                $result = $sth->fetch(PDO::FETCH_ASSOC);
                if ($result) {
                    $montant_min = $result['montant_min'];
                    echo "<b>24. Afficher le prix minimum des stands.</b><br>";
                    echo "Résultat de la question 24 : <br>";
                    echo "Le prix minimum des stands est de : $montant_min<br><br>";
                } else {
                    echo "Aucun prix minimum trouvé.";
                }

                
                   // 25_user. Sélectionner tous les stands dont le numéro d'allée n'est pas égal à 15
                    $question25_user = "SELECT *
                                   FROM Stand
                                   WHERE numAlleeStand NOT IN (15);";
                    // Exécute la requête
                    $sth = $db->query($question25_user);
                    // Récupère les résultats sous forme de tableau associatif
                    $results = $sth->fetchAll(PDO::FETCH_ASSOC);
                    // Affiche les résultats
                    echo "<b>Résultat de la question 25_user :</b><br>";
                    echo "25_user. Sélectionner tous les stands dont le numéro d'allée n'est pas égal à 15<br>";
                    if (count($results) > 0) {
                        echo "<ul>";
                        foreach ($results as $row) {
                            echo "<li>Numéro du stand : " . $row['numStand'] . ", Numéro de l'allée : " . $row['numAlleeStand'] . "</li> <br>";
                        }
                        echo "</ul>";
                    } else {
                        echo "Aucun stand trouvé dont le numéro d'allée n'est pas égal à 15.";
                    }
                    

                        // 26_user. Afficher les informations des exposants ayant loué des stands
                        // Requête SQL pour sélectionner les informations des exposants ayant loué des stands avec les informations spécifiées
                        $question26_user = "SELECT Stand.numStand, Stand.numAlleeStand, Stand.placeAlleeStand, Exposant.nomExposant
                                       FROM Stand
                                       INNER JOIN Exposant ON Stand.numExposant = Exposant.numExposant;";
                        
                        // Exécute la requête
                        $sth = $db->query($question26_user);
                        
                        // Récupère les résultats sous forme de tableau associatif
                        $results = $sth->fetchAll(PDO::FETCH_ASSOC);
                        
                        // Affiche les résultats
                        echo "<b>Résultat de la question 26_user :</b><br>";
                        echo "26_user. Afficher les informations des exposants ayant loué des stands<br>";
                        if (count($results) > 0) {
                            echo "<ul>";
                            foreach ($results as $row) {
                                echo "<li>Numéro du stand : " . $row['numStand'] . ", Numéro de l'allée : " . $row['numAlleeStand'] . ", Place de l'allée : " . $row['placeAlleeStand'] . ", Nom de l'exposant : " . $row['nomExposant'] . "</li> ";
                            }
                            echo "</ul><br><br>";
                        } else {
                            echo "Aucun résultat trouvé.";
                        }

                        $question28 = "SELECT numAlleeStand, COUNT(*) AS 'Nombre de stands'
                                FROM Stand
                                GROUP BY numAlleeStand
                                HAVING numAlleeStand = 3";

                        // Préparer la requête
                        $stmt = $db->prepare($question28);
                        // Exécuter la requête
                        $stmt->execute();
                        // Récupérer les résultats
                        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        // Afficher les résultats
                        echo "<b>28. Nombre de stands dans l'allée 3 :</b><br>";
                        if (count($results) > 0) {
                            foreach ($results as $row) {
                                echo "Numéro d'allée : " . $row['numAlleeStand'] . ", Nombre de stands : " . $row['Nombre de stands'] . "<br>";
                            }
                        } else {
                            echo "Aucun résultat trouvé.";
                        }

                       
                            // Requête SQL pour sélectionner les stands dont le numéro d'allée n'est pas égal à 15
                            $question29 = "SELECT *
                                           FROM Stand
                                           WHERE numAlleeStand NOT IN (15);";
                            // Exécute la requête
                            $sth = $db->query($question29);
                            // Récupère les résultats sous forme de tableau associatif
                            $results = $sth->fetchAll(PDO::FETCH_ASSOC);
                            // Affiche les résultats
                            echo "<b>Résultat de la question 29 :</b><br>";
                            echo "29. Sélectionner tous les stands dont le numéro d'allée n'est pas égal à 15<br>";
                            if (count($results) > 0) {
                                echo "<ul>";
                                foreach ($results as $row) {
                                    echo "<li>Numéro du stand : " . $row['numStand'] . ", Numéro de l'allée : " . $row['numAlleeStand'] . "</li>";
                                }
                                echo "</ul><br>";
                            } else {
                                echo "Aucun stand trouvé dont le numéro d'allée n'est pas égal à 15.";
                            }

                            $question30 = "SELECT Stand.numStand, Stand.numAlleeStand, Stand.placeAlleeStand, Exposant.nomExposant
                                                   FROM Stand
                                                   INNER JOIN Exposant ON Stand.numExposant = Exposant.numExposant;";
                                    
                                    // Exécute la requête
                                    $sth = $db->query($question30);
                                    
                                    // Récupère les résultats sous forme de tableau associatif
                                    $results = $sth->fetchAll(PDO::FETCH_ASSOC);
                                    
                                    // Affiche les résultats
                                    echo "<b>Résultat de la question 30 :</b><br>";
                                    echo "30. Afficher les informations des exposants ayant loué des stands<br>";
                                    if (count($results) > 0) {
                                        echo "<ul>";
                                        foreach ($results as $row) {
                                            echo "<li>Numéro du stand : " . $row['numStand'] . ", Numéro de l'allée : " . $row['numAlleeStand'] . ", Place de l'allée : " . $row['placeAlleeStand'] . ", Nom de l'exposant : " . $row['nomExposant'] . "</li>";
                                        }
                                        echo "</ul>";
                                    } else {
                                        echo "Aucun résultat trouvé.";
                                    }
                                    
                         
                    
            ?>

			<footer>
				<p> Fin de la page </p>
			</footer>
			</nav>
		</section>
	</body>
</html>


