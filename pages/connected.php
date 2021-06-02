<!DOCTYPE html>
<html lang="fr">

    <head>
    <title>Blog</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@100;300;400;600&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta charset="utf-8">
    </head>


    <?php // include('../components/Header.php'); ?>

    <body>

        <div class='form_connected'>
            <?php
                if(isset($_GET['login_err'])){
                    $error = htmlspecialchars($_GET['login_err']);
                    switch($error){
                        case 'password';
            ?>

            <div>
                <p class='errorConnection'><strong>Error</strong>, password incorrect</p>
            </div>

            <?php
                break;
                case 'email';
            ?>

            <div>
                <p class='errorConnection'><strong>Error</strong>, e-mail incorrect</p>
            </div>

            <?php
            break;
                    }
                }
            ?>

            <form action='login.php' method='post'>

                <h1>Connexion</h1>

                <input type='email' name='email' placeholder='e-mail'>

                <input type='password' name='password' placeholder='password'>

                <button type='submit' class='btn-blue'>Connect</button>

            </form>

        </div>

    </body>

</html>