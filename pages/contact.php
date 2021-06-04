<!-- Demarrage de session -->
<?php session_start(); ?>

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

	<body class='light'>

		<header>
			<!-- Header -->
			<?php include('../components/Header.php');?>
		</header>

		<!-- Zone contact -->
		<section id="zoneContact">

			<form id="form_contact" class='light'>

				<h1>CONTACT US</h1>

				<div id="sous_form">

					<div class='champs_contact'>
						<label class="label">Your name :</label>
						<input class="champs sous_champs" id="name" type="text" placeholder="Name">
					</div>
					<p id="zone_verif_1" class="verif"></p>

					<div class='champs_contact'>
						<label class="label">Age :</label>
						<input class="champs sous_champs" id="age" type="number" placeholder="Age">
					</div>
					<p id="zone_verif_2" class="verif"></p>

					<div class='champs_contact'>
						<label class="label">Mail :</label>
						<input class="champs sous_champs" id="email" type="text" placeholder="E-Mail">
					</div>
					<p id="zone_verif_3" class="verif"></p>

					<div class='champs_contact'>
						<label class="label">Phone number :</label>
						<input class="champs sous_champs" id="phone" type="text" placeholder="Phone Number">
					</div>
					<p id="zone_verif_4" class="verif"></p>

					<div class='champs_contact'>
						<label class="label">Message :</label>
						<textarea class="champs sous_champs" id="message" type="text" placeholder="Message"></textarea>
					</div>

				</div>
				
				<button class="btn-blue" id="submit">Send</button>
				
			</form>
			
		</section>

		<!-- script -->
		<script type="text/javascript" src="../script/contact.js"></script>
	</body>
</html> 