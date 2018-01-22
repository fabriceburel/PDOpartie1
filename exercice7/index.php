<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice PDO 1-7</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link rel="stylesheet" href="../style.css">
    </head>    
    <?php
    include '../header.php';
   $colyseumDataBase->query('SELECT `firstName`, `lastName`, `birthDate`, `card`, `cardNumber` FROM `clients`');
    //Récupère les infos dans un tableau
    $dataCustomers = $customers->fetchAll();
    ?>
    <h1>Liste des clients </h1>
    <div class="row">
        <div class="col offset-l3 l5 striped">
            <?php
            foreach ($dataCustomers as $dataCustomer)
            {
                ?>
                <hr>
                <p><strong>Nom : </strong><?php echo $dataCustomer['lastName']; ?></p>
                <p><strong>Prénom : </strong><?php echo $dataCustomer['firstName']; ?></p>
                <p><strong>Date de naissance : </strong><?php echo $dataCustomer['birthDate']; ?></p>
                <p><strong>Carte de fidélité : </strong><?php echo $dataCustomer['card'] == 0? 'NON' : 'OUI'; ?></p>
                <p><strong>Numéro de carte de fidélité : </strong><?php echo $dataCustomer['cardNumber']; ?></p>
                <?php
            }
            // Termine le traitement de la requête
            $customers->closeCursor();
            ?>
        </div>
    </div>
    <?php
    include '../footer.php';
    ?>
