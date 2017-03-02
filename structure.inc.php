<?php
function pageHeader($title = "Party Shaker") {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Sinon Philippe va gazer -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Where all parties start"/>
    <meta name="keywords" content="party, fun"/>
    <meta name="author" content="Di Gregorio Thomas & Emion Thibaut"/>
    <meta name="copyright" content="Copyright authors"/>

    <!-- Un petit titre des familles -->
    <title><?php echo $title; ?></title>

    <!-- Du style ! -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css"
          type="text/css">
    <link rel="stylesheet" href="animate.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">

    <!-- C'est plus joli ainsi -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.js"></script>
    <script src="myscripts.js"></script>

</head>
<body>


<!-- Barre sur le côté :) -->
<div class="ui inverted sidebar labeled left vertical menu">
    <div class="item header">
        <img class="ui mini spaced image" src="logo.png">
        Party Shaker
    </div>

    <a class="item" href="#"><i class="bar icon"></i>Créer</a>
    <a class="item" href="#"><i class="cocktail icon"></i>Rejoindre</a>
    <a class="item" href="#"><i class="expand icon"></i>Détails</a>
    <a class="item" href="#"><i class="edit icon"></i>Préférences</a>
    <a class="item" href="#"><i class="sign out icon"></i>Déconnexion</a>
</div>

<!-- Le menu du haut -->
<nav class="ui fixed inverted borderless menu">
    <div id="sidebartrigger" class="item">
        <div class="ui icon black button">
            <i class="sidebar icon"></i>
        </div>
    </div>

    <div class="ui container">
        <a href="index.php" class="header item">
            <img id="logo" src="logo.png">
            Party Shaker
        </a>

        <div class="right menu">

            <div class="item">

                <div class="medium ui buttons">
                    <div id="createParty" class="ui teal animated fade button">
                        <div class="visible content">Créer</div>
                        <div class="hidden content">
                            <i class="bar icon"></i>
                        </div>
                    </div>

                    <div id="joinParty" class="ui purple animated fade button">
                        <div class="visible content">Rejoindre</div>
                        <div class="hidden content">
                            <i class="cocktail icon"></i>
                        </div>
                    </div>
                </div>

            </div>

            <a class="item">Mes soirées</a>

            <div class="ui dropdown item">
                <div class="text">Mon compte</div>
                <i class="dropdown icon"></i>
                <div class="ui menu">
                    <div class="header">Réglages</div>
                    <a class="item" href="#">Détails</a>
                    <a class="item" href="#">Préférences</a>
                    <div class="divider"></div>
                    <a class="item" href="#">Déconnexion</a>
                </div>
            </div>

        </div>

    </div>
</nav>

<?php
}

function pageFooter() { ?>

<footer class="ui footer inverted">

    <div class="ui container">
    </div>

</footer>

</body>
</html>
<?php
} ?>
