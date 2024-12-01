<?php
session_start();
include("config.php");
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<link rel="stylesheet" href = "styles/style.css"/>
		<meta charset="utf-8" />
		<title> Résultat </title>
	</head>
	<body>
		<header>
			<p> <strong> Requete SQL PHP</strong> <br> </p> 
            <p> Résultat
		</header>
		<section>
			<nav>
				<ul>
                <li><a href="../index.html">Accueil</a></li>
					<li><a href="../Authentification/login.php">Connexion</a></li>
            		<li><a href="../Authentification/register.php">Inscription</a></li>
					<li><a href="questions.php"> Questions </a></li>
                    <li><a href="../RequeteSQLPHP/questionsAdmin.php">Questions admin</a></li>
					<li><a href="AllResult.php">Résultats</a></li></li>
				</ul>
			</nav>
			<h1>Requete SQL PHP</h1> <br>

    <?php
			// Vérifiez si la question est définie dans la requête
        if (isset($_POST['question'])) {
            $question = $_POST['question'];
            

    // Traitez la question et renvoyez les résultats
    switch ($question) {
        // 1. Afficher le nombre total de type de stand.
        case 'question1':
            $question1 = "SELECT COUNT(*) FROM TypeStand;";
            $sth = $db->query($question1);
            $result = $sth->fetchColumn();
            $nombre = $result;
            echo " <b> 1. Afficher le nombre total de type de stand. </b> <br>";
            echo "Résultat de la question 1 : <br><br>" . $nombre . '<br>';
            break;

            
        // 2. Afficher le types de stands pour lequel le montant de la location est supérieur à  $montant :
        case 'question2':
            $montant = $_POST['montant'];
            $question2 = "SELECT TypeStand.descTypeStand 
                            FROM TypeStand, Stand, Louer 
                            WHERE TypeStand.codeTypeStand = Stand.codeTypeStand 
                            AND Stand.codeTypeStand = Louer.codeTypeStand 
                            AND Louer.montant > :montant 
                            GROUP BY TypeStand.descTypeStand;";
            //$sth = $db->query($question2);
            $sth = $db->prepare($question2);
            $sth->bindParam(':montant', $montant, PDO::PARAM_INT);
            $sth->execute();
            /* $result2 = $sth->fetchAll();
            echo "<b> 2. Afficher le types de stands pour lequel le montant de la location est supérieur à  $montant : </b> <br>";
            echo "Résultat de la question 2 : ";
            foreach ($result2 as $row) {
                echo $row['descTypeStand'] . ' ';
            }
            echo '<br>'; */
            // code d'en haut affiche sans les virgules.
            // code en dessous affiche avec des virgules chaque resultat (exemple : A B -> va etre A, B).
            $result2 = $sth->fetchAll(PDO::FETCH_COLUMN);
            echo "<b> 2. Afficher le types de stands pour lequel le montant de la location est supérieur à  $montant : </b> <br>";
            echo "Résultat de la question 2 : ";
            echo implode(', ', $result2);
            echo '<br>';
            break;

            // 2.1. Afficher le types de stands pour lequel le montant de la location est supérieur ou égal à  $montant2_1 :
            case 'question2.1':
                $montant_1 = $_POST['montant2_1'];
                $question2_1 = "SELECT TypeStand.descTypeStand 
                                FROM TypeStand, Stand, Louer 
                                WHERE TypeStand.codeTypeStand = Stand.codeTypeStand 
                                AND Stand.codeTypeStand = Louer.codeTypeStand 
                                AND Louer.montant >= :montant2_1 
                                GROUP BY TypeStand.descTypeStand;";
                //$sth = $db->query($question2.1);
                $sth = $db->prepare($question2_1);
                $sth->bindParam(':montant2_1', $montant2_1, PDO::PARAM_INT);
                $sth->execute();
                /* $result2 = $sth->fetchAll();
                echo "<b> 2. Afficher le types de stands pour lequel le montant de la location est supérieur à  $montant : </b> <br>";
                echo "Résultat de la question 2 : ";
                foreach ($result2 as $row) {
                    echo $row['descTypeStand'] . ' ';
                }
                echo '<br>'; */
                // code d'en haut affiche sans les virgules.
                // code en dessous affiche avec des virgules chaque resultat (exemple : A B -> va etre A, B).
                $result2_1 = $sth->fetchAll(PDO::FETCH_COLUMN);
                echo "<b> 2.1. Afficher le types de stands pour lequel le montant de la location est supérieur ou égal à  $montant2_1 : </b> <br>";
                echo "Résultat de la question 2.1 : ";
                echo implode(', ', $result2_1);
                echo '<br>';
                break;
        
                // 2.2. Afficher le types de stands pour lequel le montant de la location est égal à  $montant2_2 : 
                case 'question2.2':
                    $montant2_2 = $_POST['montant2_2'];
                    $question2_2 = "SELECT TypeStand.descTypeStand 
                                    FROM TypeStand, Stand, Louer 
                                    WHERE TypeStand.codeTypeStand = Stand.codeTypeStand 
                                    AND Stand.codeTypeStand = Louer.codeTypeStand 
                                    AND Louer.montant = :montant2_2 
                                    GROUP BY TypeStand.descTypeStand;";
                    //$sth = $db->query($question2.2);
                    $sth = $db->prepare($question2_2);
                    $sth->bindParam(':montant2_2', $montant2_2, PDO::PARAM_INT);
                    $sth->execute();
                    /* $result2 = $sth->fetchAll();
                    echo "<b> 2. Afficher le types de stands pour lequel le montant de la location est supérieur à  $montant : </b> <br>";
                    echo "Résultat de la question 2 : ";
                    foreach ($result2 as $row) {
                        echo $row['descTypeStand'] . ' ';
                    }
                    echo '<br>'; */
                    // code d'en haut affiche sans les virgules.
                    // code en dessous affiche avec des virgules chaque resultat (exemple : A B -> va etre A, B).
                    $result2_2 = $sth->fetchAll(PDO::FETCH_COLUMN);
                    echo "<b> 2.2. Afficher le types de stands pour lequel le montant de la location est égal à  $montant2_2 : </b> <br>";
                    echo "Résultat de la question 2.2 : ";
                    echo implode(', ', $result2_2);
                    echo '<br>';
                    break;

                    // 2.3. Afficher le types de stands pour lequel le montant de la location est inférieur à  $montant2_3 :
                    case 'question2.3':
                        $montant2_3 = $_POST['montant2_3'];
                        $question2_3 = "SELECT TypeStand.descTypeStand 
                                        FROM TypeStand, Stand, Louer 
                                        WHERE TypeStand.codeTypeStand = Stand.codeTypeStand 
                                        AND Stand.codeTypeStand = Louer.codeTypeStand 
                                        AND Louer.montant < :montant2_3 
                                        GROUP BY TypeStand.descTypeStand;";
                        //$sth = $db->query($question2.3);
                        $sth = $db->prepare($question2_3);
                        $sth->bindParam(':montant2_3', $montant2_3, PDO::PARAM_INT);
                        $sth->execute();
                        /* $result2 = $sth->fetchAll();
                        echo "<b> 2. Afficher le types de stands pour lequel le montant de la location est supérieur à  $montant : </b> <br>";
                        echo "Résultat de la question 2 : ";
                        foreach ($result2 as $row) {
                            echo $row['descTypeStand'] . ' ';
                        }
                        echo '<br>'; */
                        // code d'en haut affiche sans les virgules.
                        // code en dessous affiche avec des virgules chaque resultat (exemple : A B -> va etre A, B).
                        $result2_3 = $sth->fetchAll(PDO::FETCH_COLUMN);
                        echo "<b> 2.3. Afficher le types de stands pour lequel le montant de la location est inférieur à  $montant2_3 : </b> <br>";
                        echo "Résultat de la question 2.3 : ";
                        echo implode(', ', $result2_3);
                        echo '<br>';
                        break;

                        // 2.4. Afficher le types de stands pour lequel le montant de la location est inférieur ou égal à  $montant2_4 :
                        case 'question2.4':
                            $montant2_4 = $_POST['montant2_4'];
                            $question2_4 = "SELECT TypeStand.descTypeStand 
                                            FROM TypeStand, Stand, Louer 
                                            WHERE TypeStand.codeTypeStand = Stand.codeTypeStand 
                                            AND Stand.codeTypeStand = Louer.codeTypeStand 
                                            AND Louer.montant <= :montant2_4 
                                            GROUP BY TypeStand.descTypeStand;";
                            //$sth = $db->query($question2.4);
                            $sth = $db->prepare($question2_4);
                            $sth->bindParam(':montant2_4', $montant2_4, PDO::PARAM_INT);
                            $sth->execute();
                            /* $result2 = $sth->fetchAll();
                            echo "<b> 2. Afficher le types de stands pour lequel le montant de la location est supérieur à  $montant : </b> <br>";
                            echo "Résultat de la question 2 : ";
                            foreach ($result2 as $row) {
                                echo $row['descTypeStand'] . ' ';
                            }
                            echo '<br>'; */
                            // code d'en haut affiche sans les virgules.
                            // code en dessous affiche avec des virgules chaque resultat (exemple : A B -> va etre A, B).
                            $result2_4 = $sth->fetchAll(PDO::FETCH_COLUMN);
                            echo "<b> 2.4. Afficher le types de stands pour lequel le montant de la location est inférieur ou égal à  $montant2_4 : </b> <br>";
                            echo "Résultat de la question 2.4 : ";
                            echo implode(', ', $result2_4);
                            echo '<br>';
                            break;

        //  3. Afficher le montant total de toutes les locations de stands.
        case 'question3':
            $question3 = "SELECT SUM(montant) AS MontantTotal
                FROM Louer;";
            $sth = $db->query($question3);
            $result3 = $sth->fetch();

            $result3Final = $result3['MontantTotal'];
            echo "<b> 3. Afficher le montant total de toutes les locations de stands. </b> <br>";
            echo "Résultat de la question 3 :<br><br> " . $result3Final . '<br>';
            break;

        // 4. Afficher le nombre total de stands pour chaque allée.
        case 'question4':
            $question4 = "SELECT numAlleeStand, COUNT(*) AS NombreStands
                FROM Stand
                GROUP BY numAlleeStand;";
            $sth = $db->query($question4);
            $result4 = $sth->fetchAll();
            echo " <b> 4. Afficher le nombre total de stands pour chaque allée. </b> <br>";
            echo "Résultat de la question 4 : <br><br> ";
            foreach ($result4 as $row) {
                echo 'Allee : ' . $row['numAlleeStand'] . ' - Nombre de Stands : ' . $row['NombreStands'] . '<br>';
            }
            break;

        // 5. Afficher les exposants ayant loué un stand de type A.
        case 'question5':
            $question5 = "SELECT DISTINCT Exposant.*
                FROM Exposant, Stand, TypeStand, Louer
                WHERE Exposant.numExposant = Stand.numExposant
                AND Stand.codeTypeStand = TypeStand.codeTypeStand
                AND Exposant.codeTypeExposant = Louer.codeTypeExposant
                AND Stand.codeTypeStand = Louer.codeTypeStand
                AND TypeStand.descTypeStand IN ('A');";
            $sth = $db->query($question5);
            $result5 = $sth->fetchAll();
            echo " <b> 5. Afficher les exposants ayant loué un stand de type A. </b> <br>";
            echo "Résultat de la question 5 : <br><br>";
            foreach ($result5 as $row) {
                echo 'Nom : ' . $row['nomExposant'] . ' ';
            }
            break;

        // 6. Afficher les descriptions des types d'exposants.
        case 'question6':
            $question6 = "SELECT descTypeExposant 
                FROM typeexposant;";
            $sth = $db->query($question6);
            $result6 = $sth->fetchAll(PDO::FETCH_COLUMN);
            echo "<b> 6. Afficher les descriptions des types d'exposants. </b> <br>";
            echo "Résultat de la question 6 : <br><br>";
            foreach ($result6 as $result6) {
                echo $result6 . "<br>";
            }
            break;

            // 7. Afficher les noms des exposants et leur ville.
            case 'question7':
                $question7 = "SELECT nomExposant, villeExposant
                    FROM Exposant;";
                $sth = $db->query($question7);
                $result7 = $sth->fetchAll();
                echo "<b>7. Afficher les noms des exposants et leur ville.</b><br>";
                echo "Résultat de la question 7 : <br><br> ";
                foreach ($result7 as $row) {
                    echo "Nom de l'exposant : " . $row['nomExposant'] . ", Ville : " . $row['villeExposant'] . "<br>";
                }
                break;

        // 8. Afficher tous les champs de la table Stand
        case 'question8':
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
        break;

        // 9. Afficher les descriptions des types de stands en renommant la colonne 'descTypeStand' en 'Description'.
        case 'question9':
            $question9 = "SELECT descTypeStand AS Description
                FROM TypeStand;";
            $sth = $db->query($question9);
            $result9 = $sth->fetchAll();
            echo "<b>9. Afficher les descriptions des types de stands en renommant la colonne 'descTypeStand' en 'Description'.</b><br>";
            echo "Résultat de la question 9: <br><br> ";
            if (count($result9) > 0) {
                foreach ($result9 as $row) {
                    echo "Description : " . $row['Description'] . "<br>";
                }
            } else {
                echo "Aucun résultat trouvé.";
            }
            break;

        // 10. Afficher les différents types d'exposants.
        case 'question10':
            $question10 = "SELECT DISTINCT descTypeExposant
                FROM TypeExposant;";
            $sth = $db->query($question10);
            $result10 = $sth->fetchAll();
            echo "<b>10. Afficher les différents types d'exposants.</b><br>";
            echo "Résultat de la question 10: <br><br> ";
            if (count($result10) > 0) {
                foreach ($result10 as $row) {
                    echo "Type d'exposant : " . $row['descTypeExposant'] . "<br>";
                }
            } else {
                echo "Aucun résultat trouvé.";
            }
            break;

        // 11. Afficher les différents types de stands.
        case 'question11':
            $question11 = "SELECT DISTINCT descTypeStand
                FROM TypeStand;";
            $sth = $db->query($question11);
            $result11 = $sth->fetchAll();
            echo "<b>11. Afficher les différents types de stands.</b><br>";
            echo "Résultat de la question 11: <br><br> ";
            if (count($result11) > 0) {
                foreach ($result11 as $row) {
                    echo "Description type de stand : " . $row['descTypeStand'] . "<br>";
                }
            } else {
                echo "Aucun résultat trouvé.";
            }
            break;

        // 12. Afficher le nom de l'exposant, le prix de la location du stand (montant de la location), et le type de stand.
        case 'question12':
            $question12 = "SELECT DISTINCT descTypeStand
                FROM TypeStand;";
            $sth = $db->query($question12);
            $result12 = $sth->fetchAll();
            echo "<b>12. Afficher le nom de l'exposant, le prix de la location du stand (montant de la location), et le type de stand.</b></br>";
            echo "Résultat de la question 12: <br><br> ";
            if (count($result12) > 0) {
                foreach ($result12 as $row) {
                    echo "Description type de stand : " . $row['descTypeStand'] . "<br>";
                }
            } else {
                echo "Aucun résultat trouvé.";
            }
            break;

        // 13. Afficher les exposants triés par nom.
        case 'question13':
            $question13 = "SELECT nomExposant
            FROM Exposant
            ORDER BY nomExposant;
            ";
            $sth = $db->query($question13);
            $result13 = $sth->fetchAll();
            echo "<b>13. Afficher les exposants triés par nom.</b></br>";
            echo "Résultat de la question 13: <br><br> ";
            if (count($result13) > 0) {
                foreach ($result13 as $row) {
                    echo "Nom de l'exposant: " . $row['nomExposant'] . "<br>";
                }
            } else {
                echo "Aucun résultat trouvé.";
            }
            break;

        // 14. Afficher les stands par type croissant et prix décroissant
        case 'question14':
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
                    echo " Prix du stand (décroissant) " . $row['montant']. "<br>";
                    echo "<br>";
                }
            } else {
                echo "Aucun résultat trouvé.";
            }
            break;

        // 15. Afficher les stands de location de (inférieur) moins de 1000€
        case 'question15':
            $question15 = "SELECT Stand.numStand, Louer.montant
            FROM Stand
            JOIN Louer ON Stand.codeTypeStand = Louer.codeTypeStand
            WHERE Louer.montant < 1000;
            ";
            $sth = $db->query($question15);
            $result15 = $sth->fetchAll();
            echo "<b>15. Afficher les stands de location de (inférieur) moins de 1000€</b></br>";
            echo "Résultat de la question 15: <br><br> ";
            if (count($result15) > 0) {
                foreach ($result15 as $row) {
                    echo "Numéro du stand: " . $row['numStand']. "<br>";
                    echo "Prix de location du stand: " . $row['montant']. "€<br>";
                    echo "<br>";
                }
            } else {
                echo "Aucun résultat trouvé.";
            }
            break;

        // 16. Afficher les exposants habitant à Ville2
        case 'question16':
            $question16 = "SELECT *
                            FROM Exposant
                            WHERE villeExposant = 'Ville2'";
            $sth = $db->query($question16);
            $result16 = $sth->fetchAll();
            echo "<b>16. Afficher les exposants habitant à Ville2</b><br>";
            echo "Résultat de la question 16 : <br><br> ";
            if (count($result16) > 0) {
                foreach ($result16 as $row) {
                    echo "Nom de l'exposant: " . $row['nomExposant'] . "<br>";
                    // Affichez d'autres informations si nécessaire
                }
            } else {
                echo "Aucun résultat trouvé.";
            }
            break;

        // 17. Afficher les exposants n'habitant pas à Ville1
        case 'question17':
            $question17 = "SELECT *
                            FROM Exposant
                            WHERE villeExposant <> 'Ville1'";
            $sth = $db->query($question17);
            $result17 = $sth->fetchAll();
            echo "<b>17. Afficher les exposants n'habitant pas à Ville1</b><br>";
            echo "Résultat de la question 17 : <br><br> ";
            if (count($result17) > 0) {
                foreach ($result17 as $row) {
                    echo "Nom de l'exposant: " . $row['nomExposant'] . "<br>";
                    // Affichez d'autres informations si nécessaire
                }
            } else {
                echo "Aucun résultat trouvé.";
            }
            break;

        // 18. Afficher les exposants qui n'ont pas renseigné leur adresse
        case 'question18':
            $question18 = "SELECT *
                            FROM Exposant
                            WHERE AdrExposant IS NULL OR AdrExposant = ''";
            $sth = $db->query($question18);
            $result18 = $sth->fetchAll();
            echo "<b>18. Afficher les exposants qui n'ont pas renseigné leur adresse</b><br>";
            echo "Résultat de la question 18 : <br><br> ";
            if (count($result18) > 0) {
                foreach ($result18 as $row) {
                    echo "Nom de l'exposant: " . $row['nomExposant'] . "<br>";
                    // Affichez d'autres informations si nécessaire
                }
            } else {
                echo "Aucun résultat trouvé.";
            }
            break;

        // 19. Afficher les exposants habitant dans la Ville1 ou la Ville3
        case 'question19':
            $question19 = "SELECT *
                            FROM Exposant
                            WHERE villeExposant = 'Ville1' OR villeExposant = 'Ville3'";
            $sth = $db->query($question19);
            $result19 = $sth->fetchAll();
            echo "<b>19. Afficher les exposants habitant dans la Ville1 ou la Ville3</b><br>";
            echo "Résultat de la question 19 : <br><br> ";
            if (count($result19) > 0) {
                foreach ($result19 as $row) {
                    echo "Nom de l'exposant: " . $row['nomExposant'] . "<br>";
                    // Affichez d'autres informations si nécessaire
                }
            } else {
                echo "Aucun résultat trouvé.";
            }
            break;

        // 20. Afficher les stands dont le numéro d'allée est 3
        case 'question20':
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
                    echo "Num exposant : " . $row['numExposant'] . "<br>";
                    echo "<br>";

                    // Affichez d'autres informations si nécessaire
                }
            } else {
                echo "Aucun résultat trouvé.";
            }
            break;

            // 21. Afficher le types de stands pour lequel le montant de la location est entre $montant21 et $montant212 :
            case 'question21':
                $montant21 = $_POST['montant21'];
                $montant212 = $_POST['montant212'];
                $question21 = "SELECT TypeStand.descTypeStand 
                               FROM TypeStand, Stand, Louer 
                               WHERE TypeStand.codeTypeStand = Stand.codeTypeStand 
                               AND Stand.codeTypeStand = Louer.codeTypeStand 
                               AND Louer.montant BETWEEN :montant21 AND :montant212 
                               GROUP BY TypeStand.descTypeStand;";
                //$sth = $db->query($question2);
                $sth = $db->prepare($question21);
                $sth->bindParam(':montant21', $montant21, PDO::PARAM_INT);
                $sth->bindParam(':montant212', $montant212, PDO::PARAM_INT);
                $sth->execute();
            
                $result21 = $sth->fetchAll(PDO::FETCH_COLUMN);
                echo "<b> 21. Afficher le types de stands pour lequel le montant de la location est entre $montant21 et $montant212 : </b> <br>";
                echo "Résultat de la question 21 : ";
                echo implode(', ', $result21);
                echo '<br>';
                break;
            
            // 22. Afficher le prix moyen des stands.
            case 'question22':
                $question22 = "SELECT AVG(montant) AS montant_moyen FROM Louer;";
                $sth = $db->prepare($question22);
                $sth->execute();
                $result = $sth->fetch(PDO::FETCH_ASSOC);
                if ($result) {
                    $montant_moyen = $result['montant_moyen'];
                    echo "<b>22. Afficher le prix moyen des stands.</b><br>";
                    echo "Résultat de la question 22 : <br>";
                    echo "Le prix moyen des stands est de : $montant_moyen<br>";
                } else {
                    echo "Aucun prix moyen trouvé.";
                }
                break;

                // 23. Afficher le prix maximum des stands.
                case 'question23':
                    $question23 = "SELECT MAX(montant) AS montant_max FROM Louer;";
                    $sth = $db->prepare($question24);
                    $sth->execute();
                    $result = $sth->fetch(PDO::FETCH_ASSOC);
                    if ($result) {
                        $montant_max = $result['montant_max'];
                        echo "<b>23. Afficher le prix maximum des stands.</b><br>";
                        echo "Résultat de la question 23 : <br>";
                        echo "Le prix maximum des stands est de : $montant_max<br>";
                    } else {
                        echo "Aucun prix maximum trouvé.";
                    }
                    break;

                // 24. Afficher le prix minimum des stands.
                case 'question24':
                    $question24 = "SELECT MIN(montant) AS montant_min FROM Louer;";
                    $sth = $db->prepare($question24);
                    $sth->execute();
                    $result = $sth->fetch(PDO::FETCH_ASSOC);
                    if ($result) {
                        $montant_min = $result['montant_min'];
                        echo "<b>24. Afficher le prix minimum des stands.</b><br>";
                        echo "Résultat de la question 24 : <br>";
                        echo "Le prix minimum des stands est de : $montant_min<br>";
                    } else {
                        echo "Aucun prix minimum trouvé.";
                    }
                    break;
                    
                    // 25. Ajouter un nouveux exposant
                    case 'question25':
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['question'] === 'question25') {
                        // Récupérer les données du formulaire
                        $nom = $_POST["nom"];
                        $adresse = $_POST["adresse"];
                        $code_postal = $_POST["code_postal"];
                        $ville = $_POST["ville"];
                        $codeTypeExposant = $_POST["codeTypeExposant"];
                    
                        // Requête SQL pour insérer un nouvel exposant
                        $sql = "INSERT INTO Exposant (nomExposant, adrExposant, cpExposant, villeExposant, codeTypeExposant) VALUES (:nom, :adresse, :code_postal, :ville, :codeTypeExposant);";
                    
                        // Préparer la requête
                        $stmt = $db->prepare($sql);
                    
                        // Liaison des paramètres
                        $stmt->bindParam(':nom', $nom);
                        $stmt->bindParam(':adresse', $adresse);
                        $stmt->bindParam(':code_postal', $code_postal);
                        $stmt->bindParam(':ville', $ville);
                        $stmt->bindParam(':codeTypeExposant', $codeTypeExposant);
                    
                        // Exécution de la requête
                        if ($stmt->execute()) {
                            echo "Nouvel exposant ajouté avec succès.";
                        } else {
                            echo "Une erreur s'est produite lors de l'ajout de l'exposant.";
                        }
                    } else {
                        echo "Une erreur s'est produite.";
                    }

                    // 26. Mettre à jour un / des attribut(s) d'un exposant.
                    case 'question26':
                        // Vérifiez si les données ont été soumises via POST
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Récupérez les valeurs soumises par le formulaire
                        $numExposant = $_POST['numExposant'];
                        $nouveauNomExposant = $_POST['nouveauNomExposant'];
                        $nouvelleAdrExposant = $_POST['nouvelleAdrExposant'];
                        $nouveauCpExposant = $_POST['nouveauCpExposant'];
                        $nouvelleVilleExposant = $_POST['nouvelleVilleExposant'];
                        $nouveauCodeTypeExposant = $_POST['nouveauCodeTypeExposant'];

                        // Préparez la requête SQL d'UPDATE
                        $sql = "UPDATE Exposant 
                                SET nomExposant = :nouveauNomExposant, 
                                    adrExposant = :nouvelleAdrExposant, 
                                    cpExposant = :nouveauCpExposant, 
                                    villeExposant = :nouvelleVilleExposant, 
                                    codeTypeExposant = :nouveauCodeTypeExposant 
                                WHERE numExposant = :numExposant;";

                        // Préparez et exécutez la requête SQL avec PDO
                        $stmt = $db->prepare($sql);
                        $stmt->bindParam(':nouveauNomExposant', $nouveauNomExposant, PDO::PARAM_STR);
                        $stmt->bindParam(':nouvelleAdrExposant', $nouvelleAdrExposant, PDO::PARAM_STR);
                        $stmt->bindParam(':nouveauCpExposant', $nouveauCpExposant, PDO::PARAM_INT);
                        $stmt->bindParam(':nouvelleVilleExposant', $nouvelleVilleExposant, PDO::PARAM_STR);
                        $stmt->bindParam(':nouveauCodeTypeExposant', $nouveauCodeTypeExposant, PDO::PARAM_INT);
                        $stmt->bindParam(':numExposant', $numExposant, PDO::PARAM_INT);

                        // Exécutez la requête
                        $stmt->execute();

                        // Vérifiez si la mise à jour a réussi
                        if ($stmt->rowCount() > 0) {
                            echo "Mise à jour réussie.";
                        } else {
                            echo "Aucune mise à jour effectuée.";
                        }
                    }

                    // 27. Supprimer un exposant
                    case 'question27':
                        if (isset($_POST['numExposant'])) {
                            $numExposant = $_POST['numExposant'];

                            $question27 = "DELETE FROM Exposant WHERE numExposant = :numExposant;";

                            $sth = $db->prepare($question27);
                            $sth->bindParam(':numExposant', $numExposant, PDO::PARAM_INT);
                            $sth->execute();

                            echo "<b>Résultat de la question 27 :</b><br>";
                            echo "27. Supprimer un exposant";
                            echo "L'exposant avec le numéro $numExposant a été supprimé avec succès.";
                        } else {
                            echo "Le numéro de l'exposant à supprimer n'est pas défini.";
                        }
                        break;
                        
                    // 28. Nombre de stands dans l'allée 3
                    case 'question28':
                        $sql = "SELECT numAlleeStand, COUNT(*) AS 'Nombre de stands'
                                FROM Stand
                                GROUP BY numAlleeStand
                                HAVING numAlleeStand = 3";

                        // Préparer la requête
                        $stmt = $db->prepare($sql);
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

                        // 29. Sélectionner tous les stands dont le numéro d'allée n'est pas égal à 15
                        case 'question29':
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
                                echo "</ul>";
                            } else {
                                echo "Aucun stand trouvé dont le numéro d'allée n'est pas égal à 15.";
                            }
                            break;

                            // 25_user. Sélectionner tous les stands dont le numéro d'allée n'est pas égal à 15
                            case 'question25_user':
                                // Requête SQL pour sélectionner les stands dont le numéro d'allée n'est pas égal à 15
                                $question25_user = "SELECT *
                                               FROM Stand
                                               WHERE numAlleeStand NOT IN (15);";
                                // Exécute la requête
                                $sth = $db->query($question25_user);
                                // Récupère les résultats sous forme de tableau associatif
                                $results = $sth->fetchAll(PDO::FETCH_ASSOC);
                                // Affiche les résultats
                                echo "<b>Résultat de la question 25_user :</b><br>";
                                echo "29. Sélectionner tous les stands dont le numéro d'allée n'est pas égal à 15<br>";
                                if (count($results) > 0) {
                                    echo "<ul>";
                                    foreach ($results as $row) {
                                        echo "<li>Numéro du stand : " . $row['numStand'] . ", Numéro de l'allée : " . $row['numAlleeStand'] . "</li>";
                                    }
                                    echo "</ul>";
                                } else {
                                    echo "Aucun stand trouvé dont le numéro d'allée n'est pas égal à 15.";
                                }
                                break;
                                
                                // 30. Afficher les informations des exposants ayant loué des stands
                                case 'question30':
                                    // Requête SQL pour sélectionner les informations des exposants ayant loué des stands avec les informations spécifiées
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
                                    break;

                                    // 26_user. Afficher les informations des exposants ayant loué des stands
                                    case 'question26_user':
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
                                                echo "<li>Numéro du stand : " . $row['numStand'] . ", Numéro de l'allée : " . $row['numAlleeStand'] . ", Place de l'allée : " . $row['placeAlleeStand'] . ", Nom de l'exposant : " . $row['nomExposant'] . "</li>";
                                            }
                                            echo "</ul>";
                                        } else {
                                            echo "Aucun résultat trouvé.";
                                        }
                                        break;

                                        // 31. Afficher toutes les informations selon le nom de l'exposant 
                                        case 'question31':
                                            if (isset($_POST['keyword'])) {
                                                $keyword = $_POST['keyword'];
                                                
                                                // Requête SQL avec LIKE
                                                $query = "SELECT * FROM Exposant WHERE nomExposant LIKE :keyword";
                                                
                                                // Prépare la requête
                                                $sth = $db->prepare($query);
                                                
                                                // Ajoute le caractère % pour rechercher les correspondances partielles
                                                $keyword = '%' . $keyword . '%';
                                                
                                                // Lie la valeur du paramètre et exécute la requête
                                                $sth->bindParam(':keyword', $keyword, PDO::PARAM_STR);
                                                $sth->execute();
                                                
                                                // Récupère les résultats
                                                $results = $sth->fetchAll(PDO::FETCH_ASSOC);
                                                
                                                // Affiche les résultats
                                                echo "<b>Résultats de la recherche :</b><br>"
                                                ;
                                                echo "31. Afficher toutes les informations selon le nom de l'exposant :";
                                                if (count($results) > 0) {
                                                    foreach ($results as $row) {
                                                        // Afficher les colonnes de chaque ligne
                                                        echo "Nom de l'exposant: " . $row['nomExposant'] . ", Adresse: " . $row['adrExposant'] . "<br>";
                                                    }
                                                } else {
                                                    echo "Aucun résultat trouvé.";
                                                }
                                            } else {
                                                echo "Veuillez saisir un mot-clé.";
                                            }
                                            break;
                                        
                                        
                        
                

                     


        default:
            echo "Question non reconnue";
            break; 
        }
    } else {
        echo "Aucune question spécifiée";
    }
    ?>

			<footer>
				<p> Fin de la page </p>
			</footer>
			</nav>
		</section>
	</body>
</html>