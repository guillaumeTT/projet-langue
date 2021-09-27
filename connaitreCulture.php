<?php
include 'functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Connaitre la culture</title>
        <link rel="stylesheet" type="text/css" href="globalPages.css">
        <link rel="stylesheet" type="text/css" href="avantGout.css">
        <script type= "text/javascript" src="manageContent.js"></script>
    </head>
    <body>
        <?php
            $obj = lectureFichier();
            header_page();
        ?>

        <h1 class="principal-title"> <?php echo "Connaitre la culture de la langue ".changerMotLangueAuFeminin(); ?></h1>

        <p class="text-intro">
            <?php
                $val = $obj[justeMotLangue()]['avoir un avant-goût']["text-intro"];
                foreach ($val as $value) { echo $value; }
            ?>
        </p>

        <table width="100%" border="0" class="tab" cellspacing="50">
            <tr>  
                <td class="tde" align="center"><img class="img-article" id="image-gauche" alt="van-voyage" src="niveau/debut-by-freepik.png"></td>
                <td class="tde">
                    <p class="bloc-text" id="text-droite">
                            <div class="nom-niveau"><b><a href="cours-langue.php">A1 A2</a></b></div><br />
                            Niveau permettant de s'habituer à la langue. <br />
                            De comprendre et apprendre les bases. Connaître les mots et phrases basiques.
                    </p>
                </td>
            </tr>
            <tr>  
                <td class="tde" align="center"><img class="img-article" id="image-gauche" alt="citta" src="niveau/foret-by-icon-pond.png"></td>
                <td class="tde">
                    <p class="bloc-text" id="text-droite">
                            <div class="nom-niveau"><b><a href="cours-langue.php">B1 B2</a></b></div><br />
                            Nous allons faire des phrases plus longues et plus complexes avec de nouveaux mots.<br />  
                    </p>
                </td>
            </tr>
            <tr>  
                <td class="tde" align="center"><img class="img-article" id="image-gauche" alt="citta" src="niveau/ligne-d'arrivee-by-freepik.png"></td>
                <td class="tde">
                    <p class="bloc-text" id="text-droite">
                        <div class="nom-niveau"><b><a href="cours-langue.php">C1 C2</a></b></div><br />
                        Pour se perfectionner et parler comme si que nous parlons notre langue natale.     
                    </p>
                </td>
            </tr>
	    </table>


<?php
    footer();
