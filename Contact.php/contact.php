<?php


session_start();

$nom=utf8_decode($_POST['nom']);
$email=utf8_decode($_POST['email']);
$prenom=utf8_decode($_POST['prenom']);
$sujet=utf8_decode($_POST['sujet']);
$message=utf8_decode($_POST['message']);

$to='gitton.maxime@gmail.com';

$msg='Bonjour,'."\r\n\r\n";
$msg.='Ce mail a été envoyé depuis votre site internet par '.$prenom.' '.$nom."\r\n\r\n";
$msg.='Voici son message :'."\r\n\r\n";
$msg.='Sujet : '.$sujet."\r\n";

$msg.='********************'."\r\n";
$msg.= $message."\r\n";
$msg.='********************'."\r\n";


$headers='From: '.$nom.'<'.$email.'>'."\r\n";
$headers.='Reply-To: <'.$email.'>'."\r\n";

?>

<html lang="fr">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="style/style.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <script src="js/jquery-1.6.4.js"></script>
</head>
    
<body>
<div id="wrap">
<div class="cadre-violet">
<h2>Informations légales</h2>
<div class="espace1"></div>
<h3>1. Présentation du site.</h3>
<div class="espace2"></div>
<p>En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site <a href="http://www.alibi.fr/" title="String dans l'Array - www.alibi.fr">www.alibi.fr</a> l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi :</p>
<div class="espace2"></div>
<p><strong>Propriétaire</strong> : String dans l'Array –  – Campus de la Fonderie de l'Image<br />
<strong>Créateur</strong>  : <a href="www.string-dand-array.fr">String dans l'Array</a><br />
<strong>Responsable publication</strong> : String dans l'Array – SdA@gmail.com<br />
<strong>Webmaster</strong> : String dans l'Array – SdA@gmail.com<br />
<strong>Hébergeur</strong> : OVH – 75008 Paris<br />
<div class="espace1"></div>
<h3>2. Conditions générales d’utilisation du site et des services proposés.</h3>
<div class="espace2"></div>
<p>L’utilisation du site <a href="http://www.alibi.fr/" title="String dans l'Array - www.alibi.fr">www.alibi.fr</a> implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site <a href="http://www.alibi.fr/" title="String dans l'Array - www.alibi.fr">www.alibi.fr</a> sont donc invités à les consulter de manière régulière.</p>
<div class="espace2"></div>
<p>Ce site est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par String dans l'Array, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.</p>
<div class="espace2"></div>
<p>Le site <a href="http://www.alibi.fr/" title="String dans l'Array - www.alibi.fr">www.alibi.fr</a> est mis à jour régulièrement par String dans l'Array. De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.</p>
<div class="espace1"></div>
<h3>3. Description des services fournis.</h3>
<div class="espace1"></div>
<p>Le site <a href="http://www.alibi.fr/" title="String dans l'Array - www.alibi.fr">www.alibi.fr</a> a pour objet de fournir une information concernant l’ensemble des activités de la société.</p>
<div class="espace2"></div>
<p>String dans l'Array s’efforce de fournir sur le site <a href="http://www.alibi.fr/" title="String dans l'Array - www.alibi.fr">www.alibi.fr</a> des informations aussi précises que possible. Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>
<div class="espace2"></div>
<p>Tous les informations indiquées sur le site <a href="http://www.alibi.fr/" title="String dans l'Array - www.alibi.fr">www.alibi.fr</a> sont données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site <a href="http://www.alibi.fr/" title="String dans l'Array - www.alibi.fr">www.alibi.fr</a> ne sont pas exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p>
<div class="espace1"></div>
<h3>4. Limitations contractuelles sur les données techniques.</h3>
<div class="espace2"></div>
<p>Le site utilise la technologie JavaScript.</p>
<div class="espace2"></div>
<p>Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour</p>
<div class="espace1"></div>
<h3>5. Propriété intellectuelle et contrefaçons.</h3>
<div class="espace2"></div>
<p>String dans l'Array est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels.</p>
<div class="espace2"></div>
<p>Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de : String dans l'Array.</p>
<div class="espace2"></div>
<p>Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>
<div class="espace1"></div>
<h3>6. Limitations de responsabilité.</h3>
<div class="espace2"></div>
<p>String dans l'Array ne pourra être tenue responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site www.alibi.fr, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité.</p>
<div class="espace2"></div>
<p>String dans l'Array ne pourra également être tenue responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site <a href="http://www.alibi.fr/" title="String dans l'Array - www.alibi.fr">www.alibi.fr</a>.</p>
<div class="espace2"></div>
<p>Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs. String dans l'Array se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, String dans l'Array se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie…).</p>
<div class="espace1"></div>
<h3>7. Gestion des données personnelles.</h3>
<div class="espace2"></div>
<p>En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l'article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.</p>
<div class="espace2"></div>
<p>A l'occasion de l'utilisation du site <a href="http://www.alibi.fr/" title="String dans l'Array - www.alibi.fr">www.alibi.fr</a>, peuvent êtres recueillies : l'URL des liens par l'intermédiaire desquels l'utilisateur a accédé au site <a href="http://www.alibi.fr/" title="String dans l'Array - www.alibi.fr">www.alibi.fr</a>, le fournisseur d'accès de l'utilisateur, l'adresse de protocole Internet (IP) de l'utilisateur.</p>
<div class="espace2"></div>
<p> En tout état de cause String dans l'Array ne collecte des informations personnelles relatives à l'utilisateur que pour le besoin de certains services proposés par le site <a href="http://www.alibi.fr/" title="String dans l'Array - www.alibi.fr">www.alibi.fr</a>. L'utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu'il procède par lui-même à leur saisie. Il est alors précisé à l'utilisateur du site <a href="http://www.alibi.fr/" title="String dans l'Array - www.alibi.fr">www.alibi.fr</a> l’obligation ou non de fournir ces informations.</p>
<div class="espace2"></div>
<p>Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données personnelles le concernant, en effectuant sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.</p>
<div class="espace2"></div>
<p>Aucune information personnelle de l'utilisateur du site <a href="http://www.alibi.fr/" title="String dans l'Array - www.alibi.fr">www.alibi.fr</a> n'est publiée à l'insu de l'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l'hypothèse du rachat de String dans l'Array et de ses droits permettrait la transmission des dites informations à l'éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l'utilisateur du site <a href="http://www.alibi.fr/" title="String dans l'Array - www.alibi.fr">www.alibi.fr</a>.</p>
<div class="espace2"></div>
<p>Le site n'est pas déclaré à la CNIL car il ne recueille pas d'informations personnelles. .</p>
<div class="espace2"></div>
<p>Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>
<div class="espace1"></div>
<h3>8. Liens hypertextes et cookies.</h3>
<div class="espace2"></div>
<p>Le site <a href="http://www.alibi.fr/" title="String dans l'Array - www.alibi.fr">www.alibi.fr</a> contient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de String dans l'Array. Cependant, String dans l'Array n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.</p>
<div class="espace2"></div>
<p>La navigation sur le site <a href="http://www.alibi.fr/" title="String dans l'Array - www.alibi.fr">www.alibi.fr</a> est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures de fréquentation.</p>
<div class="espace2"></div>
<p>Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son ordinateur de la manière suivante, pour refuser l’installation des cookies :</p>
<div class="espace2"></div>
<p>Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / options internet. Cliquez sur Confidentialité et choisissez Bloquer tous les cookies. Validez sur Ok.</p>
<div class="espace2"></div>
<p>Sous Firefox : en haut de la fenêtre du navigateur, cliquez sur le bouton Firefox, puis aller dans l'onglet Options. Cliquer sur l'onglet Vie privée.
  Paramétrez les Règles de conservation sur :  utiliser les paramètres personnalisés pour l'historique. Enfin décochez-la pour  désactiver les cookies.</p>
