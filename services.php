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


<?php require './components/header-client.php'; ?>
   

</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0 ;
        padding: 0;
      
    }

    .person {
        width: 25%;
        float: left;
        padding: 40px;
        box-sizing: border-box;
        text-align: center;
    }

    .person img {
        width: 100%;
        border-radius: 50%;
    }

    h2 {
        color: #333;
    }

    p {
        color: #666;
    }
</style>
<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<div class="person">
    <img src="./images/irem.jpg" alt="Person 1">
    <h2>İrem Nur Sabır</h2>
    <p>Co-founder</p>
</div>

<div class="person">
    <img src="./images/selcin.jpg" alt="Person 2">
    <h2>Selçin Çapar</h2>
    <p>Designer</p>
</div>

<div class="person">
    <img src="./images/rabia.jpg" alt="Person 3">
    <h2>Rabia Çulhacık</h2>
    <p>Developer</p>
</div>

<div class="person">
    <img src="./images/yasemen.jpg" alt="Person 4">
    <h2>Yasameen Ali Riyadh</h2>
    <p>Marketing</p>
</div>
</body>
    <!-- Boş Sayfa Bölümü -->
    <section class="empty__page">
        <h1>Services Page</h1>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3059.784467807298!2d32.84311377648878!3d39.92383928549013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d3499c9fb54279%3A0x8fe2231aa94d6a16!2sAnkara%20Bilim%20%C3%9Cniversitesi%20Maltepe%20Kamp%C3%BCs%C3%BC!5e0!3m2!1str!2str!4v1704363784849!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    

    </section>
<!-- Boş Sayfa Bölümü sonu -->

   
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