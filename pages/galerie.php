<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Gallery</title>
		<link rel="stylesheet" type="text/css" href="../style/galerie.css">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Exo:wght@100;300;400;600&display=swap" rel="stylesheet">
		<meta charset="utf-8">
	</head>

	<body>

		<?php	
			include('../header/header.php');
		?>

		<main>
			<div id="zoneimage">
				<div>
					<img class="image" id="image1" src="../images/galerie/photo1.jpg" alt="Photo de la villa savoye">
					<h2>LE CORBUSIER</h2>
				</div>
				<div id="lightbox1" class="lightbox">
					<img class="imagebox" src="../images/galerie/photo1.jpg" alt="Photo de la villa savoye">
					<img src="../images/galerie/logos/croix.png" alt="logo croix" id="close1" class="close">
				</div>
				
				<div>
					<img class="image" id="image2" src="../images/galerie/photo2.jpg" alt="Photo de la villa savoye">
					<h2>LA VILLA SAVOYE - NIGHT</h2>
				</div>
				<div id="lightbox2" class="lightbox">
					<img class="imagebox" src="../images/galerie/photo2.jpg" alt="Photo de la villa savoye">
					<img src="../images/galerie/logos/croix.png" alt="logo croix" id="close2" class="close">
				</div>

				<div>
					<img class="image" id="image3" src="../images/galerie/photo3.jpg" alt="Photo de la villa savoye">
					<h2>LIVING ROOM</h2>
				</div>
				<div id="lightbox3" class="lightbox">
					<img class="imagebox" src="../images/galerie/photo3.jpg" alt="Photo de la villa savoye">
					<img src="../images/galerie/logos/croix.png" alt="logo croix" id="close3" class="close">
				</div>

				<div>
					<img class="image" id="image4" src="../images/galerie/photo4.jpg" alt="Photo de la villa savoye">
					<h2>FURNITURE - LE CORBUSIER</h2>
				</div>

				<div>
					<img class="image" id="image5" src="../images/galerie/photo5.jpg" alt="Photo de la villa savoye">
					<h2>STAIRS</h2>
				</div>
				
				<div>
					<img class="image" id="image6" src="../images/galerie/photo6.jpg" alt="Photo de la villa savoye">
					<h2>BATHROOM</h2>
				</div>
				
				<div>
					<img class="image" id="image7" src="../images/galerie/photo7.jpg" alt="Photo de la villa savoye">
					<h2>INDOOR COURTYARD</h2>
				</div>
				
				<div>
					<img class="image" id="image8" src="../images/galerie/photo8.jpg" alt="Photo de la villa savoye">
					<h2>LIVING ROOM FROM THE OUTSIDE</h2>
				</div>
				
				<div>
					<img class="image" id="image9" src="../images/galerie/photo9.jpg" alt="Photo de la villa savoye">
					<h2>MODEL - LA VILLA SAVOYE</h2>
				</div>		
			</div>	
			
			
			<?php

				$pdo = new PDO('mysql:host=localhost;dbname=laVillaSavoye', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

				if(isset($_GET["id_commentarie"])){$id = $_GET["id_commentarie"] ; $pdo->exec("DELETE FROM comms WHERE id =" . $id . "");};                    

				if($_POST){
					$_POST['pseudo'] = addslashes(($_POST['pseudo']));
					$_POST['message'] = addslashes(($_POST['message']));
					
					$pdo->exec("INSERT INTO comms (pseudo, message, date_heure) VALUES ('$_POST[pseudo]', '$_POST[message]',NOW())");}
					
					$r = $pdo->query('SELECT * FROM comms ORDER BY id_commentarie DESC');
					
					while($commentarie = $r->fetch(PDO::FETCH_ASSOC)) {
						echo "<div id='zonecomm'>"."<div id='pseudo'>". $commentarie['pseudo']."</div>" . "<div id='commentaire'>". $commentarie['message']."</div>"."
						<div div='date_heure'>".$commentarie['date_heure']."</div>" . "<a id='delete' href='galerie.php?id=" . $commentarie['id_commentarie'] . "'><img src='../images/galerie/logos/croix.png' alt='croix' id='croixcomm'></a>"."</div>";
					}
					
			?>


			<form method="post">
				<input id="pseudo_" type="text" name="pseudo" placeholder="Pseudo" required>
				<input id="comm_" type="text" name="message" placeholder="Message" required></input>
				<input type="submit" value="SEND" id="send">
			</form>
			
			</main>
		<script src="../script/galerie.js"></script>
	</body>
</html>








			
			
			
			
