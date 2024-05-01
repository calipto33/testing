<?php
session_start();

$servername = "localhost";
$username_db = "id21620734_kelompoksatu";
$password_db = "kelompok1.PBW";
$dbname = "id21620734_barber_shop";

$conn = new mysqli($servername, $username_db, $password_db, $dbname);

if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username_post = isset($_POST["username"]) ? $_POST["username"] : "";
    $password_post = isset($_POST["password"]) ? $_POST["password"] : "";

    if (empty($username_post) || empty($password_post)) {
        echo '<script>alert("Harap masukkan username dan password."); window.location.href = "halaman-masuk.php";</script>';
    } else {

        $sql = "SELECT * FROM tbl_daftar WHERE username = '$username_post' AND password = '$password_post'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['username'] = $row['username'];
            $_SESSION['nama'] = $row['nama'];
            header("Location: index.php");
            exit();
        } else {
            echo '<script>alert("Harap Masukan Username dan Password dengan benar."); window.location.href = "halaman-masuk.php";</script>';
        }
    }
}

$conn->close();
?>
