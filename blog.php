<?php require './components/php-header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
    <!-- Özel Stil Dosyası -->
    <link rel="stylesheet" href="./style.css">
    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>

<body>
  <!-- Sayfa içeriği -->
  
  <?php require './components/header-client.php'; ?>

     <!-- Arama Çubuğu -->
    <section class="search__bar">
        <form class="container search__bar-container" action="search.php">
            <div>
                <i class="uil uil-search"></i>
                <input type="search" name="search" placeholder="Search">
            </div>
            <button type="submit" class="btn">Go</button>
        </form>
    </section>
    <!-- Arama Çubuğu Sonu -->

    <?php
        $sql = "SELECT * FROM categories";
        $cateSection = $conn->query($sql);

    ?>
     <!-- Kategori Butonları -->
     <section class="category__buttons">
        <div class="container category__buttons-container">
            <?php foreach($cateSection as $cates){?> 
                <a href="category.php?id=<?= $cates['_id'] ?>" class="category__button"><?= $cates['_title'] ?></a>
            <?php } ?>
        </div>
    </section>
       <!-- Kategori Butonları Sonu -->

<!-- Gönderiler -->
<!-- Gönderiler -->

<section class="posts">
    <div class="container posts__container">
         


    <?php 
    
    $sql = "SELECT * FROM post WHERE _status='1'";
    $postsData = $conn->query($sql);
    
    foreach($postsData as $post){ ?>
        <article class="post">
            <div class="post__thumbnail">
                <a href="post.php?id=<?= $post['_id']; ?>">
                <img src="./images/<?= $post['_thumbnail'] ?>">
                </a>
            </div>
            <div class="post__info">
                <?php 
                $cateId = $post['_category_id'];
                $sql = "SELECT * FROM categories WHERE _id='$cateId'";
                foreach($conn->query($sql) as $cateDetail){ ?>
                <a href="category.php?id=<?= $cateDetail['_id'] ?>" class="category__button"><?= $cateDetail['_title'] ?></a>
                <?php }
                ?>
                
                <h3 class="post__title">
                    <a href="post.php?id=<?= $post['_id'] ?>"><?= $post['_title'] ?></a>
                </h3>
                <p class="post__body">
                <?= substr($post['_body'], 0, 100); ?>
                </p>
                <?php 
                        $authorId = $post['_author_id'];
                        $sql="SELECT * FROM users WHERE _id='$authorId'";
                        foreach($conn->query($sql) as $authorDetail){
                        ?>
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="./images/<?= $authorDetail['_avatar']; ?>">
                    </div>
                    <div class="post__author-info">

                        <h5>By: <?= $authorDetail['_firstname']." ".$authorDetail['_lastname'] ?></h5>
                        
                        <small><?= $post['_date_time'] ?></small>
                    </div>
                </div>
                <?php } ?>
            </div>
        </article>


        <?php } ?>


         <!-- Diğer Gönderiler Buraya Eklenecek -->
        <!-- ... -->




    

    </section>   
 
   <!-- Blog Gönderileri sonu -->

   
    <!-- Alt Menü ve Bilgi -->
    <footer>
        <div class="footer__socials">
            <a href="https://youtube.com" target="_blank"><i class="uil uil-youtube"></i></a>
            <a href="https://facebook.com" target="_blank"><i class="uil uil-facebook-f"></i></a>
            <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram-alt"></i></a>
            <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter"></i></a>
        </div>
        <div class="container footer__container">
            <article>
                <h4>Categories</h4>
                <ul>
                    <li><a href="">Theater</a></li>
                    <li><a href="">History</a></li>
                    <li><a href="">Science Fiction</a></li>
                    <li><a href="">Romance</a></li>
                    <li><a href="">Self-Improvement</a></li>
                    <li><a href="">Psychological</a></li>
                </ul>
            </article>
            <article>
                <h4>Support</h4>
                <ul>
                    <li><a href="">Online Support</a></li>
                    <li><a href="">Call Numbers</a></li>
                    <li><a href="">Emails</a></li>
                    <li><a href="">Social Support</a></li>
                    <li><a href="">Location</a></li>
                </ul>
            </article>
            <article>
                <h4>Blog</h4>
                <ul>
                    <li><a href="">Safety</a></li>
                    <li><a href="">Repair</a></li>
                    <li><a href="">Recent</a></li>
                    <li><a href="">Popular</a></li>
                    <li><a href="">Categories</a></li>
                </ul>
            </article>
            <article>
                <h4>Permalinks</h4>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </article>
        </div>
        <div class="footer__copyright">
            <small>Copyright since2023 &copy;</small>
        </div>
    </footer>

    <script src="./main.js"></script>

</body>
</html>