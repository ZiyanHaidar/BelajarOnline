<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Dashboard Belajar Online</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
  <link rel="icon" href="path/to/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap">

  <style>
    body {
      font-family: 'Open Sans', sans-serif;
    }

    header {
      background-color: orange;
      color: white;
      padding: 1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    main {
      background-color: #f4f4f4;
      padding: 2rem;
    }

    h2 {
      color: #333;
    }

    aside {
      background-color: #e0e0e0;
      padding: 1rem;
    }

    ul {
      list-style-type: none;
      padding: 0;
      display: flex;
    }

    li {
      margin-right: 0.5rem;
    }

    .hover-bg-gray-100:hover {
      background-color: #f0f0f0;
    }

    .no-scrollbar::-webkit-scrollbar {
      display: none;
    }

    .no-scrollbar {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }

    .tab-content {
      display: none;
    }

    .tab-content.active {
      display: block;
    }

    /* New styles for circular profile picture */
    .profile-picture-container {
      width: 120px;
      height: 120px;
      overflow: hidden;
      margin: 0 auto;
      border-radius: 50%;
      position: relative;
      background: url('path/to/background-image.jpg');
      /* Add the path to your background image */
      background-size: cover;
      background-position: center;
    }

    .profile-picture {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border: 4px solid #fff;
      border-radius: 50%;
    }

    .edit-button {
      background-color: #3498db;
      color: #fff;
      border: none;
      padding: 8px 15px;
      /* Adjusted padding for better appearance */
      cursor: pointer;
      border-radius: 5px;
    }

    .profile-options {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      color: white;
      display: none;
      background-color: rgba(0, 0, 0, 0.8);
    }

    .profile-picture-container:hover .profile-options {
      display: block;
    }

    .profile-details {
      width: 78px;
      position: relative;
    }

    .profile-details img {
      height: 52px;
      width: 52px;
      object-fit: cover;
      border-radius: 20px;
      background: #fff;
    }

    .profile-details .profile_name,
    .profile-details .job {
      color: black;
      font-size: 18px;
    }

    .profile-details .job {
      font-size: 12px;
    }

    .card {

      text-align: center;
      border: 1px solid #ccc;
      background-color: #f9f9f9;
      border-radius: 5px;

    }

    /* CSS untuk gambar profil dan tombol edit */
    .profile-image {
      position: relative;
      display: inline-block;
    }

    .profile-image img {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border: 2px solid #6699ff;
      border-radius: 50%;
      margin-bottom: 10px;
    }

    .edit-button {
      position: absolute;
      bottom: 10px;
      right: 10px;
      background-color: #6699ff;
      color: #fff;
      border: none;
      border-radius: 50%;
      padding: 5px 10px;
      cursor: pointer;
      font-size: 16px;
    }

    /* CSS untuk judul card (username) dan informasi tambahan */
    .card h5,
    .card p {
      margin: 0;
      font-size: 1em;
      color: #555;
    }

    .profile-form {
      margin-top: 20px;
      text-align: left;
      max-width: 400px;
      /* Sesuaikan dengan kebutuhan Anda */
      margin-left: auto;
      margin-right: auto;
    }

    .form-group {
      position: relative;
      display: flex;
      flex-direction: column;
      /* Menampilkan label di atas input */
      margin-bottom: 15px;
    }

    .form-group label {
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding-right: 40px;
    }

    .form-group .input-group-text {
      position: relative;
      top: 0;
      transform: none;
      cursor: pointer;
    }

    .form-group button {
      font-weight: bold;
      background-color: #343a40;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      display: inline-block;
      align-self: flex-start;
    }


    .form-group.position-relative {
      position: relative;
    }

    .form-group.position-relative input {
      padding-right: 40px;
      /* Biarkan ruang untuk ikon */
    }

    .form-group.position-relative .input-group-text {
      position: absolute;
      right: 10px;
      /* Sesuaikan posisi ikon */
      top: 70%;
      transform: translateY(-50%);
      cursor: pointer;
    }


    @media (max-width: 767px) {
      .profile-form {
        max-width: 100%;
      }

      .form-group label {
        font-size: 14px;
      }

      .form-group input {
        padding: 8px;
      }

      .form-group button {
        font-size: 14px;
      }

      /* Opsi tambahan: menyesuaikan teks tombol */
      button[type="submit"] span {
        margin-left: 3px;
      }
    }

    button[type="submit"]:hover {
      background-color: #343a40;
    }

    button[type="submit"]:focus {
      outline: none;
    }

    /* Opsi tambahan: menyesuaikan teks tombol */
    button[type="submit"] span {
      vertical-align: middle;
      margin-left: 5px;
    }

    /* Style untuk modal */
    .modal {
      display: none;
      position: fixed;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.7);
      z-index: 3;
    }

    .modal-content {
      background-color: #fff;
      margin: 15%;
      padding: 20px;
      border-radius: 5px;
      width: 50%;
      position: relative;
    }

    .close {
      position: absolute;
      top: 0;
      right: 0;
      padding: 10px;
      cursor: pointer;
    }

    .close:hover {
      color: #f00;
    }

    /* Memperbaiki tampilan input file */
    input[type="file"] {
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      width: 100%;
      margin-bottom: 10px;
    }

    /* Memperbaiki tampilan tombol Simpan dan menambahkan ikon */
    button[type="submit"] {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      display: inline-flex;
      align-items: center;
      transition: background-color 0.3s;
    }

    button[type="submit"] i {
      margin-right: 5px;
    }

    /* Tambahkan CSS untuk modal */
    .modalimg {
      display: none;
      position: fixed;
      z-index: 1;
      left: 20%;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgb(0, 0, 0);
      background-color: rgba(0, 0, 0, 0.9);
      padding-top: 60px;
    }

    .modalimg-content {
      margin: 5% auto;
      display: block;
      max-width: 700px;
    }

    .closes {
      color: #fff;
      font-size: 35px;
      font-weight: bold;
      position: absolute;
      top: 15px;
      right: 35px;
    }

    .modal-image {
      max-width: 100%;
      max-height: 100%;
      display: block;
      margin: auto;
    }

    .profile-image img {
      cursor: pointer;
    }
  </style>
