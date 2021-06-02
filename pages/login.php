<?php

    if (!empty($_POST['id_user']) && !empty($_POST['password'])){
        if ($_POST['id_user'] === 'user' && $_POST['motdepasse' === '0000']){
            session_start();
            $_SESSION['connected'] = 1;
            // header('Location: ./gallery.php');
            exit();
        } else{
            $erreur = 'Id incorrect';
        }
    }

    include('../components/header.php');
?>

<?php if ($erreur){
    echo 'id incorrect';
}

?>

<form action='' method='post' id='connexion'>

    <div>
        <input type='text' name='idUser' placeholder='Id'>
    </div>

    <div>
        <input type='password' name='password' placeholder='Password'>
    </div>

    <input type='submit'>

</form>

<style><?php
	include('../assets/css/style2.css');
?></style>