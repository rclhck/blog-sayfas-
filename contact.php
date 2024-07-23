<?php require './components/php-header.php'; ?>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $formId = rand(10000,99999);
        $formName = $_POST['name'];
        $formEmail = $_POST['email'];
        $formMessage = $_POST['message'];


        $sql = "INSERT INTO contact (_id,_name,_email, _message) VALUES ('$formId', '$formName', '$formEmail', '$formMessage')";
        if ($conn->query($sql) === TRUE) { ?>
        <script>
            alert('Kayıt Başarıyla Eklendi');
        </script>
        <?php } else { ?>
            <script>
                alert('Bir Sorun Oluştu Veri Eklenemedi')
            </script>
        <?php }

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="./style.css">
    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>


<?php require './components/header-client.php'; ?>



    <!-- İLETİŞİM SAYFASI -->

    <section class="empty__page">
        <h1>Contact Page</h1>
    
    <div class="container">
        <form method="post">
            <h2>Bize Ulaşın</h2>
            <label for="name">Adınız:</label>
            <input type="text" id="name" name="name" required>
    
            <label for="email">E-posta Adresiniz:</label>
            <input type="email" id="email" name="email" required>
    
            <label for="message">Mesajınız:</label>
            <textarea id="message" name="message" required></textarea>
    
            <button type="submit">Gönder</button>
        </form>
    </div>
    

    </section>


    <!-- İLETİŞİM SAYFASI SONU-->

    

    <!-- ALT BİLGİ -->

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
            <small>Copyright since2023&copy;</small>
        </div>
    </footer>
    <!--====================== FOOTER SONU====================-->

    <script src="./main.js"></script>
</body>
</html>