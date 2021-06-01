<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Blog</title>
		<link rel="stylesheet" type="text/css" href="../assets/css/style2.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Exo:wght@100;300;400;600&display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta charset="utf-8">
	</head>

	<body>
		
		<?php
		include('../components/header.php');
		?>


		<article id="zone_article">
		<?php

		$db = new PDO('mysql:host=localhost;dbname=laVillaSavoye', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

		$uploadimg = '../assets/images/imgArticle';

		if (isset($_POST['title'], $_POST['image'], $_POST['content']) && !empty($_POST['title']) && !empty($_POST['image']) && !empty($_POST['content'])){

			$title = htmlspecialchars(addslashes($_POST['title']));
			$tmp_name = $_FILES["image"]["tmp_name"];
			$img = $_POST['image'];
			$content = htmlspecialchars(addslashes($_POST['content']));
			
			move_uploaded_file($tmp_name . $tmp_name/$img);

			$sql = "INSERT INTO article (title, image, content) VALUES ('$title', '$img', '$content')";
			$db->exec($sql);

		}

		$r = $db->query('SELECT * FROM article');

		?>

			<!-- <div id="article1" class="article">
				<img src="../assets/images/article1.jpg">
				<h1>News on La VILLA SAVOYE !</h1>

				<p>A 20-minute walk from Poissy train station, come and discover one of the masterpieces of architect Le Corbusier built between 1928 and 1931: the Villa Savoye. It was classified as a historical monument in 1965 and a UNESCO World Heritage Site in 2016.<br><br>

				A desire for the countryside submitted to Le Corbusier by the Savoye couple gave birth to building. The major innovations dared by Le Corbusier almost a century ago can still and still appear relevant to us.<br><br>

				A visit is essential to be surprised by this imposing Villa which reflects the modern, avant-garde and futuristic spirit of its architect. Raised in lush greenery, stilts make the aerial construction; the roof-gardens, large windows, the design of the facades and the free plan, as well as the skylights combine to give this Villa an omnipresent clarity. These are all elements that form modern architecture.<br><br>

				Called the "Heures Claires", Villa Savoye Le Corbusier thus completes the architect's cycle of white villas. Like the other villas in this cycle, it is the culmination of a reflection on the habitat carried out for ten years by the famous architect who wants to offer his sponsors an architecture that is "pure, clean, clean and healthy ”. You might get inspired for your own arrangements!</p>

				<button id="more1" class="more">more ...</button>
				<button id="less1" class="less">less ...</button>
			</div>	

			<div id="article3" class="article">
				<img src="../assets/images/article3.jpg">
				<h1>Un ovni nommé Savoye</h1>

				<p>Il faut imaginer le paysage dans les années 1930. Poissy, petite ville paisible avec son clocher et ses maisons en pierres. Dans les hauteurs, un plateau bordé de champs et de vergers qui s'étirent jusqu'à la Seine. Là, au milieu de ce cadre bucolique, un cube blanc, comme posé sur l'herbe, fait figure d'ovni. C'est la villa Savoye.
				Imaginée par Le Corbusier (voir par ailleurs), elle sera l'un des exemples les plus purs de l'architecture moderne. Si bien que le bâtiment, comme l'ensemble de l'oeuvre de son concepteur, a été classé en juillet, au patrimoine mondial de l'Unesco. Un musée dédié à ce visionnaire doit y voir le jour en 2020.<br><br>

				C'est en 1928 qu'Eugénie et Pierre Savoye, couple parisien fortuné demande à Charles-Edouard Jeanneret, plus connu sous le pseudonyme de Le Corbusier, de lui construire une résidence à la campagne. « Mme Savoye l'avait repéré en visitant la Villa Church, à Ville-d'Avray, qui appartenait à des amis », explique David Madec, administrateur du bâtiment géré par le centre des monuments nationaux. Le couple lui donne presque carte blanche, exposant simplement les besoins de la famille. Avec ses pilotis, ses façades percées de longues fenêtres et ses toits jardins, le résultat détone. Plus encore, c'est un véritable manifeste de la modernité que Le Corbusier a imaginé. Les grands escaliers, les lustres, les boiseries de l'architecture classique ont disparu. Grâce au béton armé, les murs porteurs sont supprimés. La lumière est partout. Un solarium est aménagé. Exit les chambres de bonnes aux derniers étages, ici, le personnel est logé au rez-de-chaussée pour aller et venir sans gêner les Savoye.</p>

				<button id="more2" class="more">more ...</button>
				<button id="less2" class="less">less ...</button>
			</div>	

			<div id="article2" class="article">
				<img src="../assets/images/article2.jpg">
				<h1>La villa Savoye submergée dans un fjord du Danemark</h1>

				<p>Déjà vandalisée dans les photomontages de l’artiste belge Xavier Dolory, la villa Savoye se noie désormais dans le fjord de Vejle (Danemark). Ou plutôt sa réplique, conçue par Asmund Havsteen-Mikkelsen à l’occasion du festival Floating Art qui se déroule  face au Fjordenhus, le premier bâtiment imaginé par l’artiste Olafur Eliasson, depuis le 23 juin dernier. Présentée jusqu’au 2 septembre, cette reconstitution à l’échelle 1:1 détourne le bâtiment le plus célèbre de Le Corbusier pour exprimer une critique de notre époque, au regard de l’utopie moderniste apparue au début du XXe siècle.<br><br>

				Lors de sa construction à Poissy (Yvelines), entre 1928 et 1931, la villa du couple Savoye incarne tous les préceptes du mouvement moderne. Avec ses pilotis, son toit-terrasse, ses fenêtres en bandeau ainsi que son plan et ses façades libres, cette machine à habiter symbolise la « promesse d’un monde nouveau » selon l’artiste danois. Une nouvelle ère qui place la rationalité et l’aspiration à une vie meilleure pour tous en haut de l’échelle des valeurs, contrairement à notre présent, rythmé par le Brexit, l’élection de Donald Trump ou la montée des partis d’extrême-droite…</p>

				<button id="more3" class="more">more ...</button>
				<button id="less3" class="less">less ...</button>
			</div>	

			<div id="article4" class="article">
				<img src="../assets/images/article4.jpg">
				<h1>Yvelines. Visites guidées, résidence artistique, nouvel ouvrage : ça bouge à la Villa Savoye de Poissy</h1>

				<p>Visites guidées depuis le jardin, création chorégraphique filmée sur place et visible sur Francetv Culturebox, nouvelle édition d’un ouvrage… La Villa Savoye de Poissy (Yvelines) n’oublie pas son public, même si l’intérieur de la villa reste fermé, confinement oblige.<br><br>

				Célèbre maison imaginée par l’architecte Le Corbusier, la Villa Savoye de Poissy est fermée au public depuis la fin octobre. Néanmoins, le site, géré par le Centre des monuments nationaux, propose plusieurs actualités à l’attention du public.<br><br>

				La première consiste en l’organisation de visites guidées sur place, mais uniquement depuis le jardin. Pour qui fut-elle construite ? Quels sont les 5 points de cette architecture nouvelle ? En quoi est-elle emblématique du travail de Le Corbusier ? Voici quelques-unes des questions qui seront abordées par le guide à l’occasion des prochaines visites programmées samedi 17 et dimanche 18 avril à 14 h et 15 h.<br><br>

				Autre actualité, le public est invité à découvrir la création chorégraphique signée Amala Dianor, accompagné de la danseuse Nangaline Gomi, au cœur de la Villa Savoye. À l’occasion d’une collaboration avec le plasticien Grégoire Korganow derrière la caméra, Amala Dianor adapte la chorégraphie de son spectacle Man Rec (Moi seulement, en wolof) et la transpose en Nioun Rec (Nous seulement), première création d’une série de films de danse intitulée Ciné-Danse. Des danses urbaines à la danse contemporaine en passant par les danses africaines, Amala Dianor se saisit de la Villa Savoye et fait fusionner les styles. Le résultat est à découvrir sur le site Francetv Culturebox.</p>

				<button id="more4" class="more">more ...</button>
				<button id="less4" class="less">less ...</button>
			</div>	

			<div id="article5" class="article">
				<img src="../assets/images/article5.jpg">
				<h1>Exposition à Poissy : des présences animales et humaine hantent la villa Savoye</h1>

				<p>Le Centre des monuments nationaux qui gère la villa Savoye de Poissy (Yvelines) présente l’exposition Habiter la villa, jusqu’au 24 janvier. Il s’agit d’une carte blanche confiée à Françoise Pétrovitch, artiste, âgée de 56 ans et installée à Cachan (94). Celle-ci a créé pour l’occasion une quinzaine d’œuvres, peintures et sculptures, qui dialoguent avec l’architecture et les recherches chromatiques de Le Corbusier.<br><br>

				Considérée comme l’un des fleurons du Mouvement moderne, la villa Savoye tire avantage de la polychromie architecturale, stratégie de mise en relation des couleurs avec les espaces, conçue par Le Corbusier. Employant cette même gamme des couleurs et ajustant les dimensions des œuvres au format de l’architecture, Françoise Pétrovitch prolonge le geste de l’architecte et met ses pas dans ceux d’Eugénie Savoye, commanditaire de la villa en 1928. L’ensemble des œuvres fait corps avec l’architecture, l’habite, voire la hante de présences animales et humaines.<br><br>

				Le parcours commence par le vestibule du premier étage où le visiteur est accueilli par un tableau de bouquet dans un vase, posé sans façon sur la tablette. Plus loin, la chambre du fils reçoit, dans les alcôves, deux peintures d’adolescents, dans des attitudes ambiguës, entre oisiveté et inquiétude. Au détour de la salle de bain, le long de la baignoire, la sculpture en bronze d’un garçon ceint d’une bouée crée un vibrant contraste de matières. Dans le prolongement, le boudoir est orné d’une peinture d’oiseau et de gants en céramique esquissant des jeux de mains devant la fenêtre.<br><br>

				En poursuivant sur la terrasse, Jane, sculpture en bronze noir, bras levés et entourée d’une ceinture de plantes, brille de son éclat sombre dans la lumière blanche du solarium. Enfin, la cuisine ménage aussi ses curiosités, tels le poulpe placé en embuscade dans l’évier, le chat alangui sur le plan de travail et l’assiette dans le passe-plat.<br><br>

				Le monde familier de l’artiste (fleurs, adolescents, animaux) repeuple la villa. Se tenant juste à la lisière de l’imaginaire, les œuvres inspirent une manière sensible d’habiter.</p>

				<button id="more5" class="more">more ...</button>
				<button id="less5" class="less">less ...</button>
			</div>	

			<div id="article6" class="article">
				<img src="../assets/images/article6.jpg">
				<h1>Monument jeu d'enfant 2019 à la VILLA SAVOYE à POISSY</h1>

				<p>L'évènement national et annuel Monument Jeu d'Enfant revient les 19 et 20 octobre 2019, pour le bonheur de toutes les familles!<br><br>

				L'occasion de faire découvrir aux enfants de 5 à 12 ans et à leurs parents toute la richesse du patrimoine architectural, culturel et historique français grâce à de nombreuses activités ludiques et pédagogiques à Paris, en Ile-de-France et dans la France entière.<br><br>

				A Poissy, en région parisienne, la Villa Savoye - une jolie maison moderniste signée Le Corbusier et construite entre 1928 et 1931 - ouvre ses portes gratuitement aux plus jeunes pour une activité "Imprime ta villa Savoye!" super fun.<br><br>

				L'activité, qui débute à 14h, consiste en un atelier d'impression 3D. Une animatrice qui guidera les enfants (à partir de 8 ans) au milieu des formes géométriques et leur expliquera les 5 points de l’architecture qui font de cette maison des années 30, une construction qui étonne encore aujourd’hui par sa modernité.<br><br>

				Grâce au numérique et à l’impression 3D, conception des espaces, modélisation 3D sur tablettes et impression de maquettes n’auront plus aucun secret pour nos chères petites têtes blondes !<br><br>

				Qui sait, certains futurs architectes se cachent peut-être parmi nos chers marmots ! Peut-être même un futur Le Corbusier !</p>

				<button id="more6" class="more">more ...</button>
				<button id="less6" class="less">less ...</button>
			</div>	 -->

			<?php
			while ($article = $r->fetch(PDO::FETCH_ASSOC)){
					?> 
					<div class="article">
						<img src='../assets/images/imgArticle/<?php echo $article['img']; ?>'>
						<h1> <?php echo $article['title']; ?> </h1>
						<p> <?php echo $article['content']; ?> </p>
					</div>

			<?php } ?>

			<form method='POST' action='blog.php' id='crearticle'>
				<h1>Title :</h1>
				<input type='text' name='title' required>

				<h1>Image :</h1>
				<input type='file' name='image' value='' required>

				<h1>Content :</h1>
				<textarea name='content' required></textarea>

				<input type='submit' name='submit' value='publish' class='btn-blue'>
			</form>
		</article>

		<button>create your article</button>

		<script type="text/javascript" src="../script/blog.js"></script>
	</body>
</html>