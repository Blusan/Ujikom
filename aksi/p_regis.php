<?php
include '../config.php';
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $namalengkap = $_POST['namalengkap'];   
    $alamat = $_POST['alamat'];
    $level = $_POST['level'];
    
    mysqli_query($conn,"INSERT INTO users (username, email, password, namalengkap, alamat, level) 
        values('$username','$email','$password','$namalengkap','$alamat','$level')");
    
    header("location:../index.php");

?>