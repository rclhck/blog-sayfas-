<?php require './components/php-header.php'; ?>

<?php if(isset($_SESSION['user'])){ ?>
<script>
    window.location='dashboard.php'
</script>
<?php } ?>

<?php
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $formUsername = $_POST['username'];
        $formPassword = $_POST['password'];

        $sql = "SELECT * FROM users WHERE _username='".$formUsername."' and _password='".$formPassword."'";
        $result = $conn->query($sql);

        if($result->num_rows == 1){
            // Kullanıcı Var
            foreach($result as $test){
                $_SESSION['user'] = $test['_id'];
            }

            ?>
            <script>
                window.location='dashboard.php';
            </script>
            <?php
                

        }else {
            // Kullanıcı Yok

            ?>
            <script>
                alert('Şifreniz Hatalı!!')
            </script>
            <?php
                
            

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

   <!-- Giriş Formu Bölümü --> 

<section class="form__section">
    <div class="container form__section-container">
        <h2>Sign In</h2>
        <div class="alert__message success">
            <p>This is an success message</p>
        </div>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Username or Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="btn">Sign In</button>
            <small>Don't have account? <a href="signup.php">Sign Up</a></small>
        </form>
    </div>
</section>
<script src="./main.js"></script>

</body>
</html>