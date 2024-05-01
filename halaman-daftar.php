<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>4D Hairstylish - Daftar</title>
    <link rel="icon" href="media/icon-tittle.png" />
    <link rel="stylesheet" href="style-css/style-daftar.css" />
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
      <h2>Daftar</h2>
      <form
        action="daftar-session.php"
        method="post"
        onsubmit="return validateForm();"
      >
        <input
          type="text"
          id="nama"
          name="nama"
          placeholder="Nama Lengkap"
          required
        /><br />
        <input
          type="text"
          id="username"
          name="username"
          placeholder="Username"
          required
        /><br />
        <input
          type="password"
          id="password"
          name="password"
          placeholder="Password"
          required
        /><br />
        <input
          type="password"
          id="konfirmasi_password"
          name="konfirmasi_password"
          placeholder="Konfirmasi Password"
          required
        /><br />
        <button type="submit">Daftar</button>
      </form>
      <p id="error-message"></p>
    </div>
    <script src="java-script/script-daftar.js"></script>
  </body>
</html>
