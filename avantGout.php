<?php
    include 'functions.php';

?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Avant-goût</title>
        <link rel="stylesheet" type="text/css" href="globalPages.css">
        <link rel="stylesheet" type="text/css" href="avantGout.css">
        <script type= "text/javascript" src="manageContent.js"></script>
    </head>
    <body>

<?php
    $obj = lectureFichier();
    header_page();
        ?>
        <h1 class="principal-title"> <?php echo "Petit avant-goût ".changerMotLangue(); ?></h1>
        <p class="text-intro">
            <?php
                $val = $obj[justeMotLangue()]['avoir un avant-goût']["text-intro"];
                foreach ($val as $value) { echo $value; }
            ?>
        </p>
        <div class="informations-principale">
            <h2 class="titre-infos">Intéréssons-nous à la langue <?php echo changerMotLangueAuFeminin(); ?></h2>

        </div>

<?php
    footer();
