<?php
include '../../config.php';
    
    $id = $_POST['IDbuku'];
    $peminjaman = $_POST['tgl_peminjaman'];   
    $pengembalian = $_POST['tgl_pengembalian'];
    $status = $_POST['status'];
    
    
    mysqli_query($conn,"INSERT INTO peminjaman (IDbuku, tgl_peminjaman, tgl_pengembalian, status) 
        values('$id','$peminjaman','$pengembalian','$status')");
    
    header("location:../buku.php");

?>