<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page web</title>
    </head>
    <body>
        <!-- ceci est un commentaire -->
        <h1>Ma page web</h1>
        <h2>Introduction</h2>
        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>
        <?php
        echo "J'habite en France."; // Cette ligne indique où j'habite 
        // La ligne suivante indique mon âge
        echo "J'ai 27 ans.";
        ?>

<h2>Accédez à des informations </h2>
<p>consultez les infos en cliquant <a href="info.php">ici </a></p>


<h2>Les variables</h2>


<!-- string type -->
<?php
$fullname = "Valentin Mam";
$email = 'valentin@exemple.com';
echo 'Bonjour '  . $fullname . ' et bienvenue sur le site !'; // OK
echo 'Voici votre email :' . $email; //OK
?>

 <br>
<!-- int type  -->
<?php
$number = 2 + 4; // $number prend la valeur 6
$number = 5 - 1; // $number prend la valeur 4
$number = 3 * 5; // $number prend la valeur 15
$number = 10 / 2; // $number prend la valeur 5

// Allez on rajoute un peu de difficulté
$number = 3 * 5 + 1; // $number prend la valeur 16
$number = (1 + 2) * 2; // $number prend la valeur 6
echo $number;
?>
<br>
<?php
$number = 10;
$result = ($number + 5) * $number; // $result prend la valeur 150
echo $result;
?>

<br>
<?php
$number = 10 % 5; // $number prend la valeur 0 car la division tombe juste
$number = 10 % 3; // $number prend la valeur 1 car il reste 1
echo $number;
?>


<br>
<!-- float type -->
<?php
$price = 57.3;
echo $price;
?>
<br>
<!-- booleen type -->
<?php
$isAuthor = true;
$isAdministrator = false;
echo $isAuthor;
echo $isAdministrator;
?>
<br>
<!-- NULL type -->
<?php
$noValue = NULL;
echo $noValue;
?>


<h2>Les conditions</h2>

<h3>Condition simples</h3>
<?php
$isEnabled = true;  // $isEnabled est un booléen

// si $isEnabled est vrai, alors on affiche le message
if ($isEnabled == true) {
    echo "Vous êtes autorisé(e) à accéder au site ✅";
}
// si $isEnabled est faux, alors on affiche le message
else {
    echo "Accès refusé ❌ ";
}
?>
 <br>
<?php
$isAllowedToEnter = "Oui";

// SI on a l'autorisation d'entrer
if ($isAllowedToEnter == "Oui") {
    // instructions à exécuter quand on est autorisé à entrer
    echo "Tu peux !";
} // SINON SI on n'a pas l'autorisation d'entrer
elseif ($isAllowedToEnter == "Non") {
    // instructions à exécuter quand on n'est pas autorisé à entrer
    echo "Tu ne peux pas !";
} // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
else {
    echo "Euh, je ne comprends pas ton choix, tu peux me le rappeler s'il te plaît ?";
}
?>

<br>
<?php
$isAllowedToEnter = true;

if ($isAllowedToEnter) {
    echo "Bienvenue petit nouveau. :o)";
}
else {
    echo "T'as pas le droit d'entrer !";
}
?>

<br> 
<?php
$isAllowedToEnter = true;

// Si pas autorisé
if (! $isAllowedToEnter) {

}
?>


<h3>Conditions multiples</h3>

<?php
$isEnabled = true;
$isOwner = false;

// si l'utilisateur est autorisé ET auteur
if ($isEnabled && $isOwner) {
    echo 'Accès à la recette validé ✅';
} else {
    echo 'Accès à la recette interdit ! ❌';
}
?>

<br>
<?php
$isEnabled = true;
$isOwner = false;
$isAdmin = true;

// si l'utilisateur est autorisé ET auteur OU administrateur
if (($isEnabled && $isOwner) || $isAdmin) {
    echo 'Accès à la recette validé ✅';
} else {
    echo 'Accès à la recette interdit ! ❌';
}
?>


<h3>Conditions switch</h3>

