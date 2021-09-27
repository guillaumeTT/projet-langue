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
	<h1 class="principal-title">LES LANGUES LATINES</h1>

	<div class="images">
		<div><img style=" display:inline-block;padding-bottom: 30px;" class="img-scroll" alt="drapeau francais" src="flags/fr.jpg" /></div>
		<div><img style=" display:inline-block;padding-bottom: 30px;" class="img-scroll" alt="drapeau espagnol" src="flags/es.png" /></div>
		<div><img style=" display:inline-block;padding-bottom: 30px;" class="img-scroll" alt="drapeau italien" src="flags/it.jpg" /></div>
		<div><img style=" display:inline-block;padding-bottom: 30px;" class="img-scroll" alt="drapeau portugais" src="flags/pt.png" /></div>
		<div><img style=" display:inline-block;padding-bottom: 30px;" class="img-scroll" alt="drapeau roumain" src="flags/ro.jpg" /></div>
	</div>
	<p class="text-intro">Espagnol, italien, roumain, français, portugais sont<br>des langues
	qui <b>se ressemblent</b> de par<br>leurs <b>orthographes</b> ou encore leurs <b>prononciations</b></p>

<?
	langue_a_choisir();
?>
	<h3 class="other-title">LES LANGUES VIVANTES, UNE MONTAGNE FRANCHISSABLE</h3><br>

	<div>
		<div class="article">
			<img class="img-article" id="image-gauche" alt="van-voyage" src="van-voyage.jpg">
			<p class="bloc-text" id="text-droite">Je vais t'apprendre les bases de chaque langue, l'histoire du pays en question et analyser la langue pour que tu puisses prendre conscience que tu connais déjà pas mal de mots sans parler la langue</p>
		</div>

		<div class="article">
			<img class="img-article" id="image-droite" alt="citta" src="citta.jpg">
			<p class="bloc-text" id="text-gauche">Prendre du plaisir quand on apprend des choses est primordial.<br>Savoir retenir l'information est tout aussi importante.</p>
		</div>
	</div>
<?
	langue_a_choisir();
?>	
	<footer>
		<button class="theme" type="button">
			Changer de thème
		</button>
	</footer>
</body>
</html>