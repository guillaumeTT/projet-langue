<?php

function langue_a_choisir(){

?>
<div class="selection-option">
	Je veux apprendre 
	<select class="langues">
		<option>le portugais</option>
		<option>le français</option>
		<option>le roumain</option>
		<option>l'espagnol</option>
		<option>l'italien</option>
	</select>
	 et je souhaite
	<select class="langues">
		<option>avoir un avant-goût</option>
		<option>apprendre les bases</option>
		<option>me perfectionner</option>
		<option>connaître la culture</option>
		<option>connaître des endroîts</option>
	</select>
	<a href="niveauLangue.php">
		<button type="button" class="langues">
			C'est parti
		</button>
	</a>
</div>

<?
}

function header_page(){
?>

	<header>
		<nav class="menu">
			<ul>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Méthode d'apprentissage</a></li>
				<li><a href="#">Recommandation de livres</a></li>
				<li><a href="#">Cours de langues en privé</a></li>
				<li><a href="#">Accueil</a></li>
			</ul>
		</nav>
	</header>

<?
}
?>

