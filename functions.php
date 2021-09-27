<?php

function lectureFichier(){
	$file = "dataTxt.json";
	$data = file_get_contents($file);
	return json_decode($data, true);
}

function head($title, $cssFile = ""){
	if($cssFile != ""){
	?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<title><?php echo $title; ?></title>
			<link rel="stylesheet" type="text/css" href="globalPages.css">
			<?php echo "<link rel=\"stylesheet\" type=\"text/css\" href= $cssFile >"; ?>
			<script type= "text/javascript" src="manageContent.js"></script>
		</head>
		<body>
	<?php
	} else {
	?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<title><?php echo $title; ?></title>
			<link rel="stylesheet" type="text/css" href="globalPages.css">
			<script type= "text/javascript" src="manageContent.js"></script>
		</head>
		<body>
	<?php
	}
}


function langue_a_choisir(){
?>

<form action="result.php" method="post">
	<div class="selection-option">
		Je veux apprendre 
		<select class="langues" name="langue">
			<option value="le portugais">le portugais</option>
			<option value="le français">le français</option>
			<option value="le roumain">le roumain</option>
			<option value="l'espagnol">l'espagnol</option>
			<option value="l'italien">l'italien</option>
		</select>
		et je souhaite
		<select class="langues" name="choix">
			<option value="avoir un avant-goût">avoir un avant-goût</option>
			<option value="apprendre les bases">apprendre les bases</option>
			<option value="me perfectionner">me perfectionner</option>
			<option value="connaître la culture">connaître la culture</option>
			<option value="connaître des endroits">connaître des endroits</option>
		</select>
			<input type="submit" name="C'est parti" class="langues">
	</div>
</form>

<?php
}

function header_page(){
?>

	<header>
		<nav class="menu">
			<ul>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Méthode d'apprentissage</a></li>
				<li><a href="livres.php">Recommandation de livres</a></li>
				<li><a href="langueEnPrive.php">Cours de langues en privé</a></li>
				<li><a href="index.php">Accueil</a></li>
			</ul>
		</nav>
	</header>

<?php
}

function changerMotLangue(){
	if($_POST['langue'] === "le portugais"){
		return "du portugais";
	} elseif($_POST['langue'] === "le français"){
		return "du français";
	} elseif($_POST['langue'] === "le roumain"){
		return "du roumain";
	} elseif($_POST['langue'] === "l'espagnol"){
		return "de l'espagnol";
	} elseif($_POST['langue'] === "l'italien"){
		return "de l'italien";
	}
}

function justeMotLangue(){
	if($_POST['langue'] === "le portugais"){
		return "portugais";
	} elseif($_POST['langue'] === "le français"){
		return "français";
	} elseif($_POST['langue'] === "le roumain"){
		return "roumain";
	} elseif($_POST['langue'] === "l'espagnol"){
		return "espagnol";
	} elseif($_POST['langue'] === "l'italien"){
		return "italien";
	}
}

function nomPays(){
	if($_POST['langue'] === "le portugais"){
		return "au Portugal";
	} elseif($_POST['langue'] === "le français"){
		return "en France ";
	} elseif($_POST['langue'] === "le roumain"){
		return "en Roumanie";
	} elseif($_POST['langue'] === "l'espagnol"){
		return "en Espagne";
	} elseif($_POST['langue'] === "l'italien"){
		return "en Italie";
	}
}

function changerMotLangueAuFeminin(){
	if($_POST['langue'] === "le portugais"){
		return "portugaise";
	} elseif($_POST['langue'] === "le français"){
		return "française";
	} elseif($_POST['langue'] === "le roumain"){
		return "roumaine";
	} elseif($_POST['langue'] === "l'espagnol"){
		return "espagnole";
	} elseif($_POST['langue'] === "l'italien"){
		return "italienne";
	}
}

function footer(){
?>
		<footer>
			<button class="theme" type="button">
				Changer de thème
			</button>
		</footer>
	</body>
</html>
<?php
}
?>
