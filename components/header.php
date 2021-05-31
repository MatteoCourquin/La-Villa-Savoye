<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@100;300&display=swap" rel="stylesheet">

<header>
	<a href="../index.php"><img src="../assets/images/logos/logo.svg" alt="logo home"></a>

	<img src="../assets/images/logos/burger.png" alt="logo burger" id="burger_ico">
		
	<ul id="menu">

		<li>
			<?php
				$error = null;
				if(!empty($_POST['id']) && !empty($_POST['password'])) {
					if ($_POST['id'] === 'Matteo' && $_POST['password'] === '0000') {
						session_start();
						$_SESSION['connected'] = 1;
						header('Location: ./galerie.php');
						// Conexion
					} else {
						$error = 'error';
						// Return error
					}
				}
			?>

			<?php if ($error) { ?>
				<p>erreur</p>
			<?php } ?>

			<form action="" method="post">
				<div class="form-group">
					<input type="text" name="id" placeholder="User">    
				</div>
				<div class="form-group">
					<input type="password" name="password" placeholder="Password">    
				</div>
				<button type="submit">Connected</button>
			</form></li>



		<li><a href="../pages/gallery.php">Gallery</a></li>
		<li><a href="../pages/history.php">History</a></li>
		<li><a href="../pages/blog.php">blog</a></li>
		<li><a href="../pages/contact.php">contact</a></li>
		
		<img src="../assets/images/logos/croix.png" alt="logo croix" id="croix">
	</ul>
</header>

<style><?php
	include('../assets/css/header.css');
?></style>

<script src="https://kit.fontawesome.com/cfb7fb459f.js" crossorigin="anonymous"></script>

<script type=text/javascript><?php
	include('../script/header.js');
?></script>