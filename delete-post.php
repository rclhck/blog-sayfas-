<?php
    
    require './components/php-header.php';


    if(isset($_GET['id'])){

    $delete_id = $_GET['id'];
    $sql_delete = "DELETE FROM post WHERE _id = $delete_id";

    if ($conn->query($sql_delete) === TRUE) { ?>

    <script>
        window.location='dashboard.php'
    </script>

    <?php } else {
        echo "Hata: " . $conn->error;
    }


    }else { ?>
    <script>
        window.location='dashboard.php'
    </script>
   <?php }