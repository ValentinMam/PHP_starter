<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css">
    <title>PHP_Starter</title>
</head>

<body>
    <!-- ceci est un commentaire -->
    <h1>PHP STARTER</h1>
    <h2>Introduction</h2>
    <p>Aujourd'hui nous sommes le
        <?php echo date('d/m/Y h:i:s'); ?>.</p>

    <br>
    <?php
        echo "Vous voici sur PHP Starter.";
        ?>
    <br>
    <?php
     
        echo "N'hésitez pas à consulter le code de cette page (ctrl+u)."; 
     ?>

    <h2>Accédez à des informations </h2>
    <p>consultez les infos en cliquant <a href="info.php">ici </a></p>
    <p>utiliser la documentation de <a href="https://www.php.net/manual/fr/ ">PHP</a></p>

    <section>
        <h2>Les variables</h2>

        <!-- Une variable, c'est une petite information stockée en mémoire temporairement. -->
        <!-- Elle a toujours un nom et une valeur -->
        <!-- camelCase = isAuthor -->
        <!-- On peut modifier la valeur d'une variable à tout moment -->

        <h3>Les chaînes de caractères (string) </h3>
        <!-- Texte -->

        <?php
$fullname = "Valentin Mam";
$email = 'valentin@exemple.com';
echo "Bonjour $fullname et bienvenue sur le site ! , votre mail est  $email";  

?>
        <br>
        <h3>Les nombres entiers (int) </h3>
        <!-- nombres du type 1, 2, 3, 4, -1, -2, -3… -->


        <!-- resultat 1 -->
        <?php
$number = 2 + 4; // $number prend la valeur 6
$number = 5 - 1; // $number prend la valeur 4
$number = 3 * 5; // $number prend la valeur 15
$number = 10 / 2; // $number prend la valeur 5
$number = 3 * 5 + 1; // $number prend la valeur 16
$number = (1 + 2) * 2; // $number prend la valeur 6
echo $number;
?>


        <br>
        <!-- resultat 2 -->
        <?php
$number = 10;
$result = ($number + 5) * $number; // $result prend la valeur 150
echo $result;
?>

        <br>
        <!-- resultat 3 -->
        <?php
$number = 10 % 5; // $number prend la valeur 0 car la division tombe juste
$number = 10 % 3; // $number prend la valeur 1 car il reste 1
echo $number;
?>


        <br>
        <h3>Les nombres décimaux (float ) </h3>
        <!-- nombres à virgule -->


        <?php
$price = 57.3;
echo $price;
?>
        <br>

        <h3>Les booléens (bool ) </h3>
        <!-- vrai soit faux -->
        <?php
$isAuthor = true;
$isAdministrator = false;
echo $isAuthor;
echo $isAdministrator;
?>
        <br>

        <h3>Rien (NULL)</h3>
        <!-- l'absence de type -->

        <?php
$noValue = NULL;
echo $noValue;
?>

    </section>



    <section>
        <h2>Les conditions</h2>


        <h3>If else</h3>


        <h4>Condition simples</h4>
        <!-- résultat 1 -->
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
        <!-- résultat 2 -->
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
        <!-- résultat 3 -->
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


        <h4>Conditions multiples</h4>

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
    </section>


    <section>
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
        <h3>Affichage des recettes</h3>
        <a href="recettes.php">
            voir le fichier recettes.php</a>
    </section>

    <section>
        <h2>Les tableaux</h2>



        <h3>Les tableaux numérotés</h3>

        <!-- clé (n°) / valeur -->
        <!-- commence TOUJOURS par 0 -->

        <h4>Constuire</h4>

        <?php

$recipes = ['Cassoulet', 'Couscous', 'Escalope Milanaise', 'Salade César',];

// La fonction array permet aussi de créer un array
$recipes = array('Cassoulet', 'Couscous', 'Escalope Milanaise');
?>


        <!-- case par case -->
        <?php
$recipes[0] = 'Cassoulet';
$recipes[1] = 'Couscous';
$recipes[2] = 'Escalope Milanaise';
?>

        <!-- ou automatique -->
        <?php
$recipes[] = 'Cassoulet'; // Créera $recipes[0]
$recipes[] = 'Couscous'; // Créera $recipes[1]
$recipes[] = 'Escalope Milanaise'; // Créera $recipes[2]
?>

        <h4>Afficher</h4>
        <?php
echo "$recipes[1] ou $recipes[0]"; // Cela affichera : Couscous ou cassoulet
?>


        <h3>Les tableaux associatifs</h3>

        <!-- plusieurs clés / valeurs : plusieurs propriétés -->
        <h4>Constuire</h4>

        <?php
