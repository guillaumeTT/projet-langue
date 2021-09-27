<?php

if($_POST['choix'] === "apprendre les bases" ){
    include("basesLangue.php");
} elseif($_POST['choix'] === "avoir un avant-goût" ){
    include("avantGout.php");
} elseif($_POST['choix'] === "me perfectionner"){
    include("perfectionner.php");
} elseif($_POST['choix'] === "connaître la culture"){
    include("connaitreCulture.php");
}  elseif($_POST['choix'] === "connaître des endroits"){
    include("connaitreEndroits.php");
}
?>