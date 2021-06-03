<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@100;300&display=swap" rel="stylesheet">

<header>
	<a href="../index.php"><img src="../assets/images/logos/logo.svg" alt="logo home" id='logoVilla'></a>

	<img src="../assets/images/logos/burger.png" alt="logo burger" id="burger_ico">
		
	<ul id="menu">
		<?php
		if (isset($_SESSION['role'])){
			?>
			<li><a href="../pages/disconnect.php"><img src='../assets/images/logos/logout.png' alt='logo user'></a></li>
			<?php } else{ ?>
				<li><a href="../pages/connected.php"><img src='../assets/images/logos/user.png' alt='logo user'></a></li>
		<?php } ?>
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