// Une bien meilleure façon de stocker une recette !
$recipe = [
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
    'author' => 'john.doe@exemple.com',
    'enabled' => true,
];

?>

        <!-- case par case  -->
        <?php
$recipe['title'] = 'Cassoulet';
$recipe['recipe'] = 'Etape 1 : des flageolets, Etape 2 : ...';
$recipe['author'] = 'john.doe@exemple.com';
$recipe['enable'] = true;
?>


        <h4>Afficher</h4>
        <?php
echo "$recipe[title] par $recipe[author]";
?>
        <br>
        <?php
echo $recipe['title'];
?>



        <h3>Parcourir un tableau</h3>

        <h4>Boucle for</h4>
        <?php

/**
 * Déclaration du tableau des recettes
 * Chaque élément du tableau est un tableau numéroté (une recette)
 */
$recipes = [
    ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
    ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
];

for ($lines = 0; $lines <= 1; $lines++) {
    echo $recipes[$lines][0];
}
?>



        <h4>Boucle foreach</h4>

        <?php

// Déclaration du tableau des recettes
$recipes = [
    ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
    ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
];

foreach ($recipes as $recipe) {
    echo $recipe[0]; // Affichera Cassoulet, puis Couscous
}
?>
        <br>
        <!-- avec les tableaux associatifs également -->
        <?php
$recipe = [
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
    'author' => 'mickael.andrieu@exemple.com',
    'enabled' => true,
];

foreach ($recipe as $value) {
    echo $value;
}

/**
 * AFFICHE
 * CassouletEtape 1 : des flageolets, Etape 2 : ...mickael.andrieu@exemple.com1
 */
?>
        <br>
        <!-- tableau de tableaux -->
        <?php

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => '',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade Romaine',
        'recipe' => '',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => false,
    ],
];

foreach($recipes as $recipe) {
    echo $recipe['title'] . ' contribué(e) par : ' . $recipe['author'] . PHP_EOL; 
}
?>

        <!-- avec la boucle foreach -->
        <?php
$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

foreach($recipe as $property => $propertyValue)
{
    echo '[' . $property . '] vaut ' . $propertyValue . PHP_EOL;
}
?>
        <h4>Afficher avec print r</h4>

        <!-- echo spécialisé pour les tableaux -->

        <?php

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'Step 1 : blabla, Step 2 : ...',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,  //true = 1
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false, //false = 0
    ],
];

echo '<pre>';
print_r($recipes);
echo '</pre>';
?>
        <h3>Rechercher dans un tableau</h3>

        <!-- vérifier si une clé existe dans le tableau -->
        <h4>array_key_exists</h4>

        <!-- Retourne true si la clé existe, false si non -->

        <?php
$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

if (array_key_exists('title', $recipe))
{
    echo 'La clé "title" se trouve dans la recette !';
}

if (array_key_exists('author', $recipe))
{
    echo 'La clé "auteur" se trouve dans la recette !';
}

if (array_key_exists('commentaires', $recipe))
{
    echo 'La clé "commentaires" se trouve dans la recette !';
}
?>

        <!-- On ne trouvera que « title », et pas « commentaires » car pas dans le tableau -->


        <!-- vérifier si une valeur existe dans le tableau -->
        <h4>in_array</h4>
        <?php
$users = [
    'Mathieu Nebra',
    'Mickaël Andrieu',
    'Laurène Castor',
];

if (in_array('Mathieu Nebra', $users))
{
    echo 'Mathieu fait bien partie des utilisateurs enregistrés !';
}

if (in_array('Arlette Chabot', $users))
{
    echo 'Arlette fait bien partie des utilisateurs enregistrés !';
}
?>
        <!-- On ne trouvera que "Mathieu", et pas "Arlette" car pas dans le tableau -->

        <!-- récupérer la clé d'une valeur dans le tableau -->

        <h4>array_search</h4>

        <!-- Retourne la clé (n°) si la valeur existe, false si non -->
        <?php
$users = [
    'Mathieu Nebra',
    'Mickaël Andrieu',
    'Laurène Castor',
];

$positionMathieu = array_search('Mathieu Nebra', $users);
echo '"Mathieu" se trouve en position ' . $positionMathieu . PHP_EOL;

$positionLaurène = array_search('Laurène Castor', $users);
echo '"Laurène" se trouve en position ' . $positionLaurène . PHP_EOL;
?>

        <h3>Affichage des recettes v2</h3>
        <a href="recettes.php">
            voir le fichier recettes.php</a>
    </section>
    <section>


        <h2>Les fonctions</h2>
        <!-- série d'instructions qui effectue des actions  -->
        <!-- permet de réutiliser du code -->

        <h3>Fonctions php</h3>
        <a href="https://www.php.net/manual/fr/funcref.php">fonctions php par catégories </a>

        <br>
        <?php    
