<?php

include_once "structure.inc.php";

pageHeader();
pageContent();
pageFooter();

function pageContent()
{ ?>
    <h1 style="text-align:center"> Hello World !</h1>

    <div class="ui divided list" style="margin-left: 5em">
        <div class="item">
            <i class="map marker icon"></i>
            <div class="content">
                <a class="header">Projet X</a>
                <div class="description">Grosse darass, venez nombreux.</div>
            </div>
        </div>
        <div class="item">
            <i class="map marker icon"></i>
            <div class="content">
                <a class="header">Soirée Chill</a>
                <div class="description">Tous à poil sur Norvan, 3 bouteilles par personne minimum requises.</div>
            </div>
        </div>
        <div class="item">
            <i class="map marker icon"></i>
            <div class="content">
                <a class="header">Petite sortie au Black</a>
                <div class="description">Une soirée au Black oklm.</div>
            </div>
        </div>
        <div class="item">
            <i class="map marker icon"></i>
            <div class="content">
                <a class="header">Soirée junkie</a>
                <div class="description">Oui.</div>
            </div>
        </div>
    </div>
<?php } ?>