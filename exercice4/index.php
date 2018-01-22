<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice PDO 1-4</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link rel="stylesheet" href="../style.css">
    </head>        
    <?php
    include '../header.php';
    /*Affichages des colonnes cardNumber renommé en cardFidelity, firstName et lastName du tableaux clients et de la colonne type du tableau cardTypes
     * Jointure entre les tableaux cards et cardTypes par les colonnes cardTypesId et id
     * Jointure entre les tableaux cards et clients par les colonnes cardNumber et cardNumber
     * Lorsque la colonne type du tableau cardTypes est égal à "Fidélité"
     * ET que la colonne id du tableau cardTypes est égal à la colonne cardTypesId du tableau cards
     */
    $customerFidelities = $colyseumDataBase->query('
    SELECT `clients`.`cardNumber` AS `cardFidelity`,  `clients`.`firstName`,   `clients`.`lastName`, `cardTypes`.`type`FROM `cards` INNER JOIN `cardTypes` ON `cards`.`cardTypesId` = `cardTypes`.`id` INNER JOIN `clients` ON `cards`.`cardNumber` = `clients`.`cardNumber` WHERE `cardTypes`.`type` = "Fidélité" AND `cardTypes`.`id` = `cards`.`cardTypesId`');
    ?>
    <h1>Listes des Clients ayant une carte de fidélité</h1>
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
                    <th>
                        N° De la carte
                    </th>
                    <th>
                        Type De la carte
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($dataClients = $customerFidelities->fetch())
                {
                    ?>
                    <tr>
                        <td><?php echo $dataClients['lastName']; ?></td>
                        <td><?php echo $dataClients['firstName']; ?></td>
                        <td><?php echo $dataClients['cardFidelity']; ?></td>
                        <td><?php echo $dataClients['type']; ?></td>
                    </tr>
                    <?php
                }
                // Termine le traitement de la requête
                $customerFidelities->closeCursor();
                ?>
            </tbody>
        </table>
    </div>
    <?php
    include '../footer.php';
    ?>