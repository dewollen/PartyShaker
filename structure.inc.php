<?php
function enTete($titre = "Party Shaker") { ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <!-- Sinon Philippe va gazer -->
        <meta charset="utf-8">

        <!-- Un petit titre des familles -->
        <title><?php echo $titre; ?></title>

        <!-- Du style ! -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css"
              type="text/css">
        <link rel="stylesheet" href="style.css" type="text/css">

        <!-- C'est plus joli ainsi -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="myscripts.js"></script>

    </head>
    <body>
<?php
}

function pied() { ?>
    </body>
    </html>
<?php
} ?>
