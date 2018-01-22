<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice PDO 1-6</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link rel="stylesheet" href="../style.css">
    </head>    
    <?php
    include '../header.php';
    $shows = $colyseumDataBase->query('SELECT `title`, `performer`, `date`, `startTime` FROM `shows` ORDER BY `title` ASC');
    //Récupère les infos dans un tableau
    $dataShows = $shows->fetchAll();
    ?>
    <h1>Liste des spectacles par artistes</h1>
    <div class="row">
        <form class="col offset-l1 l8" action="index.php" method="POST">
            <label class="col offset-l3 l5" for="performer">Sélectionner votre artiste</label>
            <select  class="col offset-l3 l5" name="performer">
                <?php
                foreach ($dataShows as $dataShow)
                {
                    ?>
                    <option value="<?php echo $dataShow['performer']; ?>" <?php echo (isset($_POST['performer']) && $_POST['performer'] == $dataShow['performer'])?'selected':''; ?>><?php echo $dataShow['performer']; ?></option>
                    <?php
                }
                ?>
            </select>
            <input type="submit" value="Valider" name="choice">            
        </form>
        <table class="col offset-l3 l5 striped">
            <thead>
                <tr>
                    <th>
                        Spectacle
                    </th>
                    <th>
                        Artiste
                    </th>
                    <th>
                        Date
                    </th>
                    <th>
                        Heure
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_POST['performer']))
                {
                    foreach ($dataShows as $dataShow)
                    {
                        If ($dataShow['performer'] == $_POST['performer'])
                        {
                            ?>
                            <tr>
                                <td><?php echo $dataShow['title']; ?></td>
                                <td><?php echo $dataShow['performer']; ?></td>
                                <td><?php echo $dataShow['date']; ?></td>
                                <td><?php echo $dataShow['startTime']; ?></td>
                            </tr>
                            <?php
                        }
                    }
                }
                else
                {
                    foreach ($dataShows as $dataShow)
                    {
                            ?>
                            <tr>
                                <td><?php echo $dataShow['title']; ?></td>
                                <td><?php echo $dataShow['performer']; ?></td>
                                <?php $showDate = new DateTime($dataShow['date']);?>
                                <td><?php echo $showDate->format('d/m/Y'); ?></td>
                                <td><?php echo $dataShow['startTime']; ?></td>
                            </tr>
                            <?php
                    }
                }
                // Termine le traitement de la requête
                $shows->closeCursor();
                ?>
            </tbody>
        </table>
    </div>
    <?php
    include '../footer.php';
    ?>
