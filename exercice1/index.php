<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice PDO 1-1</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link rel="stylesheet" href="../style.css">
    </head>    
    <?php
    include '../header.php';
    // Je crée une variable query dans laquelle je mets ma requête SQL
    $query = 'SELECT `id`, `lastName`, `firstName`, `birthDate`, `card`, `cardNumber` FROM `clients`;';
    // Gràce à ->query($query) on éxécute la requête SQL et on récupère un objet PDO Statement
    $customersResult = $colyseumDataBase->query($query);
    /* fetchAll() va retourner le résultat sous la forme du paramètre demandé
     * PDO::FETCH_ASSOC est le paramètre qui permet d'avoir un tableau associatif. Les clés sont les noms des colonnes de la table
     */
    $customersList = $customersResult->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <h1>Listes des clients</h1>
    <div class="row">
        <table class="col offset-l3 l5 striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de naissance</th>
                    <th>Carte</th>
                    <th>Numéro de carte</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customersList AS $customers)
                { ?>
                    <tr>
                        <td><?= $customers['id']; ?></td>
                        <td><?= $customers['lastName']; ?></td>
                        <td><?= $customers['firstName']; ?></td>
                        <td><?= $customers['birthDate']; ?></td>
                        <td><?= $customers['card']; ?></td>
                        <td><?= $customers['cardNumber']; ?></td>
                    </tr>
<?php } ?>
            </tbody>
        </table>
    </div>
    <?php
    include '../footer.php';
    ?>
