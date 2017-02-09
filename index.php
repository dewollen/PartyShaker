<?php

include_once "structure.inc.php";

pageHeader();
pageContent();
pageFooter();

function pageContent()
{ ?>
    <nav class="ui fixed inverted stackable borderless menu">
        <div class="ui container">
            <a href="index.php" class="header item">
                <img id="logo" src="logo.png">
                Party Shaker
            </a>

            <div class="right menu">

                <a class="item">Mes soirées</a>

                <div class="ui simple dropdown item">
                    Mon compte <i class="dropdown icon"></i>
                    <div class="ui inverted menu">
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

    <div class="ui container main">

        <h1 style="text-align:center"> Hello World !</h1>

        <table class="ui fixed single line celled table">
            <thead>
            <tr>
                <th>Chez…</th>
                <th>Intitulé</th>
                <th>Description</th>
                <th>Statut</th>
            </tr>
            </thead>
            <tbody>
            <?php

            for ($i = 0; $i < 4; $i++)
                addParty();

            ?>
            </tbody>
        </table>

    </div>
<?php }

function addParty($host = "Tibo", $name = "Projet X", $description = "Grosse darass, venez nombreux.", $status = "basic")
{
    ?>

    <tr>
        <td><?php echo $host ?></td>
        <td><?php echo $name ?></td>
        <td><?php echo $description ?></td>
        <td>
            <button class="ui <?php echo $status ?> button">
                <i class="icon user"></i>
                Je participe !
            </button>
        </td>
    </tr>

    <?php
}

?>