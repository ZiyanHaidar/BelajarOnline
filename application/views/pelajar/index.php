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
    
  </style>
</head>

<body class="bg-gray-100 font-sans">

  <header class="text-black py-4">
    <div class="container mx-auto flex justify-between items-center px-4">
      <a href="<?php echo base_url('pelajar'); ?>"><div class="text-xl font-bold">BelajarOnline</div></a>
      <ul class="flex py-4">
        <li class="px-4 py-2 hover:bg-gray-300 relative">
          <a href="#" class="font-semibold" id="catalogDropdownToggle">Lihat Katalog Kursus</a>
          <ul class="absolute hidden text-gray-700 bg-white shadow-lg py-2 mt-1 w-100 rounded-lg" id="catalogDropdownMenu">
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
                                        <img src="<?php echo base_url('images/user/' . $user->image) ?>"
                                            alt="profileImg">
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
  <ul class="absolute hidden text-gray-700 bg-white shadow-lg py-2 mt-1 w-35 rounded-lg right-0 top-full" id="profileDropdownMenu">
    <li><a href="<?php echo base_url('pelajar/profile'); ?>" class="block px-4 py-2 hover:bg-gray-100">Profil</a></li>
    <li><a href="#" onclick="confirmLogout()" class="block px-4 py-2 hover:bg-gray-100">Keluar</a></li>
  </ul>
</div>
      </div>
    </div>
  </header>

  <main class="container mx-auto mt-8">
    <h2 class="text-2xl font-semibold mb-4">Mata Pelajaran Unggulan</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
      <!-- Course Cards or Thumbnails -->
      <div class="bg-white p-4 rounded-md shadow-md">
        <h3 class="text-lg font-semibold mb-2">Matematika</h3>
        <p class="text-gray-600 mb-4">Deskripsi Mata Pelajaran: Lorem ipsum dolor sit amet...</p>
        <a href="#" class="text-blue-500">Pelajari lebih lanjut</a>
      </div>
      <div class="bg-white p-4 rounded-md shadow-md">
        <h3 class="text-lg font-semibold mb-2">Bahasa Inggris</h3>
        <p class="text-gray-600 mb-4">Deskripsi Mata Pelajaran: Lorem ipsum dolor sit amet...</p>
        <a href="#" class="text-blue-500">Pelajari lebih lanjut</a>
      </div>
      <div class="bg-white p-4 rounded-md shadow-md">
        <h3 class="text-lg font-semibold mb-2">Sains</h3>
        <p class="text-gray-600 mb-4">Deskripsi Mata Pelajaran: Lorem ipsum dolor sit amet...</p>
        <a href="#" class="text-blue-500">Pelajari lebih lanjut</a>
      </div>
      <div class="bg-white p-4 rounded-md shadow-md">
        <h3 class="text-lg font-semibold mb-2">Sejarah</h3>
        <p class="text-gray-600 mb-4">Deskripsi Mata Pelajaran: Lorem ipsum dolor sit amet...</p>
        <a href="#" class="text-blue-500">Pelajari lebih lanjut</a>
      </div>

      <!-- Repeat for other subjects -->

    </div>

    <div class="mt-8">
      <h2 class="text-2xl font-semibold mb-4">Kategori Mata Pelajaran</h2>

      <ul class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <!-- Subject Categories -->
        <li class="bg-white p-4 rounded-md shadow-md">
          <h3 class="text-lg font-semibold mb-2">Matematika Lanjutan</h3>
          <a href="#" class="text-blue-500">Lihat Mata Pelajaran</a>
        </li>

        <li class="bg-white p-4 rounded-md shadow-md">
          <h3 class="text-lg font-semibold mb-2">Bahasa Asing</h3>
          <a href="#" class="text-blue-500">Lihat Mata Pelajaran</a>
        </li>

        <li class="bg-white p-4 rounded-md shadow-md">
          <h3 class="text-lg font-semibold mb-2">Sains Terapan</h3>
          <a href="#" class="text-blue-500">Lihat Mata Pelajaran</a>
        </li>

        <li class="bg-white p-4 rounded-md shadow-md">
          <h3 class="text-lg font-semibold mb-2">Kajian Budaya</h3>
          <a href="#" class="text-blue-500">Lihat Mata Pelajaran</a>
        </li>
      </ul>
    </div>
</main>


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
