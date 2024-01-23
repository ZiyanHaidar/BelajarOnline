<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Dashboard Belajar Online</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
      padding: 2rem;
    }
    h2 {
    color: #4a5568; /* Dark Grayish Blue */
  }

  p {
    color: #718096; /* Gray */
    line-height: 1.5;
  }

  h3 {
    color: #2d3748; /* Dark Blue-Gray */
  }

  ol,
  ul {
    color: #4a5568; /* Dark Grayish Blue */
    padding-left: 1.5rem;
    margin-bottom: 1.5rem;
  }

  pre {
    background-color: #edf2f7; /* Light Gray-Blue */
    padding: 1rem;
    border-radius: 4px;
    overflow-x: auto;
  }

  a {
    color: #4299e1; /* Blue */
    transition: color 0.3s ease-in-out;
  }

  a:hover {
    color: #2b6cb0; /* Darker Blue on Hover */
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

    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .hover-bg-gray-100:hover {
      background-color: #f0f0f0;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
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

    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
    }

    .modal-content {
      background-color: #fefefe;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
      cursor: pointer;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }

    /* Tambahkan CSS untuk modal */
    .modalimg {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.9);
    }

    .modalimg-content {
      margin: 5% auto;
      max-width: 80%;
      max-height: 80%;
    }

    .closes {
      color: #fff;
      font-size: 35px;
      font-weight: bold;
      position: absolute;
      top: 15px;
      right: 35px;
      cursor: pointer;
    }

    .modal-image {
      max-width: 100%;
      max-height: 100%;
      display: block;
      margin: auto;
    }

    /* Optionally, you can add styling for overlay click to close the modal */
    .modalimg:hover {
      cursor: pointer;
    }

    .profile-image img {
      cursor: pointer;
      border: 2px solid #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 50%;
      height: 100px;
      /* Set the desired height */
      width: 100px;
      /* Set the desired width */
      transition: transform 0.3s ease-in-out;
    }

    /* Optionally, you can add a hover effect to the smaller image */
    .profile-image img:hover {
      transform: scale(1.1);
    }

    .profile-image {
      display: flex;
      justify-content: center;
      align-items: center;
      transition: transform 0.3s ease-in-out;
    }
  </style>
</head>

