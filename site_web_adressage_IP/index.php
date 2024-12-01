<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPv4</title>
</head>
<body>
    <h2>IPv4 </h2>
    <form method="post">
        <label for="adresse_ip"><b>Adresse IP:</b></label>
        <input type="text" name="adresse_ip" id="adresse_ip" required><br><br>
        <label for="masque_sous_reseau"><b>Masque sous réseaux:</b></label>
        <input type="text" name="masque_sous_reseau" id="masque_sous_reseau" required><br><br>
        <button type="submit" name="submit">Calculer</button><br><br>
    </form>

    <?php
    function decompositionIPv4 ($adresse_ip, $masque_sous_reseau) {
        // Valider l'adresse IP : si l'adresse ip (variabe $adresse_ip) n'est pas au format adresse IP ainsi que en IPV4 :
        // echo (ecrit) "Adresse IP invalide".
        if (!filter_var($adresse_ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
            echo "Adresse IP invalide";
            return;
        }

        // Valider le masque de sous-réseau : ^ = début de la chaine,  "\/?" = "/" est optionnel
        // "\d{1,2} = la quantité de chiffre doit etre sois 1 ou 2 (0 min ou 32 max). $ = fin de la chaine.
        // Si ça ne correspond pas à cela : echo (ecrit) "Masque de sous-réseau invalide"
        if (!preg_match('/^(\/?\d{1,2})$/', $masque_sous_reseau)) {
            echo "Masque de sous-réseau invalide";
            return;
        }

        // Convertir les adresses IP en forme longue : prend adresse ip & masque sous reseau string et le transforme en nombre entier.
        $adresse_ip_longue = ip2long($adresse_ip);
        $masque_sous_reseau_long = ip2long("255.255.255.255") << (32 - intval($masque_sous_reseau));

        // Calculer l'adresse réseau : ET logique entre l'adresse IP et le masque sous réseau.
        $reseau_ip = $adresse_ip_longue & $masque_sous_reseau_long;

        // Calculer la première adresse utilisable : On ajoute + 1 à l'adresse réseau.
        $premiere_adresse = ($adresse_ip_longue & $masque_sous_reseau_long) + 1;

        // Calculer la dernière adresse utilisable : on enlève - 1 à l'adresse réseau. "~" inverse tout les bits du masque sous réseau.
        $derniere_adresse = ($reseau_ip | (~$masque_sous_reseau_long)) - 1;

        // Calculer l'adresse de diffusion : OU logique bit à bit (compare chaque bit des deux et retourne 1 si l'un ou l'autre bit est 1,
        // si les deux bits sont 0, le résultat est 0. "~" inverse tout les bits du masque sous réseau.
        $adresse_diffusion = $reseau_ip | (~$masque_sous_reseau_long); 

        // Calculer le nombre de sous-réseaux : 2^32-masque sous réseau.
        $nombre_sous_reseaux = pow(2, (32 - intval($masque_sous_reseau)));

        // Calculer le nombre d'hôtes par sous-réseau 2^32-masque sous réseau - 2.
        $nombre_hotes_par_sous_reseau = pow(2, (32 - intval($masque_sous_reseau))) - 2;

        // Sortie
        $reseau_ip_court = long2ip($reseau_ip);
        $premiere_adresse_court = long2ip($premiere_adresse);
        $derniere_adresse_court = long2ip($derniere_adresse);
        $adresse_diffusion_court = long2ip($adresse_diffusion);
        echo "<b>Adresse de sous-réseau :</b> " . $reseau_ip_court . "<br><br>";
        echo "<b>Première adresse : </b>" . $premiere_adresse_court . "<br>";
        echo "<b>Dernière adresse : </b>" . $derniere_adresse_court . "<br><br>";
        echo "<b>Adresse de diffusion </b> : " . $adresse_diffusion_court . "<br><br>";
        echo "<b>Nombre de sous-réseaux : </b> " . $nombre_sous_reseaux . "<br>";
        echo "<b>Nombre d'hôtes par sous-réseau : </b> " . $nombre_hotes_par_sous_reseau . "<br>";
    }

    // Vérifier si le formulaire est soumis
    if(isset($_POST['submit'])){
        // Récupérer les valeurs du formulaire
        $adresse_ip = $_POST['adresse_ip'];
        $masque_sous_reseau = $_POST['masque_sous_reseau'];
        echo "<b>Adresse IP</b> : " . $adresse_ip . "<br>"; 
        echo "<b>Masque sous réseaux</b> : " . $masque_sous_reseau;

        // Appeler la fonction et afficher les résultats
        echo "<h3>Résultat :</h3>";
        decompositionIPv4($adresse_ip, $masque_sous_reseau);
    }
?>

</body>
</html>