// Génère : You should eat pizza, beer, and ice cream every day
$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");

$newphrase = str_replace($healthy, $yummy, $phrase);
echo $newphrase;
?>
        <h3>Manipuler du texte</h3>

        <h4>strlen</h4>
        <?php
$recipe = 'Etape 1 : des flageolets ! Etape 2 : de la saucisse toulousaine';
$length = strlen($recipe);
 
 
echo 'La phrase ci-dessous comporte ' . $length . ' caractères :' . PHP_EOL . $recipe;
?>
        <h4>str_replace</h4>
        <?php
echo str_replace('c', 'P', 'le cassoulet, c\'est très bon');
?>
        <h4>sprintf</h4>

        <?php
$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

echo sprintf(
    '%s par "%s" : %s',
    $recipe['title'],
    $recipe['author'],
    $recipe['recipe']
);
?>
        <h4>date</h4>

        <?php
// Enregistrons les informations de date dans des variables

$day = date('d');
$month = date('m');
$year = date('Y');

$hour = date('H');
$minut = date('i');

// Maintenant on peut afficher ce qu'on a recueilli
echo 'Bonjour ! Nous sommes le ' . $day . '/' . $month . '/' . $year . ' et il est ' . $hour. ' h ' . $minut;
?>
        <h3>Créer une fonction</h3>


        <!-- vérifiez la validité d'une recette  -->
        <!-- récupérez les recettes "valides" -->
        <!-- affichez le nom de l'auteur -->
        <?php

$users = [
    [
        'full_name' => 'Mickaël Andrieu',
        'email' => 'mickael.andrieu@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Mathieu Nebra',
        'email' => 'mathieu.nebra@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Laurène Castor',
        'email' => 'laurene.castor@exemple.com',
        'age' => 28,
    ],
];

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => '',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade Romaine',
        'recipe' => '',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => false,
    ],
];

function displayAuthor(string $authorEmail, array $users) : string
{
    for ($i = 0; $i < count($users); $i++) {
        $author = $users[$i];
        if ($authorEmail === $author['email']) {
            return $author['full_name'] . '(' . $author['age'] . ' ans)';
        }
    }
}

function isValidRecipe(array $recipe) : bool
{
    if (array_key_exists('is_enabled', $recipe)) {
        $isEnabled = $recipe['is_enabled'];
    } else {
        $isEnabled = false;
    }

    return $isEnabled;
}

function getRecipes(array $recipes) : array
{
    $valid_recipes = [];

    foreach($recipes as $recipe) {
        if (isValidRecipe($recipe)) {
            $valid_recipes[] = $recipe;
        }
    }

    return $valid_recipes;
}

?>

    </section>
    <section>
        <h2>Les erreurs</h2>
        <h3>Les erreurs courantes </h3>


        <!-- si vous formulez mal une instruction / mauvaise synthaxe-->
        <h4>Parse error</h4>
        <p>Parse error: syntax error in error.php on line 7</p>

        <!-- si vous utilisez une fonction non reconnue -->
        <h4>Undefined function</h4>
        <!-- la fonction n'existe pas OU se trouve dans une extension non activée  -->
        <p>Fatal Error: Call to undefined function: is_valid_recipe() in fichier.php on line 27</p>

        <!-- si vous entrez un nombre incorrect de paramètres pour une fonction -->
        <h4>Wrong parameter count</h4>
        <!-- oublie de paramètres OU trop de paramètres -->
        <p>Warning: Wrong parameter count for fonction() in fichier.php on line 112</p>

        <h3>Les erreurs plus rares</h3>
        <!-- Près de 4000 erreurs -->

        <!-- si vous écrivez du code au mauvais endroit -->
        <h4>Headers already sent by</h4>
        <!-- header() , session_start() , setcookie() AVANT balise html  -->
        <p>Cannot modify header information - headers already sent by ...</p>

        <!-- si vous avez fait une erreur d'utilisation de la librairie GD -->
        <h4>L'image contient des erreurs</h4>
        <p><a href="https://www.php.net/manual/fr/image.examples.php"> bibliothèque GD</a></p>
        <!-- si vous avez fait une boucle infinie -->
        <h4>Maximum execution time exceeded</h4>

        <!-- limite à 30 secondes maximum -->
        <p>Fatal error: Maximum execution time exceeded in fichier.php on line 57</p>
        <h3>Déboguez son premier script</h3>
        <a href="debug.php"> fichier debug.php</a>

    </section>




</body>

</html>