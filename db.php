<?php 
    $db_novel = mysqli_connect('localhost', 'root', '', 'db_novel'); 
    if (!$db_novel) {
        die("koneksi gagal: " . mysqli_connect_error());
    }
?>