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


<?php require './components/header-client.php'; 

if(!isset($_GET['id'])){ ?>
<script>
    window.location='index.php';
</script>
<?php }

$postId = $_GET['id'];
$sql = "SELECT * FROM post WHERE _id='$postId'";
foreach($conn->query($sql) as $postsData){
    $postData = $postsData;
}

?>



    <!-- Tek Gönderi Bölümü -->
    <section class="singlepost">
        <div class="container singlepost__container">
            <h2><?= $postData['_title'] ?></h2>
             <!-- Gönderi Yazar Bilgisi -->
             <?php 
             $authorId = $postData['_author_id'];
             $sql = "SELECT * FROM users WHERE _id='$authorId'";
             foreach($conn->query($sql) as $authorData){
             ?>
            <div class="post__author">
                <div class="post__author-avatar">
                    <img src="./images/<?= $authorData['_avatar'] ?>">
                </div>
                <div class="post__author-info">
                    <h5>By: <?= $authorData['_firstname']." ".$authorData['_lastname'] ?></h5>
                    <small><?= $postData['_date_time'] ?></small>
                </div>
            </div>
            <?php } ?>
            <!-- Gönderi Görseli -->
            <div class="singlepost__thumbnail">
                <img src="./images/<?= $postData['_thumbnail'] ?>">
            </div>
                <!-- Gönderi İçeriği -->
            <p>
            <?= $postData['_body'] ?>
            </p>
        </div>
    </section>
    <!-- Tek Gönderi Bölümü sonu -->




    <!-- Alt Menü ve Bilgi -->

    <footer>
        <!-- Sosyal Medya Bağlantıları -->
        <div class="footer__socials">
            <a href="https://youtube.com" target="_blank"><i class="uil uil-youtube"></i></a>
            <a href="https://facebook.com" target="_blank"><i class="uil uil-facebook-f"></i></a>
            <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram-alt"></i></a>
            <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter"></i></a>
        </div>

        <!-- Kategoriler, Destek, Blog, Kalıcı Bağlantılar -->
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