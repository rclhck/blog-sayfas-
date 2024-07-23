<?php require './components/php-header.php'; ?>

<?php if(isset($_SESSION['user'])){ ?>
<script>
    window.location='dashboard.php'
</script>
<?php } ?>



<?php if($_SERVER['REQUEST_METHOD'] == "POST"){ 
    
    if($_POST['pass1'] != $_POST['pass2']){ ?>
    <script>
        alert('Hata: Girilen parolalar eşleşmiyor.');
        window.location="signup.php"
    </script>
    <?php }else{
        
                   
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

            $newId = rand(10000,99999);
            $newFirstName = $_POST['firstname'];
            $newLastName = $_POST['lastname'];
            $newUserName = $_POST['username'];
            $newEmail = $_POST['email'];
            $newPass = $_POST['pass1'];
            $newAvatar = $new_file_name;
            $newAdmin = 0;

            $sql = "INSERT INTO users (_id,_firstname,_lastname,_username,_email,_password,_avatar,_is_admin) VALUES ('$newId','$newFirstName','$newLastName','$newUserName','$newEmail','$newPass','$newAvatar','$newAdmin')";

            if ($conn->query($sql) === TRUE) { 
                $_SESSION['user'] = $newId;
                ?>
                <script>
                    alert('Başarı ile kayıt oldunuz.');

                    window.location='dashboard.php'
                </script>
                <?php } else {
                    echo "Hata: " . $conn->error;
                    exit;
                }

        } else {
            echo "Hata: Dosya boyutu çok büyük. Maksimum dosya boyutu 2MB.";
        }
    } else {
        echo "Hata: Geçersiz dosya uzantısı. Sadece JPG, JPEG, PNG ve GIF dosyaları kabul edilir.";
    }

    }

    ?> 
    


<?php } ?>




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

  
</head>
<body>

<!-- Kayıt Formu Bölümü -->
<section class="form__section">
    <div class="container form__section-container">
        <h2>Sign Up</h2>
        <!-- Hata mesajı için bildirim -->
        <div class="alert__message error">
            <p>This is an error message</p>
        </div>

        <!-- Kayıt formu -->
        <form method="post" enctype="multipart/form-data">
            <input type="text" placeholder="First Name" name="firstname" required>
            <input type="text" placeholder="Last Name" name="lastname" required>
            <input type="text" placeholder="Username" name="username" required>
            <input type="email" placeholder="Email" name="email" required>
            <input type="password" placeholder="Create Password" name="pass1" required>
            <input type="password" placeholder="Confirm Password" name="pass2" required>
            <div class="form__control">
                <label for="avatar">User Avatar</label>
                <input type="file" id="avatar" name="file" required>
            </div>
            <button type="submit" class="btn">Sign Up</button>
            <small>Already have an account? <a href="signin.php">Sign In</a></small>
        </form>
    </div>
</section>
<!-- Kayıt Formu Bölümü sonu -->
<script src="./main.js"></script>
</body>
</html>