</head>

<body class="bg-gray-100 font-sans">
  <?php foreach ($akun as $user): ?>
    <header class="text-black py-4">
      <div class="container mx-auto flex justify-between items-center px-4">
        <a href="<?php echo base_url('pelajar'); ?>">
          <div class="text-xl font-bold">BelajarOnline</div>
        </a>
        <ul class="flex py-4">
          <li class="px-4 py-2 hover:bg-gray-300 relative">
            <a href="#" class="font-semibold" id="catalogDropdownToggle">Lihat Katalog Kursus</a>
            <ul class="absolute hidden text-gray-700 bg-white shadow-lg py-2 mt-1 w-100 rounded-lg"
              id="catalogDropdownMenu">
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Pilih Kursus</a></li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Tonton Video Pembelajaran</a></li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Kerjakan Kuis</a></li>
            </ul>
          </li>
          <li class="px-4 py-2 hover:bg-gray-300"><a href="#" class="font-semibold">Diskusi</a></li>
          <li class="px-4 py-2 hover:bg-gray-300"><a href="#" class="font-semibold">Laporan Kemajuan</a></li>
        </ul>
        <div class="relative">
          <div class="profile-details" id="profileDropdownToggle">
            <?php foreach ($akun as $user): ?>
              <div class="profile-content">
                <img src="<?php echo base_url('images/user/' . $user->image) ?>" alt="profileImg">
              </div>
            <?php endforeach ?>
            <div class="profile-details" id="profileDropdownToggle">
              <div class="profile-content ml-2">
                <div class="name-job">
                  <div class="profile_name">
                    <?php echo $this->session->userdata('username'); ?>
                  </div>
                  <div class="job">
                    <marquee scrolldelay="200">
                      <?php echo $_SESSION['email']; ?>
                    </marquee>
                  </div>
                </div>
              </div>
              <ul class="absolute hidden text-gray-700 bg-white shadow-lg py-2 mt-1 w-35 rounded-lg right-0 top-full"
                id="profileDropdownMenu">
                <li><a href="<?php echo base_url('pelajar/profile'); ?>"
                    class="block px-4 py-2 hover:bg-gray-100">Profil</a></li>
                <li><a href="#" onclick="confirmLogout()" class="block px-4 py-2 hover:bg-gray-100">Keluar</a></li>
              </ul>
            </div>
          </div>
        </div>
    </header>

    <main class="no-scrollbar">
      <div class="all font-web bg-slate-100 min-h-screen">
        <div class="bg-[url('http://localhost/ftp/uploads/awan.png')] h-[80px] bg-no-repeat bg-cover">
        </div>
        <div class="px-10 -mt-[40px]">
          <div class="profile-picture-container">
            <div class="profile-image">
              <img src="<?php echo base_url('images/user/' . $user->image) ?>" alt="profileImg" class="rounded-circle">

              <input name="id" type="hidden" value="<?php echo $user->id ?>">
              <button for="image_upload" class="edit-button" data-bs-toggle="modal" data-bs-target="#editImageModal"><i
                  class="fa-solid fa-pen"></i></button>
              <input type="file" id="image" name="image" accept="image/*" style="display:none;">
            </div>
            <h5 class="card-title">
              <?php echo $this->session->userdata('username'); ?>
            </h5>
            <p class="card-text">
              <?php echo $this->session->userdata('email'); ?>
            </p>
          </div>
        </div>
        <ul class="grid grid-flow-col text-center border-b border-gray-200 text-gray-500 mt-12">

          <li>
            <a href="#page4"
              class="flex justify-center border-b-4 border-transparent hover:text-indigo-600 hover:border-indigo-600 py-4">Edit
              Profil</a>
          </li>
        </ul>

        <div id="page4" class="tab-content">
          <form action="<?php echo base_url('pelajar/edit_profile'); ?>" enctype="multipart/form-data" method="post"
            class="mt-8 max-w-md mx-auto">
            <div class="mb-3">
              <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
              <input id="email" type="email" placeholder="Masukan email" value="<?php echo $user->email ?>" name="email"
                class="mt-1 p-2 border rounded-md w-full">
            </div>
            <div class="mb-3">
              <label for="username" class="block text-sm font-medium text-gray-600">Username</label>
              <input id="username" type="username" placeholder="Masukan username" value="<?php echo $user->username ?>"
                name="email" class="mt-1 p-2 border rounded-md w-full">
            </div>
            <div class="mb-3">
              <label for="fullname" class="block text-sm font-medium text-gray-600">Nama Lengkap</label>
              <input id="fullname" type="fullname" placeholder="Masukan nama lengkap"
                value="<?php echo $user->fullname ?>" name="email" class="mt-1 p-2 border rounded-md w-full">
            </div>

            <div class="col-span-2 sm:col-span-1">
              <label for="password_lama" class="block text-sm font-medium text-gray-600">Password Lama</label>
              <div class="relative">
                <input id="password_lama" type="password" placeholder="Masukan Password Lama" name="password_lama"
                  class="mt-1 p-2 border rounded-md w-full">
                <span class="absolute inset-y-0 right-0 pr-3 flex items-center">
                  <i id="icon-password_lama" class="fas fa-eye-slash text-gray-500 cursor-pointer"
                    onclick="togglePassword('password_lama', 'icon-password_lama')"></i>
                </span>
              </div>
              <div class="grid grid-cols-2 gap-4 mb-3">
                <div class="col-md-6">
                  <label class="small mb-1" for="password_baru">Password Baru</label>
                  <div class="input-group">
                    <input class="form-control" id="password_baru" type="password" placeholder="Password baru"
                      name="password_baru">
                    <span class="input-group-text" onclick="togglePassword('password_baru', 'icon-password_baru')">
                      <i id="icon-password_baru" class="fas fa-eye-slash"></i>
                    </span>
                  </div>
                </div>
                <div class="col-md-6">
                  <label class="small mb-1" for="konfirmasi_password">Konfirmasi
                    Password</label>
                  <div class="input-group">
                    <input class="form-control" id="konfirmasi_password" type="password" placeholder="Konfirmasi password"
                      name="konfirmasi_password">
                    <span class="input-group-text"
                      onclick="togglePassword('konfirmasi_password', 'icon-konfirmasi_password')">
                      <i id="icon-konfirmasi_password" class="fas fa-eye-slash"></i>
                    </span>
                  </div>
                </div>

                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Simpan
                  Perubahan</button>
          </form>
        </div>
      </div>
    <?php endforeach ?>
    </div>
    </div>
  </main>
  <div class="modal" id="imageModal">
    <div class="modal-content">
      <span class="close" id="closeModal">&times;</span>
      <form action="<?php echo base_url('pelajar/edit_image'); ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $user->id; ?>">
        <label for="image">Pilih gambar:</label>
        <input type="file" id="image" name="image" accept="image/*">
        <button type="submit">Simpan</button>
      </form>
    </div>
  </div>

  <!-- Modal Image-->
  <div class="modalimg" id="imageModall">
    <div class="modal-content">
      <span class="closes" id="closeModall">&times;</span>
      <img src="<?php echo base_url('images/user/' . $user->image) ?>" alt="profileImg" class="modal-image">
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
    $(document).ready(function () {
      // Set the default active tab to "Profil Saya" when the document is ready
      $('#page4').addClass('active');
      $('a[href="#page4"]').addClass('active');

      // Handle click events on the navigation links
      $(".grid a").on("click", function (event) {
        event.preventDefault();

        // Remove 'active' class from all tabs and links
        $(".grid a").removeClass("active");
        $(".tab-content").removeClass("active");

        // Add 'active' class to the clicked tab and link
        $(this).addClass("active");

        // Get the corresponding tab ID and show the content
        var tabId = $(this).attr("href").substring(1);
        $("#" + tabId).addClass("active");
      });
    });
  </script>
  <script>
    $(document).ready(function () {
      // Ketika input file berubah
      $('#image_upload').on('change', function (e) {
        var fileInput = $(this)[0];
        var file = fileInput.files[0];
        var reader = new FileReader();

        // Jika ada file yang dipilih
        if (file) {
          reader.onload = function (e) {
            // Menampilkan pratinjau gambar
            $('#preview-image').attr('src', e.target.result);
            $('#preview-container').show();
          }
          // Membaca data gambar sebagai URL
          reader.readAsDataURL(file);
        } else {
          // Jika tidak ada file yang dipilih, sembunyikan pratinjau
          $('#preview-container').hide();
        }
      });
    });


    function togglePassword(inputId, iconId) {
      var x = document.getElementById(inputId);
      var icon = document.getElementById(iconId);

      if (x.type === "password") {
        x.type = "text";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
      } else {
        x.type = "password";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
      }
    }
  </script>

  <?php if ($this->session->flashdata('kesalahan_password')) { ?>
    <script>
      Swal.fire({
        title: "Error!",
        text: "<?php echo $this->session->flashdata('kesalahan_password'); ?>",
        icon: "warning",
        showConfirmButton: false,
        timer: 1500
      });
    </script>
  <?php } ?>

  <?php if ($this->session->flashdata('gagal_update')) { ?>
    <script>
      Swal.fire({
        title: "Error!",
        text: "<?php echo $this->session->flashdata('gagal_update'); ?>",
        icon: "error",
        showConfirmButton: false,
        timer: 1500
      });
    </script>
  <?php } ?>

  <?php if ($this->session->flashdata('error_profile')) { ?>
    <script>
      Swal.fire({
        title: "Error!",
        text: "<?php echo $this->session->flashdata('error_profile'); ?>",
        icon: "error",
        showConfirmButton: false,
        timer: 1500
      });
    </script>
  <?php } ?>

  <?php if ($this->session->flashdata('kesalahan_password_lama')) { ?>
    <script>
      Swal.fire({
        title: "Error!",
        text: "<?php echo $this->session->flashdata('kesalahan_password_lama'); ?>",
        icon: "error",
        showConfirmButton: false,
        timer: 1500
      });
    </script>
  <?php } ?>

  <?php if ($this->session->flashdata('berhasil_ubah_foto')) { ?>
    <script>
      Swal.fire({
        title: "Berhasil",
        text: "<?php echo $this->session->flashdata('berhasil_ubah_foto'); ?>",
        icon: "success",
        showConfirmButton: false,
        timer: 1500
      });
    </script>
  <?php } ?>

  <?php if ($this->session->flashdata('ubah_password')) { ?>
    <script>
      Swal.fire({
        title: "Success!",
        text: "<?php echo $this->session->flashdata('ubah_password'); ?>",
        icon: "success",
        showConfirmButton: false,
        timer: 1500
      });
    </script>
  <?php } ?>

  <?php if ($this->session->flashdata('update_user')) { ?>
    <script>
      Swal.fire({
        title: "Success!",
        text: "<?php echo $this->session->flashdata('update_user'); ?>",
        icon: "success",
        showConfirmButton: false,
        timer: 1500
      });
    </script>
  <?php } ?>
  <script>
    // Membuka modal saat tombol edit diklik
    document.querySelector('.edit-button').addEventListener('click', () => {
      document.querySelector('.modal').style.display = 'block';
    });

    // Menutup modal saat tombol close pada modal diklik
    document.querySelector('#closeModal').addEventListener('click', () => {
      document.querySelector('.modal').style.display = 'none';
    });

    // Menutup modal jika area luar modal diklik
    window.addEventListener('click', (e) => {
      if (e.target == document.querySelector('.modal')) {
        document.querySelector('.modal').style.display = 'none';
      }
    });
  </script>
  <script>
    // Script untuk membuka modal ketika gambar diklik
    document.querySelectorAll('.trigger-modall').forEach(item => {
      item.addEventListener('click', event => {
        document.getElementById('imageModall').style.display = "block";
      });
    });

    // Script untuk menutup modal
    document.getElementById('closeModall').addEventListener('click', function () {
      document.getElementById('imageModall').style.display = "none";
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <!-- LOGOUT -->
  <script>
    function confirmLogout() {
      Swal.fire({
        title: 'Apakah anda ingin Keluar?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya',
        cancelButtonText: 'Batal'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = "<?php echo base_url('home') ?>";
        }
      });
    }
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const profileDropdownToggle = document.getElementById('profileDropdownToggle');
      const profileDropdownMenu = document.getElementById('profileDropdownMenu');
      const catalogDropdownToggle = document.getElementById('catalogDropdownToggle');
      const catalogDropdownMenu = document.getElementById('catalogDropdownMenu');

      profileDropdownToggle.addEventListener('click', function (e) {
        e.stopPropagation();
        profileDropdownMenu.classList.toggle('hidden');
      });

      catalogDropdownToggle.addEventListener('click', function (e) {
        e.stopPropagation();
        catalogDropdownMenu.classList.toggle('hidden');
      });

      document.addEventListener('click', function (e) {
        const isProfileDropdown = profileDropdownToggle.contains(e.target) || profileDropdownMenu.contains(e.target);
        const isCatalogDropdown = catalogDropdownToggle.contains(e.target) || catalogDropdownMenu.contains(e.target);

        if (!isProfileDropdown) {
          profileDropdownMenu.classList.add('hidden');
        }

        if (!isCatalogDropdown) {
          catalogDropdownMenu.classList.add('hidden');
        }
      });

      // Set username with capital letter in the front
      const profileNameElement = document.querySelector('.profile_name');
      if (profileNameElement) {
        const username = '<?php echo $this->session->userdata('username'); ?>';
        const capitalizedUsername = username.charAt(0).toUpperCase() + username.slice(1);
        profileNameElement.textContent = capitalizedUsername;
      }
    });
  </script>
</body>

</html>