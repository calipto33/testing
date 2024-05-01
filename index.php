<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>4D HAIRSTYLISH</title>
    <link rel="icon" href="media/icon-tittle.png" />
    <link rel="stylesheet" type="text/css" href="style-css/style-home.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <script src="java-script/script-home.js"></script>
  </head>

  <body>
    <!---------------------------------------------- HEADER ---------------------------------------------->
    <header id="header">
      <!---------- LOGO ---------->
      <div class="header-logo">
        <a href="#">
          <img id="logo" src="media/icon-tittle.png" alt="Logo"
        /></a>
      </div>
      <!---------- TITTLE ---------->
      <div class="header-title">
        <a>
          <h1 id="titlescroll" onclick="scrollToSection()">4D HAIRSTYLISH</h1>
        </a>
      </div>
      <!---------- Button Daftar dan Masuk ---------->
      <div class="daftar-masuk-buttons">
      <?php
    if (isset($_SESSION['nama'])) {
      // Jika user sudah login, tampilkan dropdown dengan pilihan
      echo '<button onclick="MunculkanUserBox()"> ' . $_SESSION['nama'] . '</button>';
      
      echo '<div id="userBox" class="user-box">';
      echo '<a href="halaman-profil.php"><button>Edit Profil</button></a>';
      echo '<a href="logout-session.php"><button>Keluar</button></a>';
      echo '</div>';
    } else {
      // Jika user belum login, tampilkan tombol daftar dan masuk
      echo '<a href="halaman-daftar.php"><button id="daftar-button">DAFTAR</button></a>';
      echo '<a href="halaman-masuk.php"><button id="masuk-button">MASUK</button></a>';
    }
  ?>
      </div>
    </header>
    <!---------------------------------------------- SECTION 1 ---------------------------------------------->
    <section
      id="section-banner1"
      class="banner"
      style="background-image: url(media/background-header.png)"
    >
      <div class="banner-text">
        <img src="media/icon-tittle.png" alt="logo-section1" />
        <h1 id="welcome">Welcome to 4D HAIRSTYLISH</h1>
        <p>
          Kami adalah destinasi utama Anda untuk semua kebutuhan perawatan
          rambut dan styling di kota ini. Dengan tim profesional kami yang
          berpengalaman dan bersemangat, kami berkomitmen untuk membantu Anda
          mencapai gaya rambut impian Anda.
          <br />
        </p>
        <p>
          Kami juga menjual berbagai macam Produk untuk kesehatan rambut dan
          Produk yang dijual dipastikan 100% Original.
        </p>
        <a href="https://wa.me/6281387614254" class="btn" target="_blank"
          ><i class="fab fa-whatsapp"> Whatsapp Chat</i></a
        >
      </div>
    </section>

    <!---------------------------------------------- SECTION 2 ---------------------------------------------->
    <section
      id="section-banner2"
      class="banner"
      style="background-image: url(media/background-image.png)"
    >
      <h2>TRENDING HAIR CUT</h2>
      <div class="hairstyle-container">
        <div class="hairstyle">
          <img src="media/pompadour.jpg" alt="Pompadour" />
          <h2>Pompadour</h2>
        </div>
        <div class="hairstyle">
          <img src="media/undercut.jpg" alt="Undercut Modern" />
          <h2>Undercut</h2>
        </div>
        <div class="hairstyle">
          <img src="media/side-part.jpg" alt="Side Part" />
          <h2>Side Part</h2>
        </div>
        <div class="hairstyle">
          <img src="media/faux-hawk.jpg" alt="Faux Hawk" />
          <h2>Faux Hawk</h2>
        </div>
        <div class="hairstyle">
          <img src="media/taper-fade.jpg" alt="Taper Fade" />
          <h2>Taper Fade</h2>
        </div>
        <div class="hairstyle">
          <img src="media/buzz-cut.jpg" alt="Buzz Cut" />
          <h2>Buzz Cut</h2>
        </div>
        <div class="hairstyle">
          <img src="media/comma-hair.jpg" alt="Comma Hair" />
          <h2>Comma Hair</h2>
        </div>
        <div class="hairstyle">
          <img src="media/man-bun.jpg" alt="Man Bun" />
          <h2>Man Bun</h2>
        </div>
        <div class="hairstyle">
          <img src="media/bold.jpg" alt="Bold" />
          <h2>Bold</h2>
        </div>
      </div>
    </section>
    <!---------------------------------------------- SECTION 3 ---------------------------------------------->
    <section
      id="section-banner3"
      class="banner"
      style="background-image: url(media/background-image2.png)"
    >
      <h2>SERVICE MEMBERS</h2>
      <div class="profil">
        <img class="profil-image-kiri" src="media/barber1.png" alt="barber-1" />
        <img
          class="profil-image-tengah"
          src="media/barber2.png"
          alt="barber-2"
        />
        <img
          class="profil-image-tengah"
          src="media/barber3.png"
          alt="barber-3"
        />
        <img
          class="profil-image-tengah"
          src="media/barber4.png"
          alt="barber-4"
        />
        <img
          class="profil-image-kanan"
          src="media/barber5.png"
          alt="barber-5"
        />
      </div>
    </section>

    <!---------------------------------------------- SECTION 4 ---------------------------------------------->

    <div id="div-section4dan5" style="background-image: url(media/background-image4.jpg)">
    <h2 id="h2-section4">PRODUCT SALE</h2>
    <section
      id="section-banner4"
    >
    
      <div class="product">
        <img src="media/hair-pomade.png" alt="Pomade" />
        <h3>Hair Pomade</h3>
        <p>Harga: Rp.130.000</p>
      </div>

      <div class="product">
        <img src="media/hair-clay.png" alt="Clay" />
        <h3>Hair Clay</h3>
        <p>Harga: Rp.180.000</p>
      </div>
      <div class="product">
        <img src="media/hair-powder.png" alt="Powder" />
        <h3>Hair Powder</h3>
        <p>Harga: Rp.100.000</p>
      </div>
      <div class="product">
        <img src="media/hair-shampoo.png" alt="Shampoo" />
        <h3>Hair Shampoo</h3>
        <p>Harga: Rp.225.000</p>
      </div>
      <div class="product">
        <img src="media/hair-tonic.png" alt="Tonic" />
        <h3>Hair Tonic</h3>
        <p>Harga: Rp.120.000</p>
      </div>
      <div class="product">
        <img src="media/hair-vitamins.png" alt="Vitamins" />
        <h3>Hair Vitamins</h3>
        <p>Harga: Rp.80.000</p>
      </div>
      <div class="product">
        <img src="media/hair-beard-trimmer.png" alt="Trimmer" />
        <h3>Beard Trimmer</h3>
        <p>Harga: Rp.450.000</p>
      </div>
      <div class="product">
        <img src="media/hair-beard-oil.png" alt="Oil" />
        <h3>Beard Oil</h3>
        <p>Harga: Rp.100.000</p>
      </div>
    </section>

     <!---------------------------------------------- SECTION 5 ---------------------------------------------->

     <section
      id="section-banner5"
      class="section5"
      style="background-image: url(media/garis-garis.png)"
    >
    <div class="reservasi">
        <h2 id="h2-section5">Reservasi Online</h2>

    <?php
    if (session_status() == PHP_SESSION_NONE) {
    session_start();
    }
    if (!isset($_SESSION['username'])) {
    ?>
        <h4 id="wajib">*Wajib Login</h4>
    <?php
    }
    ?>

    </div>
      <br />
      <h3 id="p-section5">
        Silakan mengisi formulir di bawah ini untuk melakukan reservasi online:
      </h3>
      <form action="booking-session.php" method="POST">
        
      <input id="username" type="hidden" name="username" value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>">

        <label for="nama">Nama Pelanggan:</label>
        <input
          type="text"
          id="nama_lengkap"
          name="nama_lengkap"
          required
          placeholder="Nama Lengkap Anda"
        /><br /><br />

        <label for="tanggal">Tanggal Pemesanan:</label>
        <input
          type="date"
          id="tanggal"
          name="tanggal"
          required
        /><br /><br />

        <label for="staff">Barber Man:</label>
        <select id="staff" name="staff" required="">
          <option value="" disabled selected>Pilih Barber Man</option>
          <option value="Mr. Thoriq">Mr. Thoriq</option>
          <option value="Mas Azki">Mas Azki</option>
          <option value="Sir Alif">Sir Alif</option>
        </select>

        <label for="jam">Jam Pemesanan:</label>
        <select id="jam" name="jam" required="">
          <option value="" disabled selected>Pilih Jam</option>
          <option value="10:00">10:00</option>
          <option value="11:00">11:00</option>
          <option value="12:00">12:00</option>
          <option value="13:00">13:00</option>
          <option value="14:00">14:00</option>
          <option value="15:00">15:00</option>
          <option value="16:00">16:00</option>
          <option value="17:00">17:00</option>
          <option value="18:00">18:00</option>
          <option value="19:00">19:00</option></select
        ><br /><br />

        <button type="submit">Pesan Sekarang</button>
      </form>
    </section>
    <br><br>
    </div>
    <footer>
      <div class="footer-content">
        <p>&copy; 2023 4D HAIRSTYLISH. All rights reserved.</p>
      </div>
    </footer>


  </body>
</html>
