<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar Online</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    @keyframes slideIn {
      from {
        opacity: 0;
        transform: translateX(-100%);
      }

      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    /* Global Styles */
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
    }

    .container {
      width: 80%;
      margin: 0 auto;
      padding: 20px 0;
    }

    /* Header Styles */
    header {
      color: #333333;
      padding: 20px 0;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    header h1 {
      font-size: 2em;
    }

    nav ul {
      list-style: none;
    }

    nav ul li {
      display: inline;
      margin-right: 20px;
    }

    nav ul li a {
      text-decoration: none;
      color: #333333;
    }

    .hero {
      background-size: cover;
      color: #ffffff;
      /* Warna teks awal - putih */
      text-align: center;
      padding: 100px 0;
      overflow: hidden;
    }

    .hero h2 {
      font-size: 3em;
      margin-bottom: 20px;
      color: #000000;
      /* Warna teks h2 - hitam */
      animation: slideIn 1s ease-out forwards;
      pointer-events: none;
      /* Teks tidak akan menimbulkan event pointer seperti klik */
    }

    .hero p {
      font-size: 1.2em;
      margin-bottom: 30px;
      color: #000000;
      /* Warna teks paragraf - hitam */
    }

    .hero .cta-button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #ff6600;
      color: #000000;
      /* Warna teks tombol - hitam */
      text-decoration: none;
      font-weight: bold;
      border-radius: 5px;
      animation: slideIn 1s ease-out forwards;
    }

    /* Mengatur teks tombol kembali ke style hitam setelah diklik */
    .hero .cta-button:visited {
      color: #000000;
    }

    /* Tambahan CSS untuk Fitur Utama */
    .feature-items {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      animation: slideIn 1s ease-out forwards;
    }

    .feature-item {
      flex: 0 0 calc(33.333% - 20px);
      /* Atur lebar masing-masing fitur */
      margin-bottom: 20px;
      text-align: center;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .features h3 {
      text-align: center;
    }

    /* Tambahkan gaya tambahan sesuai kebutuhan untuk ikon, judul, dan deskripsi */
    .feature-item i {
      font-size: 2em;
      margin-bottom: 10px;
    }

    .feature-item h4 {
      font-size: 1.5em;
      margin-bottom: 10px;
    }

    .feature-item p {
      font-size: 1.1em;
      line-height: 1.6;
    }

    blockquote {
      font-style: italic;
      margin-bottom: 10px;
    }

    cite {
      font-weight: bold;
    }

    /* Footer Styles */
    footer {
      background-color: #333333;
      color: #ffffff;
      text-align: center;
      padding: 20px 0;
    }

    footer nav ul li {
      display: inline;
      margin-right: 10px;
    }

    footer nav ul li a {
      color: #ffffff;
      text-decoration: none;
    }

    .login-register {
      position: absolute;
      top: 20px;
      right: 20px;
    }

    .login-register button {
      padding: 8px 16px;
      margin-left: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      color: #ffffff;
      background-color: #333333;
      transition: background-color 0.3s ease;
    }

    .login-register button:hover {
      background-color: #555555;
    }

    header {
      background-color: #f9f9f9;
      /* Warna latar belakang header */
    }
.features{
  margin-top: 65px;
}
    h1 a {
      color: #888888;
      /* Warna teks judul "Belajar Online" menjadi abu-abu */
    }

    /* Link saat dihover */
    h1 a:hover {
      color: #333333;
      /* Ubah warna teks saat link dihover menjadi lebih gelap */
    }

    @media only screen and (max-width: 768px) {
  body {
    font-size: 14px; /* Adjust font size for smaller screens */
  }

  header {
    padding: 10px 0; /* Adjust header padding for smaller screens */
  }

  header h1 {
    font-size: 1.5em; /* Adjust header font size for smaller screens */
  }

  nav ul li {
    display: block;
    margin: 10px 0; /* Add margin between navigation items for smaller screens */
  }

  .hero {
    padding: 80px 0; /* Adjust hero section padding for smaller screens */
  }

  .hero h2 {
    font-size: 2em; /* Adjust hero heading font size for smaller screens */
  }

  .hero p {
    font-size: 1em; /* Adjust hero paragraph font size for smaller screens */
  }

  .hero .cta-button {
    font-size: 0.8em; /* Adjust button font size for smaller screens */
  }

  .feature-item {
    flex: 0 0 100%; /* Set width to 100% for smaller screens */
  }

  .features h3 {
    font-size: 1.2em; /* Adjust feature section heading font size for smaller screens */
  }

  .feature-item i {
    font-size: 1.5em; /* Adjust feature item icon size for smaller screens */
  }

  .feature-item h4 {
    font-size: 1.2em; /* Adjust feature item heading font size for smaller screens */
  }

  .feature-item p {
    font-size: 0.9em; /* Adjust feature item paragraph font size for smaller screens */
  }

  footer {
    padding: 10px 0; /* Adjust footer padding for smaller screens */
  }

  footer nav ul li {
    margin-right: 5px; /* Adjust margin between footer navigation items for smaller screens */
  }

  .login-register {
    position: static;
    margin-top: 10px; /* Adjust margin between login-register and header for smaller screens */
    text-align: center; /* Center align login-register for smaller screens */
  }

  .login-register button {
    margin: 5px; /* Add margin between login-register buttons for smaller screens */
  }
}
  </style>
</head>

<body>

  <!-- Header -->
  <header>
    <div class="container">
      <h1><a href="<?php echo base_url('home'); ?>">Belajar Online</a></h1>
      <!-- Tambahkan tombol login dan register di kanan atas -->
      <div class="login-register">
        <button onclick="location.href='<?php echo base_url('auth'); ?>';">Masuk</button>
        <button onclick="location.href='<?php echo base_url('auth/register'); ?>';">Daftar</button>
      </div>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h2>Belajar Apapun, Kapanpun,</h2>
      <p>Bergabunglah dengan ribuan orang yang belajar secara online.</p>
      <a href="#" class="cta-button">Mulai Belajar</a>
    </div>
  </section>

  <!-- Fitur Utama -->
  <section class="features">
    <div class="container">
      <h3>Mengapa "Belajar Online" Membantu dan dapat di Percaya?</h3>
      <div class="feature-item">
        <div class="feature-content">
          <i class="fas fa-chalkboard"></i>
          <div class="feature-text">
            <h4>Akses Fleksibel ke Kursus Online</h4>
            <p>Dengan "Belajar Online," Anda dapat mengakses berbagai kursus online dari berbagai bidang studi, kapan
              pun Anda mau.</p>
          </div>
        </div>
        <div class="feature-content">
          <i class="fas fa-book"></i>
          <div class="feature-text">
            <h4>Materi Pembelajaran yang Diversifikasi</h4>
            <p>Nikmati akses ke materi pembelajaran yang diperbarui secara berkala, mulai dari video pelatihan hingga
              proyek praktis.</p>
          </div>
        </div>
        <div class="feature-content">
          <i class="fas fa-users"></i>
          <div class="feature-text">
            <h4>Interaksi dengan Instruktur dan Peserta</h4>
            <p>Terhubunglah dengan instruktur dan sesama peserta dari seluruh dunia melalui forum diskusi dan kolaborasi
              daring.</p>
          </div>
        </div>
        <div class="feature-content">
          <i class="fas fa-user-graduate"></i>
          <div class="feature-text">
            <h4>Pembelajaran yang Dipersonalisasi</h4>
            <p>Kami menawarkan pengalaman belajar yang disesuaikan dengan kebutuhan Anda melalui rekomendasi kursus yang
              sesuai.</p>
          </div>
        </div>
        <div class="feature-content">
          <i class="fas fa-hands-helping"></i>
          <div class="feature-text">
            <h4>Dukungan dan Fleksibilitas Penuh</h4>
            <p>Platform ini memberikan dukungan penuh untuk pembelajaran jarak jauh, memberikan fleksibilitas bagi
              pelajar dari segala latar belakang.</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Footer -->
  <footer>
    <div class="container">
      <p>&copy; 2024 Belajar Online</p>
    </div>
  </footer>
  <!-- Tambahkan script ini di bagian bawah dari tag <body> -->
  <script>
    // Fungsi untuk cek status login
    function checkLoginStatus() {
      // Disini Anda dapat menambahkan logika untuk memeriksa status login, misalnya:
      let isLoggedIn = false; // Ganti ini dengan logika sesuai dengan aplikasi Anda

      return isLoggedIn;
    }

    // Fungsi untuk mengarahkan ke halaman login jika belum login saat tombol "Mulai Belajar" diklik
    function redirectToLogin() {
      let loggedIn = checkLoginStatus();
      if (!loggedIn) {
        // Jika belum login, alihkan ke halaman login
        window.location.href = "auth"; // Ganti "login.html" dengan halaman login Anda
      }
    }

    // Tambahkan event listener untuk tombol "Mulai Belajar"
    document.addEventListener("DOMContentLoaded", function () {
      const startLearningButton = document.querySelector('.cta-button');

      startLearningButton.addEventListener('click', function (event) {
        redirectToLogin();
      });
    });
  </script>

</body>

</html>