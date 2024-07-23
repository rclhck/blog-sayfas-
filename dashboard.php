<?php require './components/php-header.php'; ?>
<?php require './components/isset-user.php'; ?>


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



<?php require './components/header-client.php'; ?>



      <!-- DASHBOARD BÖLÜMÜ -->

<section class="dashboard">
    <div class="container dashboard__container">
        <button id="show_sidebar-btn" class="sidebar_toggle"><i class="uil uil-angle-right-b"></i></button>
        <button id="hide_sidebar-btn" class="sidebar_toggle"><i class="uil uil-angle-left-b"></i></button>
        <aside>
            <ul>
                <li>
                    <a href="add-post.php"><i class="uil uil-pen"></i>
                        <h5>Add Post</h5>
                    </a>
                </li>
                <li>
                    <a href="dashboard.php" class="active"><i class="uil uil-postcard"></i>
                        <h5>Manage Posts</h5>
                    </a>
                </li>
                <li>
                    <a href="manage-users.php"><i class="uil uil-users-alt"></i>
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


        <?php
            $author_id = $_SESSION['user'];
            $sql = "SELECT * FROM post WHERE _author_id = $author_id";
            $result = $conn->query($sql);
        ?>


        <main>
            <h2>Manage Posts</h2>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php if($result->num_rows > 0): 
                    
                    foreach($result as $posts):
                    ?>
                        <tr>
                        <td><?= $posts['_title'] ?></td>

                        <?php 
                        $cate_id = $posts['_category_id'];
                        $sql = "SELECT * FROM post WHERE _id = $cate_id";
                        $resultCate = $conn->query($sql);
                        ?>

                        <td><?php foreach($resultCate as $cateForeach){echo $cateForeach['_title'];} ?></td>
                        <td><a href="edit-post.php?id=<?= $posts['_id'] ?>" class="btn sm">Edit</a></td>
                        <td><a href="delete-post.php?id=<?= $posts['_id'] ?>" class="btn sm danger">Delete</a></td>
                    </tr>

                <?php 
                endforeach;
                else: ?>

                    <tr>
                        <td>Size Ait Post Bulunamadı</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                <?php endif; ?>    

                </tbody>
            </table>
        </main>
    </div>

</section>

<!--====================== DASHBOARD BÖLÜMÜ SONU ====================-->



<!--====================== ALT BİLGİ ====================-->
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