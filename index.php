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

<?php
	header_page();
?>
	<h1 class="principal-title">LES LANGUES LATINES</h1>


	<table width="100%" border="0" class="ens-drapeau">
		<tr>  
			<td><img style="padding-bottom: 30px;" class="img-scroll" alt="drapeau francais" src="flags/fr.jpg" /></td>
			<td><img style="padding-bottom: 30px;" class="img-scroll" alt="drapeau espagnol" src="flags/es.png" /></td>
			<td><img style="padding-bottom: 30px;" class="img-scroll" alt="drapeau italien" src="flags/it.jpg" /></td>
			<td><img style="padding-bottom: 30px;" class="img-scroll" alt="drapeau portugais" src="flags/pt.png" /></td>
			<td><img style="padding-bottom: 30px;" class="img-scroll" alt="drapeau roumain" src="flags/ro.jpg" /></td>
		</tr>
	</table>
	<p class="text-intro">Espagnol, italien, roumain, français, portugais sont<br>des langues
	qui <b>se ressemblent</b> de par<br>leurs <b>orthographes</b> ou encore leurs <b>prononciations</b></p>
<?php
	langue_a_choisir();
?>
	<h3 class="other-title">LES LANGUES VIVANTES, UNE MONTAGNE FRANCHISSABLE</h3><br>

	<table width="100%" border="0" class="tab" cellspacing="50">
		<tr>  
			<td class="tde" align="center"><img class="img-article" id="image-gauche" alt="van-voyage" src="van-voyage.jpg"></td>
			<td class="tde"><p class="bloc-text">
				Je vais t'apprendre les bases de chaque langue, l'histoire du pays en question
				 et analyser la langue pour que tu puisses prendre conscience que tu connais déjà
				  pas mal de mots sans parler la langue
				</p></td>
		</tr>
		<tr> 
			<td class="tde"><p class="bloc-text">Prendre du plaisir quand on apprend des choses est primordial.
				Savoir retenir l'information est tout aussi importante.
			</p></td>
			<td class="tde" align="center"><img class="img-article" id="image-droite" alt="citta" src="citta.jpg"></td>
		</tr>
	</table>

<?php
	langue_a_choisir();
	footer();