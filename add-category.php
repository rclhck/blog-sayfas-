<?php require './components/php-header.php'; ?>
<?php require './components/isset-user.php'; ?>

<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $newId = rand(10000,99999);
        $newTitle = $_POST['title'];
        $newDesc = $_POST['description'];

        $sql = "INSERT INTO categories (_id,_title,_description) VALUES ('$newId', '$newTitle', '$newDesc')";
        
        if($conn->query($sql) === TRUE){
            // success
            ?>
            <script>
                alert('Kategori Başarıyla Eklendi');
                window.location='manage-categories.php'
            </script>
            <?php
        }else { ?>
            <script>
                alert('Bir Sorun Oluştu Lütfen Tekrar Deneyin');
            </script>
        <?php }

    }?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
     <!-- Özel stil sayfası bağlantısı -->
    <link rel="stylesheet" href="./style.css">
    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
     <!-- Google Font bağlantısı -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
    
<?php require './components/header-client.php'; ?>


    <!-- Kategori eklemek için form bölümü -->

<section class="form__section">
    <div class="container form__section-container">
        <h2>Add Category</h2>
        <!-- Hata mesajının bir örneği -->
        <div class="alert__message error">
            <p>This is an error message</p>
        </div>
        <form action="" method="post">
            <input type="text" placeholder="Title" name="title" required>
            <textarea rows="4" placeholder="Description" name="description" required></textarea>
            <button type="submit" class="btn">Add Category</button>
        </form>
    </div>
</section>


<!-- Alt bölüm -->

<footer>
    <!-- Sosyal medya simgeleri ve bağlantıları -->
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

<script src="./main.js"></script>
</body>
</html>