<?php require './components/php-header.php'; ?>
<?php require './components/isset-user.php'; ?>



<?php if(!isset($_GET['id'])){ ?>
    <script>
        window.location='manage-users.php'
    </script>
<?php } ?>


<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $userId = $_GET['id'];
        $newFirstName = $_POST['firstname'];
        $newLastName = $_POST['lastname'];
        $isAdmin = $_POST['is_admin'];

        $sql = "UPDATE users SET _firstname='$newFirstName', _lastname='$newLastName', _is_admin='$isAdmin' WHERE _id = $userId";

        if ($conn->query($sql) === TRUE){ ?>
        <script>
            alert('Kullanıcı Başarıyla Güncellendi');
            window.location='manage-users.php'
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
    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="./style.css">
    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>


<?php require './components/header-client.php';



$user_id = $_GET['id'];
$sql = "SELECT * FROM users WHERE _id = $user_id";
$result = $conn->query($sql);

foreach($result as $usersData){
    $userData = $usersData;
}


?>




<section class="form__section">
    <div class="container form__section-container">
        <h2>Edit User</h2>
        <form method="post">
            <input type="text" placeholder="First Name" name="firstname" value="<?= $userData['_firstname'] ?>" required>
            <input type="text" placeholder="Last Name" name="lastname" value="<?= $userData['_lastname'] ?>" required>
            <select name="is_admin">
                <option value="0" <?php if($userData['_is_admin'] == 0){echo "selected";} ?>>Author</option>
                <option value="1" <?php if($userData['_is_admin'] == 1){echo "selected";} ?>>Admin</option>
            </select>
            <button type="submit" class="btn">Update User</button>
        </form>
    </div>
</section>




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
<script src="./main.js"></script>

</body>
</html>