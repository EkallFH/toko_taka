<?php
    session_start();

    $connect = mysqli_connect('localhost', 'root', '', 'toko_db');

    // Login
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $pass = $_POST['pass'];

        $check = mysqli_query($connect, "SELECT * FROM login WHERE username='$username' and pass='$pass'");
        $hitung = mysqli_num_rows($check);

        if($hitung > 0){
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
?>