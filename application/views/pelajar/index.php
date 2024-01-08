<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Belajar Online</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    /* Atur tata letak untuk elemen header, konten, dan footer */
    main {
      padding: 2rem;
    }

    footer {
      padding: 1rem 0;
      background-color: #f0f0f0;
    }

    footer p {
      font-size: 0.85rem;
    }

    .card {
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    /* Sidebar styling */
    .sidebar {
      width: 280px;
    }

    .sidebar ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .sidebar li {
      margin-bottom: 1rem;
    }

    .sidebar a {
      display: flex;
      align-items: center;
      padding: 0.75rem 1rem;
      border-radius: 0.5rem;
      transition: all 0.3s ease;
    }

    .sidebar a:hover {
      background-color: #4b5563;
      color: #fff;
    }

    .sidebar svg {
      width: 1.5rem;
      height: 1.5rem;
      margin-right: 1rem;
    }
  </style>
</head>
<body class="bg-gray-100 font-sans">

  <header class="bg-blue-600 text-white py-4">
    <div class="container mx-auto px-4">
      <h1 class="text-3xl font-bold">Selamat Datang, [Nama Pengguna]</h1>
    </div>
  </header>

  <div class="flex container mx-auto mt-8">
    <!-- Sidebar -->
    <aside class="sidebar bg-gray-800 text-gray-100">
      <ul>
        <li>
          <a href="#" class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M3 10a7 7 0 1114 0 7 7 0 01-14 0zM0 10a10 10 0 1120 0 10 10 0 01-20 0zm7 0a3 3 0 116 0 3 3 0 01-6 0z" clip-rule="evenodd" />
            </svg>
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#" class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M3 10a7 7 0 1114 0 7 7 0 01-14 0zM0 10a10 10 0 1120 0 10 10 0 01-20 0zm7 0a3 3 0 116 0 3 3 0 01-6 0z" clip-rule="evenodd" />
            </svg>
            <span>Profil</span>
          </a>
        </li>
        <li>
          <a href="#" class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M3 10a7 7 0 1114 0 7 7 0 01-14 0zM0 10a10 10 0 1120 0 10 10 0 01-20 0zm7 0a3 3 0 116 0 3 3 0 01-6 0z" clip-rule="evenodd" />
            </svg>
            <span>Pengaturan</span>
          </a>
        </li>
        <li>
          <a href="#" class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M3 10a7 7 0 1114 0 7 7 0 01-14 0zM0 10a10 10 0 1120 0 10 10 0 01-20 0zm7 0a3 3 0 116 0 3 3 0 01-6 0z" clip-rule="evenodd" />
            </svg>
            <span>Keluar</span>
          </a>
        </li>
      </ul>
    </aside>

    <!-- Main Content -->
    <main class="flex-grow">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- Katalog Kursus -->
        <div class="bg-white rounded-lg shadow-md p-6 card hover:shadow-lg">
          <div class="course-image rounded-lg mb-4"></div>
          <h2 class="text-xl font-semibold mb-2">Kursus Bahasa Inggris</h2>
          <p class="text-gray-600">Kursus belajar Bahasa Inggris dengan materi yang komprehensif.</p>
          <a href="#" class="text-blue-500 hover:underline mt-2 block">Lihat Detail</a>
        </div>

        <!-- Diskusi -->
        <div class="bg-white rounded-lg shadow-md p-6 card hover:shadow-lg">
          <img src="https://via.placeholder.com/300" alt="Diskusi" class="rounded-lg mb-4">
          <h2 class="text-xl font-semibold mb-2">Forum Diskusi</h2>
          <p class="text-gray-600">Ajukan pertanyaan atau ikuti diskusi dengan pengguna lain.</p>
          <a href="#" class="text-blue-500 hover:underline mt-2 block">Buka Diskusi</a>
        </div>

        <!-- Laporan Kemajuan -->
        <div class="bg-white rounded-lg shadow-md p-6 card hover:shadow-lg">
          <div class="course-image rounded-lg mb-4"></div>
          <h2 class="text-xl font-semibold mb-2">Laporan Kemajuan</h2>
          <p class="text-gray-600">Pantau kemajuan belajar Anda dalam kursus yang sedang diikuti.</p>
          <a href="#" class="text-blue-500 hover:underline mt-2 block">Lihat Laporan</a>
        </div>
      </div>
    </main>
  </div>

  <footer class="text-center">
    <div class="container mx-auto">
      <p>&copy; 2024 Platform Belajar Online. All rights reserved.</p>
    </div>
  </footer>

</body>
</html>
