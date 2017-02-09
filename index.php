<?php

include_once "structure.inc.php";

pageHeader();
pageContent();
pageFooter();

function pageContent()
{ ?>
    <div class="ui container main">

        <h1 style="text-align:center">C'est la fête par ici ! <i class="icon lightning"></i></h1>

        <table class="ui single line table">
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

            for ($i = 0; $i < 3; $i++)
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
        <td title="<?php echo $description ?>"><?php echo $description ?></td>
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