<body class="bg-gray-100 font-sans">
  <?php foreach ($akun as $user): ?>
    <header class="text-black py-4">
      <div class="container mx-auto flex justify-between items-center px-4">
        <a href="<?php echo base_url('pelajar'); ?>" class="text-xl font-bold">BelajarOnline</a>
        <ul class="flex py-4">
          <li class="hover:bg-gray-300 relative mb-4">
            <button id="subjectDropdownToggle"
              class=" text-black font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline-blue">
              Lihat Mata Pelajaran
            </button>
            <ul class="absolute hidden text-gray-700 bg-white shadow-lg py-2 mt-1 w-100 rounded-lg"
              id="subjectDropdownMenu">
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100" onclick="openModal()">Pilih Mata Pelajaran</a>
              </li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Tonton Video Pembelajaran</a></li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Kerjakan Kuis</a></li>
            </ul>
          </li>

          <li class="px-4 py-2 hover:bg-gray-300"><a href="<?php echo base_url('pelajar/diskusi'); ?>"
              class=" text-black font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline-blue">Diskusi</a>
          </li>
          <li class="px-4 py-2 hover-bg-gray-300"><a href="<?php echo base_url('pelajar/laporan'); ?>"
              class=" text-black font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline-blue">Laporan
              Kemajuan</a></li>
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
                  <div class="job">
                    <marquee scrolldelay="200">
                      <?= $user->email ?>
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
      </div>
    </header>

    <main class="container mx-auto my-10 rounded-sm sm:w-3/4 md:w-1/2 lg:w-1/3 xl:w-full p-6 shadow-md">
      <div class="flex flex-col items-center">
        <div class="profile-picture-container">
          <div class="profile-image">
            <img
              src="<?php echo $user->image ? base_url('images/user/' . $user->image) : base_url('images/user/User.png'); ?>"
              alt="profileImg" class="rounded-circle">
            <input name="id" type="hidden" value="<?php echo $user->id ?>">
            <button for="image_upload" class="edit-button" data-bs-toggle="modal" data-bs-target="#editImageModal">
              <i class="fa-solid fa-pen"></i>
            </button>
            <input type="file" id="image" name="image" accept="image/*" style="display:none;">
          </div>
        </div>

        <h2 class="font-bold text-xl my-4 text-center">
          <?= $user->fullname ?>
          <br>
          <?= $user->username ?>
          <br>
          <?= $user->email ?>
          <br>
          <?= $user->gender ?>
        </h2>

        <div class="mb-4 text-center text-green-500">
          <?= $this->session->flashdata('sukses'); ?>
        </div>
        <div class="mb-4 text-center text-red-500">
          <?= $this->session->flashdata('message'); ?>
        </div>

        <!-- Profile Form Section -->
        <form method="post" action="<?= base_url('pelajar/aksi_ubah_profile'); ?>" enctype="multipart/form-data"
          class="w-full max-w-lg mx-auto">
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
            <!-- Username Input -->
            <div>
              <label for="username" class="block text-sm font-medium text-gray-600">Username</label>
              <input type="text" id="username" name="username"
                class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500"
                value="<?= $user->username; ?>">
            </div>
            <!-- Full Name Input -->
            <div>
              <label for="fullname" class="block text-sm font-medium text-gray-600">Full Name</label>
              <input type="text" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500"
                id="fullname" name="fullname" value="<?= $user->fullname; ?>">
            </div>
          </div>

          <!-- Email and Gender Input -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
            <div class="mb-4">
              <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
              <input type="text" id="email" name="email"
                class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500"
                value="<?= $user->email; ?>">
            </div>
            <div class="mb-4">
              <label for="gender" class="block text-sm font-medium text-gray-600">Gender</label>
              <select id="gender" name="gender"
                class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500">
                <option value="Laki-Laki" <?= ($user->gender === 'Laki-Laki') ? 'selected' : ''; ?>>Laki-Laki</option>
                <option value="Perempuan" <?= ($user->gender === 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
              </select>
            </div>
          </div>

          <!-- Submit Button -->
          <div class="mb-4">
            <div class="flex justify-center mt-6">
              <button type="button"
                class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline-blue"
                onclick="ubahProfile()">Ubah Profile</button>
            </div>
          </div>
        </form>

        <!-- Password Form Section -->
        <form method="post" action="<?= base_url('user/aksi_ubah_password'); ?>" class="mt-6 w-full max-w-lg mx-auto"
          id="ubahPasswordForm">

          <!-- Password Inputs -->
          <div class="mb-4 relative">
            <label for="password_lama" class="block text-sm font-medium text-gray-600">Password Lama</label>
            <div class="relative">
              <input type="password" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500"
                id="password_lama" name="password_lama">
              <button class="btn btn-outline-secondary absolute top-7 transform -translate-y-1/2 right-2" type="button"
                id="togglePasswordLama" onclick="togglePassword('password_lama', 'togglePasswordLama')">
                <i class="fas fa-eye-slash"></i>
              </button>
            </div>
          </div>

          <div class="mb-4 relative">
            <label for="password_baru" class="block text-sm font-medium text-gray-600">Password Baru</label>
            <div class="relative">
              <input type="password" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500"
                id="password_baru" name="password_baru">
              <button class="btn btn-outline-secondary absolute top-7 transform -translate-y-1/2 right-2" type="button"
                id="togglePasswordBaru" onclick="togglePassword('password_baru', 'togglePasswordBaru')">
                <i class="fas fa-eye-slash"></i>
              </button>
            </div>
          </div>

          <div class="mb-4 relative">
            <label for="konfirmasi_password" class="block text-sm font-medium text-gray-600">Konfirmasi Password</label>
            <div class="relative">
              <input type="password" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500"
                id="konfirmasi_password" name="konfirmasi_password">
              <button class="btn btn-outline-secondary absolute top-7 transform -translate-y-1/2 right-2" type="button"
                id="toggleKonfirmasiPassword" onclick="togglePassword('konfirmasi_password', 'toggleKonfirmasiPassword')">
                <i class="fas fa-eye-slash"></i>
              </button>
            </div>
          </div>

          <div class="flex justify-center mt-6">
            <button type="button"
              class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline-blue"
              onclick="confirmPasswordChange()">Ubah Password</button>

          </div>
        </form>

      </div>
    <?php endforeach; ?>
  </main>
  <div class="modal" id="imageModal">
    <div class="modal-content">
      <span class="close" id="closeModal">&times;</span>
      <h2>Ganti Foto Profil</h2>

      <!-- Existing form for uploading a new image -->
      <form action="<?php echo base_url('pelajar/edit_image'); ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $user->id; ?>">
        <label for="image">Pilih gambar:</label>
        <input type="file" id="image" name="image" accept="image/*">
        <button type="submit">Simpan</button>
      </form>

      <!-- Add a new form for deleting the current image -->
      <form action="<?php echo base_url('pelajar/delete_image'); ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $user->id; ?>">
        <button type="submit" style="background-color: red; color: white;">Hapus Foto</button>
      </form>
    </div>
  </div>
  </div>

  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <h2>Pilih Mata Pelajaran</h2>
      <ul>
        <li><a href="<?php echo base_url('pelajar/matematika'); ?>">1. <br> Matematika</a></li>
        <li><a href="<?php echo base_url('pelajar/inggris'); ?>">2. <br>Bahasa Inggris</a></li>
        <li><a href="<?php echo base_url('pelajar/sains'); ?>">3. <br> Sains</a></li>
        <li><a href="<?php echo base_url('pelajar/sejarah'); ?>">4. <br> Sejarah</a></li>
        <!-- Tambahkan mata pelajaran lainnya -->
      </ul>
    </div>
  </div>
  <div class="modal" id="imageModal">
    <div class="modal-content">
      <span class="close" id="closeModal">&times;</span>
      <form action="<?php echo base_url('pelajar/edit_image'); ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $user->id; ?>">
        <label for="image">Pilih gambar:</label>
        <input type="file" id="image" name="image" accept="image/*">
        <button type="submit">Simpan</button>
      </form>

      <!-- Move the "Hapus Foto" button outside the form and style it to be on the right -->
      <form action="<?php echo base_url('pelajar/delete_image'); ?>" method="post"
        style="display: inline-block; float: right;">
        <input type="hidden" name="id" value="<?php echo $user->id; ?>">
        <button type="submit" style="background-color: red; color: white;">Hapus Foto</button>
      </form>
    </div>
  </div>
  </div>
  </div>

  </section>
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
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

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

    // Reload the page after successful deletion (you can customize this)
    function deleteProfileImage() {
      Swal.fire({
        title: 'Berhasil',
        text: 'Foto profil berhasil dihapus',
        icon: 'success',
        showConfirmButton: false,
        timer: 1500
      });

      // Close the delete modal
      document.querySelector('.modal').style.display = 'none';

      // Reload the page
      location.reload();
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script>
    function confirmPasswordChange() {
      Swal.fire({
        title: 'Konfirmasi',
        text: 'Apakah Anda yakin ingin mengubah password?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: "Ubah",
        cancelButtonText: "Batal"
      }).then((result) => {
        if (result.isConfirmed) {
          document.getElementById('ubahPasswordForm').submit();
        }
      });
    }

    function navigateTo(url) {
      window.location.href = url;
    }

    function togglePassword(inputId, toggleId) {
      var passwordInput = document.getElementById(inputId);
      var toggleButton = document.getElementById(toggleId);

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleButton.innerHTML = '<i class="fas fa-eye"></i>';
      } else {
        passwordInput.type = "password";
        toggleButton.innerHTML = '<i class="fas fa-eye-slash"></i>';
      }
    }

    function ubahProfile() {
      Swal.fire({
        title: "Ubah Profile",
        text: "Anda yakin ingin mengubah profile?",
        icon: "question",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: "Ubah",
        cancelButtonText: "Batal"
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: "Berhasil",
            text: "Profil berhasil diubah",
            icon: "success",
            timer: 2000,
            timerProgressBar: true,
            showConfirmButton: false
          });
          setTimeout(function () {
            document.querySelector("form").submit();
          }, 2000);
        }
      });
    }

  </script>
  <script>
    function toggleModal(modalId) {
      const modal = document.getElementById(modalId);
      modal.style.display = modal.style.display === 'flex' ? 'none' : 'flex';
    }

    document.addEventListener('DOMContentLoaded', function () {
      const profileDropdownToggle = document.getElementById('profileDropdownToggle');
      const profileDropdownMenu = document.getElementById('profileDropdownMenu');

      profileDropdownToggle.addEventListener('click', function (e) {
        e.stopPropagation();
        profileDropdownMenu.classList.toggle('hidden');
      });

      document.addEventListener('click', function (e) {
        if (!profileDropdownToggle.contains(e.target) && !profileDropdownMenu.contains(e.target)) {
          profileDropdownMenu.classList.add('hidden');
        }
      });
    });
  </script>
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
  <script>
    function openModal() {
      const modal = document.getElementById('myModal');
      modal.style.display = 'flex';
    }

    function closeModal() {
      const modal = document.getElementById('myModal');
      modal.style.display = 'none';
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
    // Toggle subject dropdown menu
    document.getElementById('subjectDropdownToggle').addEventListener('click', function () {
      document.getElementById('subjectDropdownMenu').classList.toggle('hidden');
    });

    // Close subject dropdown menu if clicked outside
    document.addEventListener('click', function (e) {
      if (!document.getElementById('subjectDropdownToggle').contains(e.target) &&
        !document.getElementById('subjectDropdownMenu').contains(e.target)) {
        document.getElementById('subjectDropdownMenu').classList.add('hidden');
      }
    });
  </script>
</body>

</html>