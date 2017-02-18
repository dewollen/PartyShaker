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


        <!-- Champ de mines pour tester des trucs -->

        <h4 class="ui horizontal divider header">
            <i class="bomb icon"></i>
            Zone de test
        </h4>

        <!-- ça se change en jQuery tout ça-->
        <button class="ui toggle button">
            Non
        </button>

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
            <div class="ui blue icon button"><i class="thumbs up icon"></i></div>
            <div class="ui icon button"><i class="thumbs down icon"></i></div>
        </td>
    </tr>

    <?php
}

?>