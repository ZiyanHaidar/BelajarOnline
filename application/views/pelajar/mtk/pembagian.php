<!DOCTYPE html>

<html lang="en">

<head>
  <!-- Csrf Token -->
  <meta name="csrf-token">
  <title>Dashboard Belajar Online</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
  <script src="jquery-3.2.1.min.js"></script>
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
    background-color: #ffffff;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
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

  
  </style>
</head>

<body class="bg-gray-100 font-sans">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <header class="text-black py-4">
      <div class="container mx-auto flex justify-between items-center px-4">
        <a href="<?php echo base_url('pelajar'); ?>" class="text-xl font-bold">BelajarOnline</a>
        <ul class="flex py-4">
          <li class="px-4 py-2 hover:bg-gray-300 relative">
            <a href="#"  class=" text-black font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline-blue" id="catalogDropdownToggle">Lihat Mata pelajaran</a>
            <ul class="absolute hidden text-gray-700 bg-white shadow-lg py-2 mt-1 w-100 rounded-lg"
              id="catalogDropdownMenu">
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100" onclick="openModal()">Pilih Mata Pelajaran</a>
              </li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Tonton Video Pembelajaran</a></li>
              <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Kerjakan Kuis</a></li>
            </ul>
          </li>
          <li class="px-4 py-2 hover:bg-gray-300"><a href="<?php echo base_url('pelajar/diskusi'); ?>"
               class=" text-black font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline-blue">Diskusi</a></li>
          <li class="px-4 py-2 hover-bg-gray-300"><a href="#"  class=" text-black font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline-blue">Laporan Kemajuan</a></li>
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
  <main class="container mx-auto mt-8 ">
  <a href="<?php echo base_url('pelajar/matematika'); ?>"
            class="mt-2 bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">kembali</a>
            <section id="pembagian" class="mb-8">
    <h2 class="text-2xl font-bold mb-4">Pembagian</h2>

    <p class="mb-4">
      Pembagian adalah operasi matematika untuk menentukan hasil dari pembagian dua bilangan.
    </p>

    <h3 class="text-xl font-bold mb-2">Cara Menyelesaikan Pembagian:</h3>

    <ol class="list-decimal pl-8 mb-4">
      <li>Pilih dua bilangan, yaitu bilangan yang akan dibagi (dividend) dan bilangan pembagi (divisor).</li>
      <li>Bagi bilangan pembagi ke dalam bilangan yang akan dibagi.</li>
      <li>Hasil pembagian adalah jumlah dari berapa kali bilangan pembagi dapat dibagi menjadi bilangan yang akan dibagi.</li>
    </ol>

    <h3 class="text-xl font-bold mb-2">Contoh Pembagian:</h3>

    <p>
      Misalnya, untuk menyelesaikan pembagian 8 ÷ 2, kita dapat melihatnya sebagai proses berikut:
    </p>

    <pre class="bg-gray-300 p-4 rounded-md mt-2">
      8
      ÷
      2
      =
      8 / 2
      =
      4
    </pre>

    <p>
      Jadi, 8 ÷ 2 dapat diartikan sebagai berapa kali bilangan 2 dapat dibagi menjadi bilangan 8, dan hasilnya adalah 4.
    </p>
  </section>
  <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600"
            onclick="openModal('Pertambahan')">Mulai Mengerjakan Kuis</button>
  </main>
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

</body>

</html>