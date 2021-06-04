<?php session_start(); ?>

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


<body class='light'>

  <?php include('../components/header.php'); ?>
  
  <div>
  <article id="zone_article">
      <?php include('../components/Articles.php'); ?>
                  
      <?php

      $db = new PDO('mysql:host=localhost;dbname=laVillaSavoye', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
      
      if (isset($_POST['title'], $_POST['content']) && !empty($_POST['title']) && !empty($_POST['content']) && $_FILES["image"]["error"] === 0) {
        
        $title = htmlspecialchars(addslashes($_POST['title']));
        $img = "../assets/images/upload/" . $_FILES["image"]["name"];
        $content = htmlspecialchars(addslashes($_POST['content']));
        
        $tmp_name = $_FILES["image"]["tmp_name"];
        move_uploaded_file($tmp_name, $img);
        
        $sql = "INSERT INTO article (title, image, content) VALUES ('$title', '$img', '$content')";
        $db->exec($sql);
      }
                    
      $r = $db->query('SELECT * FROM article');

      while ($article = $r->fetch(PDO::FETCH_ASSOC)) {
      ?>
        <div class='articles'>
          <div id='article<?php echo $article['id_article']; ?>' class='article'>
            <img  src='<?php echo $article['image']; ?>'>
            <h1> <?php echo $article['title']; ?> </h1>
            <p class='texte_article' id='texte_article<?php echo $article['id_article']; ?>'> <?php echo $article['content']; ?> </p>
          </div>
          <button id="more<?php echo $article['id_article'];?>" class="more btn-blue">view more</button>
          <button id="less<?php echo $article['id_article'];?>" class="less btn-blue">view less</button>
        </div>
      <?php } ?>
    </article>

    <?php 
      if (isset($_SESSION['role']) && $_SESSION['role'] === 'ADMIN'){
        ?>

        <div id='zone_crearticle'>
          <form method='POST' action='' id='crearticle' enctype='multipart/form-data'>
            <div class='title'>
              <h1>Title :</h1>
              <input type='text' name='title' class='champs title' placeholder='Title' required>
            </div>

            <div id='image'>
              <h1>Image :</h1>
              <input type='file' name='image' value='' required>
            </div>

            <div class='content'>
              <h1>Content :</h1>
              <textarea name='content' placeholder='Article' class='champs content' required></textarea>
            </div>

            <input type='submit' name='submit' value='publish' id='submit_article' class='btn-blue'>
          </form>
        </div>
      <?php }
      
      
      
      ?>
    

    

  </div>

  <script type="text/javascript" src="../script/blog.js"></script>
</body>

</html>