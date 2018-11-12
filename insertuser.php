<?php
include "koneksi.php";

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $jabatan = $_POST['jabatan']
 
    // query insert data ke database dalam tabel
    $query = "INSERT INTO pengguna (nama, username, password, jabatan) values('$nama', '$username', '$password', '$jabatan')";
    if(mysqli_query($connect, $query)){
        header("Location: index.php");
    }else{
        echo "Tambah data gagal";
    }
}
 
mysqli_close($connect); // menutup koneksi ke database
?>
