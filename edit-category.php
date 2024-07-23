<?php require './components/php-header.php'; ?>
<?php require './components/isset-user.php'; ?>

<?php if(!isset($_GET['id'])){ ?>
    <script>
        window.location='manage-categories.php'
    </script>
<?php } ?>


<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $cateId = $_GET['id'];
        $newTitle = $_POST['title'];
        $newDesc = $_POST['description'];

        $sql = "UPDATE categories SET _title='$newTitle', _description='$newDesc' WHERE _id = $cateId";

        if ($conn->query($sql) === TRUE){ ?>
        <script>
            alert('Kategori Başarıyla Güncellendi');
            window.location='manage-categories.php'
        </script>
        <?php }else { ?>
            <script>
            alert('Bir Sorun Oluştu Kategori Güncellenemedi');
        </script>
        <?php  }

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
     <!-- ÖZEL STİL DOSYASI -->
    <link rel="stylesheet" href="./style.css">
    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>



<?php require './components/header-client.php'; 


$cate_id = $_GET['id'];
$sql = "SELECT * FROM categories WHERE _id = $cate_id";
$result = $conn->query($sql);

foreach($result as $catesData){
    $cateData = $catesData;
}

?>
       <!-- Kategori Düzenleme Formu -->

<section class="form__section">
    <div class="container form__section-container">
        <h2>Edit Category</h2>
        <form action="" method="post">
            <input type="text" placeholder="Title" name="title" value="<?= $cateData['_title'] ?>" required>
            <textarea rows="4" placeholder="Description" name="description" required><?= $cateData['_description'] ?></textarea>
            <button type="submit" class="btn">Update Category</button>
        </form>
    </div>
</section>

<!-- Kategori Düzenleme Formu Bitişi-->



 <!-- Sayfa Alt Bilgisi (Footer) -->
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

    <!-- Telif hakkı bilgisi -->
    
    <div class="footer__copyright">
        <small>Copyright since2023&copy;</small>
    </div>
</footer>

<script src="./main.js"></script>
</body>
</html>