<h4>Sans switch</h4>
<?php
$grade = 16;

if ($grade == 0) {
    echo "Tu es vraiment un gros nul !!!";
}

elseif ($grade == 5) {
    echo "Tu es très mauvais";
}

elseif ($grade == 7) {
    echo "Tu es mauvais";
}

elseif ($grade == 10) {
    echo "Tu as pile poil la moyenne, c'est un peu juste…";
}

elseif ($grade == 12) {
    echo "Tu es assez bon";
}

elseif ($grade == 16) {
    echo "Tu te débrouilles très bien !";
}

elseif ($grade == 20) {
    echo "Excellent travail, c'est parfait !";
}

else {
    echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
?>
<h4>Avec switch</h4>

<?php
$grade = 10;

// on indique sur quelle variable on travaille
switch ($grade) 
{ 
    case 0: // dans le cas où $grade vaut 0
        echo "Tu es vraiment un gros nul !!!";
    break;
    
    case 5: // dans le cas où $grade vaut 5
        echo "Tu es très mauvais";
    break;
    
    case 7: // dans le cas où $grade vaut 7
        echo "Tu es mauvais";
    break;
    
    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
    break;
    
    case 12:
        echo "Tu es assez bon";
    break;
    
    case 16:
        echo "Tu te débrouilles très bien !";
    break;
    
    case 20:
        echo "Excellent travail, c'est parfait !";
    break;
    
    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
?>
<h3>Conditions condensées</h3>
<h4>Sans structure ternaire</h4>
<?php
$userAge = 24;

if ($userAge >= 18) {
    $isAdult = true;
    echo "Vous êtes majeur";
}
else {
    $isAdult = false;
    echo "Vous êtes mineur";
}
?>


<h4>Avec structure ternaire</h4>

<?php
$userAge = 24;

$isAdult = ($userAge >= 18) ? true : false;

// Ou mieux, dans ce cas précis
$isAdult = ($userAge >= 18);
?>

<h2>Les boucles</h2>

<h3>Les tableaux</h3>

<h4>Tableau simple</h4>
<?php

$user1 = ['Valentin Mam', 'email@valentin', 'S3cr3t', 27];

// la première valeur du tableau = 0
echo $user1[0]; // "Valentin Mam"
echo $user1[1]; // "email@valentin"
echo $user1[3]; // 27
?>

<h4>Tableau de tableaux</h4>

<?php

$mickael = ['Mickaël Andrieu', 'mickael.andrieu@exemple.com', 'S3cr3t', 34];
$mathieu = ['Mathieu Nebra', 'mathieu.nebra@exemple.com', 'devine', 33];
$laurene = ['Laurène Castor', 'laurene.castor@exemple.com', 'P4ssw0rD', 28];

$users = [$mickael, $mathieu, $laurene];

echo $users[1][1]; // "mathieu.nebra@exemple.com"
echo $users[0][0]; // "Michaël Andrieu"
?>

<h3>La boucle simple : while</h3>


<?php
$lines = 1;
// tant que $lines est inférieur ou égal à 10
while ($lines <= 10) {
    echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br />';
    $lines++; // $lines = $lines + 1
}
?>
<br>
<?php
$lines = 1;

while ($lines <= 5)
{
    echo 'Ceci est la ligne n°' . $lines . '<br />';
    $lines++;
}
?>

<!--

Ceci est la ligne n°1
Ceci est la ligne n°2
...
-->
<br>
<?php

$lines = 3; // nombre d'utilisateurs dans le tableau
$counter = 0;

while ($counter < $lines) {
    echo $users[$counter][0] . ' ' . $users[$counter][1] . '<br />';
    $counter++; // Ne surtout pas oublier la condition de sortie !
}
?>

<h3>La boucle complexe : for</h3>
<?php
for ($lines = 0; $lines <= 2; $lines++)
{
    echo $users[$lines][0] . ' ' . $users[$lines][1] . '<br />';
}
?>

<br>
<a href="recettes.php">
voir le fichier recettes.php</a>

    </body>
</html>



