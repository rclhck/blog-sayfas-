<?php require './components/php-header.php'; ?>
<?php require './components/isset-user.php'; ?>



<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
       
        if(isset($_POST['featured'])){
            $_is_featured = 1;
        }else{
            $_is_featured = 0;
        }

        $newTitle = htmlspecialchars($_POST['title']);
        $newBody = htmlspecialchars($_POST['body']);
        $newCategory = $_POST['category'];
        $newFeatured = $_is_featured;


        if($_FILES['file']['size'] > 0){
            
    // Dosya bilgilerini al
    $file_name = $_FILES["file"]["name"];
    $file_size = $_FILES["file"]["size"];
    $file_tmp = $_FILES["file"]["tmp_name"];
    $file_type = $_FILES["file"]["type"];
    
    // Dosya uzantısını al
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    // İzin verilen dosya uzantıları
    $allowed_extensions = array("jpg", "jpeg", "png", "gif");

    // Dosya uzantısını kontrol et
    if (in_array($file_ext, $allowed_extensions)) {
        // Dosya boyutunu kontrol et (örneğin, maksimum 2MB)
        $max_size = 2 * 1024 * 1024; // 2MB
        if ($file_size <= $max_size) {
            // Yeni dosya adı oluştur (rasgele isimlendirme örneği)
            $new_file_name = uniqid() . "." . $file_ext;

            // Dosyayı belirtilen dizine taşı
            $upload_dir = "images/"; // Bu dizini mevcut olduğundan emin olun
            $upload_path = $upload_dir . $new_file_name;

            // Dosyayı taşı
            move_uploaded_file($file_tmp, $upload_path);

            //
            $authorId = $_SESSION['user'];
            $newId = rand(10000,99999);
            $newDate = date('Y-m-d H:i:s');
            $newStatus = 1;
            $sql = "INSERT INTO post (_id, _title, _body,_thumbnail, _date_time ,_category_id, _author_id,  _status, _is_featured ) VALUES ('$newId','$newTitle', '$newBody', '$new_file_name',  '$newDate','$newCategory', '$authorId', '$newStatus','$newFeatured')";


        } else {
            echo "Hata: Dosya boyutu çok büyük. Maksimum dosya boyutu 2MB.";
        }
    } else {
        echo "Hata: Geçersiz dosya uzantısı. Sadece JPG, JPEG, PNG ve GIF dosyaları kabul edilir.";
    }
        }else {
            echo "Hata: Lütfen Dosya Eki Ekleyin";
           // $sql = "INSERT INTO post (_title, _body, _category_id, _is_featured, _thumbnail) VALUES ('$newTitle', '$newBody', $newCategory, $newFeatured, '$new_file_name')";

        }


        if ($conn->query($sql) === TRUE) { ?>
        <script>
            alert('Post Başarıyla Eklendi. Admin Onayından Sonra Sayfaya Eklenecektir.');
            window.location='dashboard.php'
        </script>
        <?php } else {
            echo "Hata: " . $conn->error;
            exit;
        }



    }
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
    <!-- Web sitesinin başlığı -->
    <link rel="stylesheet" href="./style.css">
    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- Google Font bağlantısı -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>

<body>

<?php require './components/header-client.php';


$sql = "SELECT * FROM categories";
$catesData = $conn->query($sql);

?>

    <!-- Gönderi eklemek için form bölümü -->

<section class="form__section">
    <div class="container form__section-container">
        <h2>Add Post</h2>
        <form method="post" enctype="multipart/form-data">
            <input type="text" placeholder="Title" name="title" required>
            <select name="category">
            <?php 
                foreach($catesData as $cate): ?>
                <option value="<?= $cate['_id'] ?>"><?= $cate['_title'] ?></option>
                <?php endforeach;
                ?>
            </select>
            <textarea rows="10" placeholder="Body" name="body" required></textarea>
            <div class="form__control inline">
                <input type="checkbox" id="is_featured" name="featured" checked>
                <label for="is_featured">Featured</label>
            </div>
            <div class="form__control">
                <label for="thumbnail">Add Thumbnail</label>
                <input type="file" id="thumbnail" name="file" required>
            </div>
            <button type="submit" class="btn">Add Post</button>
        </form>
    </div>
</section>



    <!-- Alt bölüm -->

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