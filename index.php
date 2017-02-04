<?php

include_once "structure.inc.php";

enTete();
contenu();
pied();

function contenu()
{ ?>
    <h1>Bonjour à tous</h1>
    <h2> Toto </h2>

    <button class="ui primary button">
        Save
    </button>
    <button class="ui button">
        Discard
    </button>
<?php } ?>