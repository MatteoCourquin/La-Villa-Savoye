<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Gallery</title>
		<link rel="stylesheet" type="text/css" href="../assets/css/style2.css">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Exo:wght@100;300;400;600&display=swap" rel="stylesheet">
		<meta charset="utf-8">
	</head>

	<body>
		<header>
			<?php include('../components/header.php'); ?>	
		</header>
		
		<main>			
			
			<?php include('../components/Gallery.php'); ?>	
			
			<?php

				$pdo = new PDO('mysql:host=localhost;dbname=laVillaSavoye', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

				if(isset($_GET["id_commentarie"])){$id = $_GET["id_commentarie"] ; $pdo->exec("DELETE FROM comms WHERE id_commentarie =' . $id . '");};                    

				if($_POST){
					$_POST['pseudo'] = addslashes(($_POST['pseudo']));
					$_POST['message'] = addslashes(($_POST['message']));
					
					$pdo->exec("INSERT INTO comms (pseudo, message, date_heure) VALUES ('$_POST[pseudo]', '$_POST[message]',NOW())");}
					
					$r = $pdo->query('SELECT * FROM comms ORDER BY id_commentarie DESC');
					
					while($commentarie = $r->fetch(PDO::FETCH_ASSOC)) {
						echo "<div id='zonecomm'>" .
								"<div id='pseudo'>" . $commentarie['pseudo'] . "</div>" . 
								"<div id='commentaire'>" . $commentarie['message'] . "</div>".
								"<div id='date_heure'>" . $commentarie['date_heure'] . "</div>";
								
								if (isset($_SESSION['role']) && $_SESSION['role'] === 'ADMIN'){

								"<a id='delete' href='galerie.php?id=" . $commentarie['id_commentarie']."'><img src='../assets/images/logos/croix.png' alt='croix' id='croixcomm'></a>".
								"</div>";
								}
					} 
			?>

			<form id="form_commentaire" method="post">
				<div id='pseudo_comm'>
					<input id="pseudo_" class="" type="text" name="pseudo" placeholder="Pseudo" required>
					<input id="comm_" class="" type="text" name="message" placeholder="Message" required></input>
				</div>
				<input type="submit" value="SEND" id='send' class='btn-blue'>
			</form>
			
		</main>
		<script src="../script/gallery.js"></script>
	</body>
</html>