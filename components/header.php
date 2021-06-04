<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@100;300&display=swap" rel="stylesheet">


<!-- Header -->
<header class='light'>
	<div class='logo_darkMode'>
		<a href="../index.php"><img src="../assets/images/logos/logo.svg" alt="logo home" id='logoVilla'></a>
		<button class='btn-toggle'>☾</button>
	</div>

	<img src="../assets/images/logos/burger.png" alt="logo burger" id="burger_ico">
	
	<!-- Menu burger -->
	<ul id="menu">
		<?php
		// Si un role
		if (isset($_SESSION['role'])) {
		?>
			<!-- J'affiche la déconnexion -->
			<li><a href="../pages/logout.php"><img src='../assets/images/logos/logout.png' alt='logo user'></a></li>
		<?php } else { ?>
			<!-- Sinon J'affiche la connexion -->
			<li><a href="../pages/connected.php"><img src='../assets/images/logos/user.png' alt='logo user'></a></li>
		<?php } ?>

		<!-- Liens vers mes pages -->
		<li><a href="../pages/gallery.php">Gallery</a></li>
		<li><a href="../pages/history.php">History</a></li>
		<li><a href="../pages/blog.php">blog</a></li>
		<li><a href="../pages/contact.php">contact</a></li>

		<img src="../assets/images/logos/croix.png" alt="logo croix" id="croix">
	</ul>
</header>

<!-- CSS -->
<style>
	<?php
	include('../assets/css/style2.css');
	?>
</style>

<!-- Script -->
<script type=text/javascript>
	<?php
	include('../script/header.js');
	include('../script/mode_nuit.js');
	?>
</script>