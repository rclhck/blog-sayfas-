<?php require './components/php-header.php'; ?>
<?php require './components/isset-user.php'; ?>

<?php if(!isset($_GET['id'])){ ?>
    <script>
        window.location='dashboard.php'
    </script>
<?php } ?>


<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $postId = $_GET['id'];
       
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
            $sql = "UPDATE post SET _title='$newTitle', _body='$newBody', _category_id='$newCategory', _is_featured='$newFeatured', _thumbnail='$new_file_name' WHERE _id = $postId";

        } else {
            echo "Hata: Dosya boyutu çok büyük. Maksimum dosya boyutu 2MB.";
        }
    } else {
        echo "Hata: Geçersiz dosya uzantısı. Sadece JPG, JPEG, PNG ve GIF dosyaları kabul edilir.";
    }
        }else {

            $sql = "UPDATE post SET _title='$newTitle', _body='$newBody', _category_id='$newCategory', _is_featured='$newFeatured' WHERE _id = $postId";
        }


        if ($conn->query($sql) === TRUE) { ?>
        <script>
            alert('Post Başarıyla Güncellendi');
            window.location='dashboard.php'
        </script>
        <?php } else { ?>
            <script>
            alert('Bir Sorun Oluştu Post Güncellenemedi.');

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



<?php 
require './components/header-client.php'; 

$post_id = $_GET['id'];
$sql = "SELECT * FROM post WHERE _id = $post_id";
$result = $conn->query($sql);

foreach($result as $postsData){
    $postData = $postsData;
}


$sql = "SELECT * FROM categories";
$catesData = $conn->query($sql);


?>
<section class="form__section">
    <div class="container form__section-container">
        <h2>Edit Post</h2>
        <form method="POST" enctype="multipart/form-data">
            <input name="title" type="text" placeholder="Title" value="<?= $postData['_title'] ?>" required>
            <select name="category">
                <?php 
                foreach($catesData as $cate): ?>
                <option value="<?= $cate['_id'] ?>" <?php if($postData['_category_id'] == $cate['_id']){echo "selected";} ?>><?= $cate['_title'] ?></option>
                <?php endforeach;
                ?>
            </select>
            <textarea name="body" rows="10" placeholder="Body" required><?= $postData['_body'] ?></textarea>
            <div class="form__control inline">
                <input name="featured" type="checkbox" id="is_featured" <?php if($postData['_is_featured'] == 1){echo "checked";} ?>>
                <label for="is_featured">Featured</label>
            </div>
            <div class="form__control">
                <label for="thumbnail">Change Thumbnail</label>
                <input name="file" type="file" id="thumbnail">
            </div>
            <button type="submit" class="btn">Update Post</button>
        </form>
    </div>
</section>




<footer>
    <div class="footer__socials">
        <a href="https://youtube.com target="_blank"><i class="uil uil-youtube"></i></a>
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