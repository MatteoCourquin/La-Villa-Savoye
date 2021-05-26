<?php
function connected (): bool{
    if (session_status() === PHP_SESSION_NONE){
        session_start();
    }
    return empty ($_SESSION['connected']);
}

function forcing_user_connected (): void {
    if(connected()){
        header('Location: login.php');
        exit();
    }
}





?>