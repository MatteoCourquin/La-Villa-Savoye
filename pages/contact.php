<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Contact</title>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link rel="stylesheet" type="text/css" href="../assets/css/style2.css">
		<link href="https://fonts.googleapis.com/css2?family=Exo:wght@100;300;400;600&display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta charset="utf-8">
	</head>

	<body>

		<?php		
		include('../components/header.php');
		?>

		<div id="zone_verif">
			<p id="zone_verif_1" class="verif"></p>
			<p id="zone_verif_2" class="verif"></p>
			<p id="zone_verif_3" class="verif"></p>
			<p id="zone_verif_4" class="verif"></p>
		</div>

		<section id="zoneContact">

			<form id="form_contact">

				<h1>CONTACT US</h1>

				<div id="sous_form">
					<div>
						<div class="champs">
							<label class="label">Your name :</label>
							<input id="nom" type="text" placeholder="Name" class="sous_champ" required>
						</div>

						<div class="champs">
							<label class="label">Age :</label>
							<input id="age" type="number" placeholder="Age" class="sous_champ" required>
						</div>

						<div class="champs">
							<label class="label">Mail :</label>
							<input id="email" type="text" placeholder="E-Mail" class="sous_champ" required>
						</div>

						<div class="champs">
							<label class="label">Phone number :</label>
							<input id="phone" type="text" placeholder="Phone Number" class="sous_champ" required>
						</div>
					</div>

					<div>
						<div class="champs">
							<label class="label">Message :</label>
							<textarea id="message" type="text" placeholder="Message" class="sous_champ"></textarea>
						</div>
					</div>

				</div>
				
				<button id="submit">Send</button>
				
			</form>
			
		</section>

		<script type="text/javascript" src="../script/contact.js"></script>
	</body>
</html> 
