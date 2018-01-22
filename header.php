<?php
//Try dit qu'on essaye d'accéder à la base de donnée
try{
   // On fait un try catch pour être sûr que la connexion à mysql se fasse
 $colyseumDataBase =  new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'usr_colyseum', 'colyseum'); 
}
    // On instancie un objet PDO. Le host est l'adresse locale sur laquelle on se connecte. dbname correspond au nom de la base de données.
 catch (Exception $e){
     //die va arreter le chargement du script PHP et de la page et afficher l'erreur
     die('Erreur : ' . $e->getMessage());
 }
?>
<header>
        <nav>
            <div class="nav-wrapper  light-green" id="navbar">
                <a href="../index.php" class="brand-logo right">Exercice PDO</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="left hide-on-med-and-down">
                    <li><a href="../exercice1/" title="exercice 1">Exercice1</a></li>
                    <li><a href="../exercice2/" title="exercice 2">Exercice2</a></li>
                    <li><a href="../exercice3/" title="exercice 3">Exercice3</a></li>
                    <li><a href="../exercice4/" title="exercice 4">Exercice4</a></li>
                    <li><a href="../exercice5/" title="exercice 5">Exercice5</a></li>
                    <li><a href="../exercice6/" title="exercice 6">Exercice6</a></li>
                    <li><a href="../exercice7/" title="exercice 7">Exercice7</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="../exercice1/" title="exercice 1">Exercice1</a></li>
                    <li><a href="../exercice2/" title="exercice 2">Exercice2</a></li>
                    <li><a href="../exercice3/" title="exercice 3">Exercice3</a></li>
                    <li><a href="../exercice4/" title="exercice 4">Exercice4</a></li>
                    <li><a href="../exercice5/" title="exercice 5">Exercice5</a></li>
                    <li><a href="../exercice6/" title="exercice 6">Exercice6</a></li>
                    <li><a href="../exercice7/" title="exercice 7">Exercice7</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <body>
        <div  class="container">