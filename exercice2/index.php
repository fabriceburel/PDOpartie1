<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice PDO 1-2</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link rel="stylesheet" href="../style.css">
    </head>        
<?php
    include '../header.php';
    $genreOfShows = $colyseumDataBase->query('SELECT `genre` FROM `genres`');
    ?>
    <h1>Listes des types de spectacles</h1>
    <div class="row">
        <label for="genreOfShows">Les Genres de spectacles</label>
        <div class="input-field col s12">
        <select class="col offset-l3 l5" name="genreOfShows">
                <?php
                while ($dataGenreShows = $genreOfShows->fetch())
                {
                    ?>
            <option><?php echo $dataGenreShows['genre']; ?></option>
                    <?php
                }
                // Termine le traitement de la requête
                $genreOfShows->closeCursor();
                ?>
        </select>
        </div>
    </div>
    <?php
    include '../footer.php';
    ?>