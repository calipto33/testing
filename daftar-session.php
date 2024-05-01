<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
    $username_post = isset($_POST["username"]) ? $_POST["username"] : "";
    $password_post = isset($_POST["password"]) ? $_POST["password"] : "";

    // Cek apakah username sudah terdaftar
    $check_username_query = "SELECT * FROM tbl_daftar WHERE username = '$username_post'";
    $check_username_result = mysqli_query($conn, $check_username_query);

    if (mysqli_num_rows($check_username_result) > 0) {
        echo '<script>alert("Username yang anda masukan sudah digunakan. Harap masukan Username lainnya."); window.location.href = "halaman-daftar.php";</script>';
    } else {
        // Username belum terdaftar, lanjutkan proses pendaftaran
        if (empty($nama) || empty($username_post) || empty($password_post)) {
            echo "Harus diisi semua coy!";
        } else {
            $sql = "INSERT INTO tbl_daftar (nama, username, password) VALUES ('$nama', '$username_post', '$password_post')";

            if (mysqli_query($conn, $sql)) {
                echo '<script>alert("Pendaftaran berhasil. Silakan login."); window.location.href = "halaman-masuk.php";</script>';
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }
}

mysqli_close($conn);
?>