<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@100;300&display=swap" rel="stylesheet">

<header>
	<a href="../index.php"><img src="../images/header/logo.svg" alt="logo home"></a>

	<img src="../images/header/burger.png" alt="logo burger" id="burger_ico">
		
	<ul id="menu">


	<?php
	require './log.php';
			forcing_user_connected();
		
			$error = null;
			if(!empty($_POST['pseudo']) && !empty($_POST['password'])) {
				if ($_POST['pseudo'] === 'Matteo' && $_POST['password'] === '0000') {
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
				<input type="text" name="pseudo" placeholder="User">    
			</div>
			<div class="form-group">
				<input type="password" name="password" placeholder="Password">    
			</div>
			<button type="submit">Connected</button>
		</form>



		<li><a href="../pages/galerie.php">Gallery</a></li>
		<li><a href="../pages/histoire.php">History</a></li>
		<li><a href="../pages/blog.php">blog</a></li>
		<li><a href="../pages/contact.php">contact</a></li>
		
		<img src="../images/header/croix.png" alt="logo croix" id="croix">
	</ul>
</header>

<style><?php
	include('header.css');
?></style>

<script src="https://kit.fontawesome.com/cfb7fb459f.js" crossorigin="anonymous"></script>

<script type=text/javascript><?php
	include('header.js');
?></script>