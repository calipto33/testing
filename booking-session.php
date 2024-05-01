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

// Proses data formulir pemesanan
// Dapatkan username dari sesi
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    // Proses data formulir pemesanan
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Sanitasi dan validasi input
        $nama_lengkap = isset($_POST["nama_lengkap"]) ? $_POST["nama_lengkap"] : "";
        $tanggal = isset($_POST["tanggal"]) ? $_POST["tanggal"] : "";
        $staff = isset($_POST["staff"]) ? $_POST["staff"] : "";
        $jam = isset($_POST["jam"]) ? $_POST["jam"] : "";

        // Masukkan data pemesanan ke dalam database menggunakan prepared statement
        $sql = "INSERT INTO tbl_booking (username, nama_lengkap, tanggal, staff, jam) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $username, $nama_lengkap, $tanggal, $staff, $jam);

        if ($stmt->execute()) {
            echo '<script>alert("pemesanan Berhasil."); window.location.href = "index.php";</script>';
        } else {
            echo "Error dalam pemesanan: " . $stmt->error;
        }

        // Tutup statement
        $stmt->close();
    }

    // Tutup koneksi database
    $conn->close();
} else {
    echo '<script>alert("Harap daftar atau masuk akun terlebih dahulu."); window.location.href = "halaman-masuk.php";</script>';
}

?>
