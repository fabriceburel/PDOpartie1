<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice PDO 1-5</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link rel="stylesheet" href="../style.css">
    </head>    
<?php
    include '../header.php';
    $customer = $colyseumDataBase->query('SELECT `lastName`, `firstName` FROM `clients` WHERE `lastName` LIKE "M%" ORDER BY lastName ASC');
    ?>
    <h1>Listes des clients Dont le nom commence par la lettre M rangée par ordre croissant</h1>
    <div class="row">
        <table class="col offset-l3 l5 striped">
            <thead>
                <tr>
                    <th>
                        Nom
                    </th>
                    <th>
                        Prénom
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($dataClients = $customer->fetch())
                {
                    ?>
                    <tr>
                        <td><?php echo $dataClients['lastName']; ?></td>
                        <td><?php echo $dataClients['firstName']; ?></td>
                    </tr>
                    <?php
                }
                // Termine le traitement de la requête
                $customer->closeCursor();
                ?>
            </tbody>
        </table>
    </div>
    <?php
    include '../footer.php';
    ?>
