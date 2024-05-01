<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>4D Hairstylish - Ubah Profil</title>
    <link rel="icon" href="media/icon-tittle.png" />
    <link rel="stylesheet" href="style-css/style-ubah-profil.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
</head>
<body>
    <div class="container">
        <a href="index.php" id="btnKembali"><button><i class="fas fa-arrow-left"></i> Kembali</button></a>
        <br><br>
        <h2 id="h2">Ubah Profil</h2>
        <form action="ubah-profil-session.php" method="post">
            <h4 id="h4">Nama Baru:</h4>
            <input type="text" id="namaBaru" name="namaBaru" placeholder="Masukkan Nama Baru" />

            <h4 id="h4">Username Baru:</h4>
            <input type="text" id="usernameBaru" name="usernameBaru" placeholder="Masukkan Username Baru" />

            <button type="submit">Ubah Profil</button>
        </form>
    </div>
</body>
</html>
