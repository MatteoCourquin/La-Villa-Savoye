<!-- Demarrage de session -->
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

	<body class='light'>

		<header>
			<!-- Header -->
			<?php include('../components/header.php'); ?>	
		</header>
		
		<main>			
			<!-- inclusion de ma zone images -->
			<?php include('../components/Gallery.php'); ?>	
			
			<?php
			// declaration de ma base de donnée
			$pdo = new PDO('mysql:host=localhost;dbname=laVillaSavoye', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

			// fonction censure
			function censure($censure){
				return str_replace(array_map('trim', file('censure.txt')), '*****', $censure);
			}

			// fonction supprimer des commentaires
			if(isset($_GET["id_commentarie"])){
				$id = $_GET["id_commentarie"]; 
				$pdo->exec("DELETE FROM comms WHERE id_commentarie = $id ");
			}
			
			// fonction pour envoyer mes commentaires
			if($_POST){
				$_POST['pseudo'] = censure(addslashes(($_POST['pseudo'])));
				$_POST['message'] = censure(addslashes(($_POST['message'])));
				
				// insertion de mes variables dans ma base de donnée
				$pdo->exec("INSERT INTO comms (pseudo, message, date_heure) VALUES ('$_POST[pseudo]', '$_POST[message]',NOW())");}
				
				// selection de ma table: commentaires
				$r = $pdo->query('SELECT * FROM comms ORDER BY id_commentarie DESC');
				
				// afficher mes commentaires
				while($commentarie = $r->fetch(PDO::FETCH_ASSOC)) {
					echo "<div id='zonecomm' class='light'>" .
							"<div id='pseudo_date' class='light'>" . "<div id='pseudo'>" . $commentarie['pseudo'] . "</div>" . 
							"<div id='date_heure'>" . $commentarie['date_heure'];
							
							// fonction de suppression si ADMIN
							if (isset($_SESSION['role']) && $_SESSION['role'] === 'ADMIN'){
								echo "<a id='delete' href='gallery.php?id_commentarie=" . $commentarie['id_commentarie']."'><img src='../assets/images/logos/croix.png' alt='croix' id='croixcomm'></a>".
								"</div>";
								}
							
					echo "</div>" . "</div>" . "<div id='commentaire'>" . $commentarie['message'] . "</div>";		
				} ?>

			<!-- création de commentaire  -->
			<form id="form_commentaire" method="post">
				<div id='pseudo_comm'>
					<input id="pseudo_" class="" type="text" name="pseudo" placeholder="Pseudo" required>
					<input id="comm_" class="" type="text" name="message" placeholder="Message" required></input>
				</div>
				<input type="submit" value="SEND" id='send' class='btn-blue'>
			</form>
			
		</main>
		<!-- script -->
		<script src="../script/gallery.js"></script>
	</body>
</html>