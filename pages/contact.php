<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Contact</title>
		<link rel="stylesheet" type="text/css" href="style/contact.css">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta charset="utf-8">
	</head>

	<body>

		<?php		
		include('../header/header.php');
		?>

		<section>
			
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

		<footer id="logos">
			<a href="https://www.facebook.com/VillaSavoyeOfficiel" target="_blank"><img src="logos/facebook.png" alt="logo facebook"></a>
			<a href="https://www.instagram.com/explore/locations/228788259/villa-savoye/" target="_blank"><img src="logos/instagram.png" alt="logo instagram"></a>
			<a href="https://goo.gl/maps/NHNkr6udSajSA6Yj9" target="_blank"><img src="logos/loca.png" alt="logo map"></a>
			<a href="mailto:matteo.courquin@edu.devinci.fr" ><img src="logos/mail.png" alt="logo mail"></a>
			<a href="tel:+33652647110"><img src="logos/telephone.png" alt="logo telephone"></a>
		</footer>
		<script type="text/javascript" src="script/contact.js"></script>
	</body>
</html> 
