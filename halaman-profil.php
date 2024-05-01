<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: halaman-masuk.php");
    exit();
}

$nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : "";
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>4D Hairstylish - Profil</title>
    <link rel="icon" href="media/icon-tittle.png" />
    <link rel="stylesheet" href="style-css/style-profil.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

</head>
<body>
    <div class="container">
    <a href="index.php" id="btnKembali"><button><i class="fas fa-arrow-left"></i> Kembali</button></a>
        <br><br>
      <img id="logo" src="media/icon-tittle.png" alt="Logo" />
        <h2>PROFIL</h2>
        <h4>Nama: <?php echo $nama; ?></h4>
        <h4>Username: <?php echo $username; ?></h4>
        <button onclick="location.href='halaman-ubah-profil.php'">Ubah Profil</button>
    </div>
</body>
</html>
