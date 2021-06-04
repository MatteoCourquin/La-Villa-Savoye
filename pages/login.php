<!-- Demarrage de session -->
<?php session_start();

// appel de ma config base de donnée
require_once 'config.php';

// fonction pour verifier si le compte existe et se connecter
if (isset($_POST['email']) && isset($_POST['password'])){
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $verify = $pdo->prepare('SELECT user, email, password, role FROM users WHERE email = ?');
    $verify->execute(array($email));
    $data = $verify->fetch();
    $row = $verify->rowCount();

    // fonction pour afficher mes erreurs dans l'URL
    if ($row > 0){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            if (md5($password) === $data['password']){
                
                $_SESSION['user'] = $data['email'];
                $_SESSION['role'] = $data['role'];
                header('Location: ../index.php');
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