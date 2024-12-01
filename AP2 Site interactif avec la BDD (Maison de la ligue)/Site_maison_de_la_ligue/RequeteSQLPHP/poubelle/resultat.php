<?php
session_start();

// Incluez votre fichier de configuration
include("config.php");

// Vérifiez si la question est définie dans la requête
if (isset($_POST['question'])) {
    $question = $_POST['question'];

    // Traitez la question et renvoyez les résultats
    switch ($question) {
        case 'question1':
            $question1 = "SELECT COUNT(*) FROM TypeStand;";
            $sth = $db->query($question1);
            $result = $sth->fetchColumn();
            $nombre = $result;
            echo "Résultat de la question 1 : " . $nombre . '<br>';
            break;

        case 'question2':
            $question2 = "SELECT TypeStand.descTypeStand
                FROM TypeStand, Stand, Louer
                WHERE TypeStand.codeTypeStand = Stand.codeTypeStand
                AND Stand.codeTypeStand = Louer.codeTypeStand
                AND Louer.montant > 1500
                GROUP BY TypeStand.descTypeStand;";
            $sth = $db->query($question2);
            $result2 = $sth->fetchAll();
            echo "Résultat de la question 2 : ";
            foreach ($result2 as $row) {
                echo $row['descTypeStand'] . ' ';
            }
            echo '<br>';
            break;

        case 'question3':
            $question3 = "SELECT SUM(montant) AS MontantTotal
                FROM Louer;";
            $sth = $db->query($question3);
            $result3 = $sth->fetch();

            $result3Final = $result3['MontantTotal'];
            echo "Résultat de la question 3 : " . $result3Final . '<br>';
            break;

        case 'question4':
            $question4 = "SELECT numAlleeStand, COUNT(*) AS NombreStands
                FROM Stand
                GROUP BY numAlleeStand;";
            $sth = $db->query($question4);
            $result4 = $sth->fetchAll();
            echo "Résultat de la question 4 : ";
            foreach ($result4 as $row) {
                echo 'Allee : ' . $row['numAlleeStand'] . ' - Nombre de Stands : ' . $row['NombreStands'] . '<br>';
            }
            break;

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
            echo "Résultat de la question 5 : ";
            foreach ($result5 as $row) {
                echo 'Nom : ' . $row['nomExposant'] . ' ';
            }
            break;

        case 'question6':
            $question6 ="SELECT descTypeExposant
             FROM typeexposant; ";
            $sth = $db->query($question6);
            $result6 = $sth->fetchAll();
            echo "Résultat de la question 6 : $result6 ";
            foreach ($result6 as $result6) {
            echo $result;
            }
            break;
                
                

        // Continuez avec les autres cas pour les autres questions

        default:
            echo "Question non reconnue";
            break;
    }
} else {
    echo "Aucune question spécifiée";
}
?>
