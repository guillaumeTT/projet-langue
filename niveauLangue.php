<?php
include 'functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Les langues latines</title>
        <link rel="stylesheet" type="text/css" href="globalPages.css">
        <link rel="stylesheet" type="text/css" href="index.css">
        <script type= "text/javascript" src="manageContent.js"></script>
    </head>
    <body>
        <?
            header_page();
        ?>

        <h1 class="principal-title">Choisis le niveau de langue à approfondir</h1>

        <p class="text-intro">
            Cette page est dédié aux personnes qui désire savoir où elles sont.<br>
            Notamment les étudiants qui apprennent cette langue en particulier.
        </p>

            <div>
                <div class="article">
                    <img class="img-article" id="image-gauche" alt="van-voyage" src="niveau/debut-by-freepik.png">
                    <p class="bloc-text" id="text-droite">
                        <div class="nom-niveau">A1 A2</div><br />
                        Niveau permettant de s'habituer à la langue. <br />
                        De comprendre et apprendre les bases. Connaître les mots et phrases basiques.
                    </p>
                </div>

                <div class="article">
                    <img class="img-article" id="image-gauche" alt="citta" src="niveau/foret-by-icon-pond.png">
                    <p class="bloc-text" id="text-droite">
                        <div class="nom-niveau">B1 B2</div><br />
                        Nous allons faire des phrases plus longues et plus complexes avec de nouveaux mots.<br />
                        
                    </p>
                </div>

                <div class="article">
                    <img class="img-article" id="image-gauche" alt="citta" src="niveau/ligne-d'arrivee-by-freepik.png">
                    <p class="bloc-text" id="text-droite">Je vais t'apprendre les bases de chaque langue, l'histoire du pays en question et analyser la langue pour que tu puisses prendre conscience que tu connais déjà pas mal de mots sans parler la langue</p>
                </div>

            </div>       
        <footer>
            <button class="theme" type="button">
                Changer de thème
            </button>
        </footer>
    </body>
</html>
