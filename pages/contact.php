<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Contact</title>
		<link rel="stylesheet" type="text/css" href="../style/contact.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Exo:wght@100;300;400;600&display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta charset="utf-8">
	</head>

	<body>

		<?php		
		include('../header/header.php');
		?>

		<section id="zoneContact">
			
			<div class="champs">
			<label>Last name and first name :</label>
			<input type="text" placeholder="Prenom Nom" id="nom">
			</div>
			<p id="zone_verif_1" class="verif"></p>

			<div class="champs">
			<label>Age :</label>
			<input type="number" placeholder="Age" id="age">
			</div>
			<p id="zone_verif_2" class="verif"></p>

			<div class="champs">
			<label>E-mail :</label>
			<input type="email" placeholder="E-mail" id="email">
			</div>
			<p id="zone_verif_3" class="verif"></p>

			<div class="champs">
			<label>Phone number :</label>
			<input type="text" placeholder="00 00 00 00 00" id="telephone">
			</div>
			<p id="zone_verif_4" class="verif"></p>
    			
    		<button id="bouton">Send</button>

		</section>
		<script type="text/javascript" src="../script/contact.js"></script>
	</body>
</html> 
