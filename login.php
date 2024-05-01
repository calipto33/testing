<!DOCTYPE html>
<html>
    <head>
        <title>HALAMAN FORM LOGIN</title>
            <link rel="stylesheet"  href="style.css"/>
</head>
<body>
    <div class="kotak_login">
        <p class="tulisan_login"> silahkan login</p>
        <form action="ceklogin.php" method="post" role="form">
            <label>username</label>
            <input type="text" name="username"class="form_login" placeholder="username" autocomplete="off">
            <label>password</label>
            <input type="password" name="password" class="form_login"placeholder="password"autocomplete="off">
            <input type="submit" class="tombol_login" value="login">
        </form>
    </div>
</body>
</html>