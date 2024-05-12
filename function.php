<?php
session_start();

$connect = mysqli_connect('localhost', 'root', '', 'toko_db');

date_default_timezone_set('Asia/Jakarta');  

// Login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    $check = mysqli_query($connect, "SELECT * FROM login WHERE username='$username' and pass='$pass'");
    $hitung = mysqli_num_rows($check);

    if ($hitung > 0) {
        $_SESSION['login'] = 'true';
        header('location:index.php');
    } else {
        echo '
            <script>
            alert("Username atau Password Salah");
            window.location.href="login.php"
            </script>
            ';
    }
}

// Data Table
$query = "SELECT 
            (SELECT COUNT(id) FROM barang) AS banyak_barang,
            (SELECT COUNT(id_kategori) FROM kategori) AS banyak_kategori,
            (SELECT SUM(stok) FROM barang) AS banyak_stok";
$result = mysqli_query($connect, $query);

if (!$result) {
    echo "Error: " . mysqli_error($connect);
    exit();
}

$row = mysqli_fetch_assoc($result);

$banyak_barang = $row['banyak_barang'];
$banyak_kategori = $row['banyak_kategori'];
$banyak_stok = $row['banyak_stok'];

// TAMBAH BARANG
if (isset($_POST['tambah_barang'])) {

    $id_barang = $_POST['id_barang'];
    $id_kategori = $_POST['id_kategori'];
    $nama_barang = $_POST['nama_barang'];
    $merk = $_POST['merk'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $stok = $_POST['stok'];


    $tambah = mysqli_query($connect, "INSERT INTO barang ( `id_barang`, `id_kategori`, `nama_barang`, `merk`, `harga_beli`, `harga_jual`, `stok`) VALUES ('$id_barang','$id_kategori','$nama_barang','$merk','$harga_beli','$harga_jual','$stok')");

    if ($tambah) {
        header('location:barang.php');
    } else {
        echo '
        <script>alert("Gagal Menambah Barang");
        window.location.href="barang.php"
        </script>
        ';
    }
}

// EDIT BARANG
if (isset($_POST['edit_barang'])) {
    $id_barang  = $_POST['id_barang'];
    $nama_barang  = $_POST['nama_barang'];
    $merk =  $_POST['merk'];
    $harga_beli  = $_POST['harga_beli'];
    $harga_jual  = $_POST['harga_jual'];
    $id =   $_POST['id'];

    $edit = mysqli_query($connect,"UPDATE barang set id_barang='$id_barang', nama_barang='$nama_barang', merk='$merk', harga_beli='$harga_beli', harga_jual='$harga_jual' WHERE id='$id'");

    if ($edit) {
        header('location:barang.php');
    } else {
        echo '
        <script>alert("Gagal Mengubah Data");
        window.location.href="barang.php"
        </script>
        ';
    }
}

// HAPUS BARANG
if (isset($_POST['hapus_barang'])) {
    $id = $_POST['id'];

    $hapus = mysqli_query($connect,"DELETE FROM `barang` WHERE id='$id' ");

    if ($hapus) {
        header('location:barang.php');
    } else {
        echo '
        <script>
        alert("Gagal!");
        window.location.href="barang.php"
        </script>
        ';
    }
}


// TAMBAH KATEGORI
if (isset($_POST['tambah_kategori'])) {

    $nama_kategori = $_POST['nama_kategori'];
    $tgl_input = $_POST['tgl_input'];


    $tambah = mysqli_query($connect, "INSERT INTO kategori ( `nama_kategori`, `tgl_input`) VALUES ('$nama_kategori','$tgl_input')");

    if ($tambah) {
        header('location:kategori.php');
    } else {
        echo '
        <script>alert("Gagal Menambah Data");
        window.location.href="kategori.php"
        </script>
        ';
    }
}

// EDIT KATEGORI
if (isset($_POST['edit_kategori'])) {
    $nama_kategori  = $_POST['nama_kategori'];
    $id =   $_POST['id'];

    $edit = mysqli_query($connect,"UPDATE kategori set nama_kategori='$nama_kategori' WHERE id_kategori='$id'");

    if ($edit) {
        header('location:kategori.php');
    } else {
        echo '
        <script>alert("Gagal Mengubah Data");
        window.location.href="kategori.php"
        </script>
        ';
    }
}

// HAPUS KATEGORI
if (isset($_POST['hapus_kategori'])) {
    $id = $_POST['id'];

    $hapus = mysqli_query($connect,"DELETE FROM `kategori` WHERE id_kategori='$id'");

    if ($hapus) {
        header('location:kategori.php');
    } else {
        echo '
        <script>
        alert("Gagal!");
        window.location.href="kategori.php"
        </script>
        ';
    }
}
?>