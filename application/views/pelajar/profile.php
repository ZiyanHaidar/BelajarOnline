
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Dashboard Belajar Online</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans">

<header class=" text-black py-4">
    <div class="container mx-auto flex justify-between items-center px-4">
        <div class="text-xl font-bold">BelajarOnline</div>
        <div class="relative">
            <a href="#" id="profileDropdownToggle" class="hover:text-gray-300">Profil</a>
            <ul class="absolute hidden text-gray-700 bg-white shadow-lg py-2 mt-1 w-40 rounded-lg right-0 top-full" id="profileDropdownMenu">
                <li><a href="<?php echo base_url('pelajar/profile'); ?>" class="hover:text-gray-300">Profil</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Pengaturan</a></li>
                <li><a href="#" onclick="confirmLogout()" class="block px-4 py-2 hover:bg-gray-100">Keluar</a></li>
            </ul>
        </div>
    </div>
</header>

  <div class="flex">
    <aside class="bg-gray-200 w-64 min-h-screen">
      <ul class="py-4">
        <li class="px-4 py-2 hover:bg-gray-300 relative">
          <a href="#" class="font-semibold" id="catalogDropdownToggle">Lihat Katalog Kursus</a>
          <ul class="absolute hidden text-gray-700 bg-white shadow-lg py-2 mt-1 w-40 rounded-lg" id="catalogDropdownMenu">
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Pilih Kursus</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Tonton Video Pembelajaran</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Kerjakan Kuis</a></li>
          </ul>
        </li>
        <li class="px-4 py-2 hover:bg-gray-300"><a href="#" class="font-semibold">Diskusi</a></li>
        <li class="px-4 py-2 hover:bg-gray-300"><a href="#" class="font-semibold">Laporan Kemajuan</a></li>
      </ul>
    </aside>

    <main class="flex-1 p-6">
      <h2 class="text-3xl font-bold mb-4">Selamat datang di Dashboard Belajar Online</h2>
      <!-- Konten lainnya -->
    </main>
  </div>

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
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <!-- LOGOUT -->
  <script>
    function confirmLogout() {
      Swal.fire({
        title: 'Yakin mau LogOut?',
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