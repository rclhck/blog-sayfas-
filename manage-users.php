<?php require './components/php-header.php'; ?>
<?php require './components/isset-user.php'; ?>

<?php
    $userId = $_SESSION['user'];
    $sql = "SELECT * FROM users WHERE _id='$userId'";

    foreach($conn->query($sql) as $userData){
        if($userData['_is_admin'] == 1){
            $isAdmin = true;
        }else{
            $isAdmin = false;
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


<?php require './components/header-client.php'; 



$sql = "SELECT * FROM users";
$result = $conn->query($sql);


?>



 <!-- Yönetim Paneli İçeriği -->
<section class="dashboard">
    <div class="container dashboard__container">
        <button id="show_sidebar-btn" class="sidebar_toggle"><i class="uil uil-angle-right-b"></i></button>
        <button id="hide_sidebar-btn" class="sidebar_toggle"><i class="uil uil-angle-left-b"></i></button>
        <!-- Yan Menü -->
        <aside>
            <ul>
                <li>
                    <a href="add-post.php"><i class="uil uil-pen"></i>
                        <h5>Add Post</h5>
                    </a>
                </li>
                <li>
                    <a href="dashboard.php"><i class="uil uil-postcard"></i>
                        <h5>Manage Posts</h5>
                    </a>
                </li>
                <li>
                    <a href="manage-users.php" class="active"><i class="uil uil-users-alt"></i>
                        <h5>Manage User</h5>
                    </a>
                </li>
                <li>
                    <a href="add-category.php"><i class="uil uil-edit"></i>
                        <h5>Add Category</h5>
                    </a>
                </li>
                <li>
                    <a href="manage-categories.php"><i class="uil uil-list-ul"></i>
                        <h5>Manage Categories</h5>
                    </a>
                </li>
            </ul>
        </aside>
        <!-- Ana İçerik -->

        <main>
            <h2>Manage Users</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Admin</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    if($isAdmin){ 
                        foreach($result as $usersData){
                        ?>
                    <tr>
                        <td><?= $usersData['_firstname']." ".$usersData['_lastname']  ?></td>
                        <td><?= $usersData['_username'] ?></td>
                        <td><a href="edit-user.php?id=<?= $usersData['_id'] ?>" class="btn sm">Edit</a></td>
                        <?php 
                        if($usersData['_id'] != $_SESSION['user']){ ?>
                        <td><a href="delete-user.php?id=<?= $usersData['_id'] ?>" class="btn sm danger">Delete</a></td>
                        <?php }else{ ?>
                            <td></td>
                        <?php }
                        ?>
                        <td><?php 
                        if($usersData['_is_admin'] == 1){
                            echo "Yes";
                        }else{
                            echo "No";
                        }
                        ?></td>
                    </tr>
                    <?php
                        }
                }else{ ?>
                        <td>Bu Bölüm Sadece Admin Yetkisine Sahip Kullanıcılar İçindir</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    <?php }
                    ?>
                </tbody>
            </table>
        </main>
    </div>
</section>

<!-- Yönetim Paneli İçeriği sonu -->



<!-- Alt Menü ve Bilgi -->
<footer>
    <div class="footer__socials">
        <a href="https://youtube.com/egatortutorials" target="_blank"><i class="uil uil-youtube"></i></a>
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