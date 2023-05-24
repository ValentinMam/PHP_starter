<?php

// Déclaration du tableau des recettes
$recipes = [
    ['Cassoulet','[...]','ValentinMam',true,],
    ['Couscous','[...]','ValentinMam',false,],
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Affichage des recettes</title>
</head>
<body>
    <ul>
        <?php for ($lines = 0; $lines <= 1; $lines++): ?>
            <li><?php echo $recipes[$lines][0] . ' (' . $recipes[$lines][2] . ')'; ?></li>
        <?php endfor; ?>
    </ul>
</body>
</html>