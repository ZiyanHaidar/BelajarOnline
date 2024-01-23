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
 /* Animasi Bendera */
 .animated-flag {
    transition: transform 0.3s ease-in-out;
  }

  .flag-container {
    width: 50%; /* Set the width to 50% for two flags in a row */
    display: flex;
    flex-direction: column;
    align-items: flex-start; /* Align flags on the left */
    justify-content: center;
    text-align: center;
    position: relative; /* Add relative positioning to the container */
  }

  .flag-container button {
    position: absolute;
    bottom: 0; /* Align the button to the bottom of the container */
    margin-bottom: 8px; /* Add some spacing between the flag and the button */
  }

.flag-container img {
  height: 100%; /* Make the flag images take the full height of the container */
  width: auto; /* Maintain the aspect ratio of the flag images */
  object-fit: contain; /* Fit the flag images within the container */
}

.flag-container p {
  margin-top: 8px; /* Add some spacing between the flags and the text below */
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
  <h2 class="text-2xl font-bold mb-4">Sejarah</h2>

  <section class="mb-8">
    <h3 class="text-xl font-bold mb-2">Pengantar Sejarah</h3>
    <p>
      Sejarah adalah kajian tentang masa lalu. Ini mencakup berbagai aktivitas manusia, peristiwa, dan perkembangan.
      Memahami sejarah memungkinkan kita belajar dari keberhasilan dan kesalahan mereka yang datang sebelum kita.
    </p>
  </section>

  <section class="mb-8">
    <h3 class="text-xl font-bold mb-2">Jenis-jenis Sejarah</h3>
    <p>
      Sejarah dapat dikategorikan menjadi berbagai jenis, seperti sejarah politik, sejarah budaya, sejarah ekonomi,
      dan sejarah sosial. Setiap jenis memberikan perspektif unik tentang masa lalu.
    </p>
  </section>

  <section class="mb-8">
    <h3 class="text-xl font-bold mb-2">Peristiwa Bersejarah Penting</h3>
    <p>
      Jelajahi peristiwa penting yang membentuk dunia, mulai dari peradaban kuno hingga zaman modern. Peristiwa ini
      memiliki dampak besar pada masyarakat dan terus memengaruhi kehidupan kita saat ini.
    </p>
  </section>

  <!-- Bagian Bendera Beranimasi -->
  <section class="mb-8">
  <h3 class="text-xl font-bold mb-2">Bendera-bendera Sepanjang Sejarah</h3>
  <div class="flex flex-wrap">
    <!-- Bendera Indonesia -->
    <div class="w-1/2 p-4 flag-container">
      <div class="flex">
        <div class="w-3/4">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAACVBMVEX/AAD/////mpofZaMdAAAAyUlEQVR4nO3QsQEAIAzAoOr/R7s3sxucwAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADfXLY5bE7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJOSkn5aSclJNyUk7KSTkpJ+WknJSTclJOykk5KSflpJyUk3JSTspJPST9Y+jj6DMKAAAAAElFTkSuQmCC">
        </div>
        <div class="w-1/4 flex flex-col items-center justify-center">
          <p class="text-center mb-2">Indonesia</p>
          <button class="bg-blue-500 text-white px-4 py-2 rounded-full">Lihat Sejarah</button>
        </div>
      </div>
    </div>

    <!-- Bendera Malaysia -->
    <div class="w-1/2 p-4 flag-container">
      <div class="flex">
        <div class="w-3/4">
          <img src="data:image/png;base64,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" alt="Bendera Malaysia" class="w-full h-auto animated-flag" data-country="Malaysia">
        </div>
        <div class="w-1/4 flex flex-col items-center justify-center">
          <p class="text-center mb-2">Malaysia</p>
          <button class="bg-blue-500 text-white px-4 py-2 rounded-full">Lihat Sejarah</button>
        </div>
      </div>
    </div>

    <!-- Tambahkan bendera lebih banyak jika diperlukan -->
  </div>
</section>

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