<div class="espace2"></div>
<p>Sous Safari : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par un rouage). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section "Confidentialité", cliquez sur Paramètres de contenu. Dans la section "Cookies", vous pouvez bloquer les cookies.</p>
<div class="espace2"></div>
<p>Sous Chrome : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par trois lignes horizontales). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section "Confidentialité", cliquez sur préférences.  Dans l'onglet "Confidentialité", vous pouvez bloquer les cookies.</p>
<div class="espace1"></div>
<h3>9. Droit applicable et attribution de juridiction.</h3>
<div class="espace2"></div>
<p>Tout litige en relation avec l’utilisation du site <a href="http://www.alibi.fr/" title="String dans l'Array - www.alibi.fr">www.alibi.fr</a> est soumis au droit français. Il est fait attribution exclusive de juridiction aux tribunaux compétents de Paris.</p>
<div class="espace1"></div>
<h3>10. Les principales lois concernées.</h3>
<div class="espace2"></div>
<p>Loi n° 78-17 du 6 janvier 1978, notamment modifiée par la loi n° 2004-801 du 6 août 2004 relative à l'informatique, aux fichiers et aux libertés.</p>
<div class="espace2"></div>
<p> Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique.</p>
<div class="espace1"></div>
<h3>11. Lexique.</h3>
<div class="espace2"></div>
<p>Utilisateur : Internaute se connectant, utilisant le site susnommé.</p>
<div class="espace2"></div>
<p>Informations personnelles : « les informations qui permettent, sous quelque forme que ce soit, directement ou non, l'identification des personnes physiques auxquelles elles s'appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).</p>
</div>


    
    <section class="contact">
        <title>Contact</title>
            <div id="content-contact">
                <article>
                    <div id="contact-formulaire">
                        <form action="contact.php" method="post" name="formContact" class="form">
                            <input type="text" id="nom" name="nom" placeholder="Nom" /><br/> 
                            <input type="text" id="prenom" name="prenom" placeholder="Prénom" /><br/>
                            <input type="text" placeholder="Email" id="email" name="email"><br />
                            <input type="text" id="sujet" name="sujet" placeholder="Sujet" /><br/> 
                            <textarea placeholder="Message" id="message" name="message"></textarea><br/>
                            <p>Veuillez recopier ce code :</p><br/>
                            <img src="captcha.php" style="margin-bottom: 10px;"><br/>
                            <input type="text" name="captcha" style="width:20%"/><br/>
                            <input type="submit" value="Envoyer" style="width:30%">
                        </form>
                    </div>
                </article>
            </div>
        <?php
           if($_POST['captcha']){
			   if($_POST['captcha']==$_SESSION['captcha']) echo 'Votre message à bien été envoyé.';
			   if($_POST['captcha']==$_SESSION['captcha']) mail($to, $sujet, $msg, $headers);
			   else echo 'Le captcha entré est invalide <a href="contact.php">Revenir au formulaire</a>';
		   }
			   
            
            ?>
    </section>
    
    
</div>  
</body>
</html>