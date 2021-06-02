<?php
session_start();
require_once 'config.php';

if (isset($_POST['email']) && isset($_POST['password'])){
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $verify = $db->prepare('SELECT user, email, password, role FROM users WHERE email = ?');
    $verify->execute(array($email));
    $data = $verify->fetch();
    $row = $verify->rowCount();

    if ($row > 0){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            if (md5($password) === $data['password']){
                
                $_SESSION['user'] = $data['email'];
                $_SESSION['role'] = $data['email'];
                header('Location: ./blog.php');
            }else{
                header('Location: login.php?login_err=password');
            }
        }else{
            header('Location: login.php?login_err=email');
        }
    }else{
        header('Location: login.php?login_err=already');
        die();
    }
} 
?>