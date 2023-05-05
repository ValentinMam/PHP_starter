<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page web</title>
    </head>
    <body>
        <!-- ceci est un commentaire -->
        <h1>Ma page web</h1>
        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>
        <?php
        echo "J'habite en France."; // Cette ligne indique où j'habite 

        // La ligne suivante indique mon âge
        echo "J'ai 27 ans.";
        ?>
<p>consultez les infos en cliquant <a href="info.php">ici </a></p>


    </body>
</html>
