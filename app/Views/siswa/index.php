<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">

</head>
<body>
<!-- Navbar -->
<nav class="bg-green-700 p-4 fixed top-0 w-full z-10">
  <div class="flex items-center justify-between ml-9">
    <div class="flex items-center ml-9">
      <h1 class="text-white font-bold text-lg font-roboto text-2xl">KELAS A</h1>
    </div>
    <div class="flex items-center mr-9">
      <a href="#home" class="text-white hover:text-blue-200 hover:bg-teal-500 px-4 py-2 font-roboto font-bold">Beranda</a>
      <a href="#struktur-kelas" class="text-white hover:text-blue-200 hover:bg-teal-500 px-4 py-2 font-roboto font-bold">Struktur Kelas</a>
      <a href="#data" class="text-white hover:text-blue-200 hover:bg-teal-500 px-4 py-2 font-roboto font-bold">Data Siswa</a>
    </div>
  </div>
</nav>


<!-- Beranda -->
  <section class="home" id="home">
        <main class="content">
          <h1>Selamat Datang <span>Dikelas A!</span></h1>
          <p>
          Menciptakan Generasi Pemimpin Kreatif dan Berwawasan Luas
          </p>
        </main>
  </section>

<!-- Struktur Kelas -->
  <div class="container mx-auto mt-10" id="struktur-kelas">
    <h2 class="text-3xl font-bold mb-4 text-center font-roboto text-green-700">STRUKTUR KELAS</h2>
    <div class="grid grid-cols-2 gap-5">
      <div class="flex flex-col items-center">
        <img src="/assets/images/kepalasekolah.jpg" alt="Kepala Sekolah" class="w-40 h-40 rounded-full mb-4">
        <p class="text-center font-roboto font-bold">Kepala Sekolah</p>
      </div>
      <div class="flex flex-col items-center">
        <img src="/assets/images/wali.jpg" alt="Wali Kelas" class="w-40 h-40 rounded-full mb-4">
        <p class="text-center font-roboto font-bold">Wali Kelas</p>
      </div>
      <div class="flex flex-col items-center">
        <img src="/assets/images/ketua.jpeg" alt="Ketua Kelas" class="w-40 h-40 rounded-full mb-4">
        <p class="text-center font-roboto font-bold">Ketua Kelas</p>
      </div>
      <div class="flex flex-col items-center">
        <img src="/assets/images/bendahara.jpg" alt="Bendahara" class="w-40 h-40 rounded-full mb-4">
        <p class="text-center font-roboto font-bold">Bendahara</p>
      </div>
    </div>
  </div>

<!-- Form pencarian -->
  <div id="data" class="mt-10">
  <form action="/siswa/search" method="get" class="my-4 text-center" >
      <input type="text" name="keyword" placeholder="Cari siswa..." class="border border-gray-300 px-4 py-2 rounded-md">
      <button type="submit" class="bg-green-700 text-white px-4 py-2 rounded-md ml-2">Cari</button>
  </form>
  </div>

<!-- Tabel siswa -->
<div class="w-3/4 mx-auto">  
  <a href="/siswa/create" class="bg-green-700 text-white px-4 py-2 rounded-md block mx-auto mt-10 mb-5 max-w-max">Tambah</a>

    <table class="border-collapse w-full">
    <thead>
        <tr>
            <th class="py-2 px-4 bg-gray-100 border-b">Nama</th>
            <th class="py-2 px-4 bg-gray-100 border-b">Kelas</th>
            <th class="py-2 px-4 bg-gray-100 border-b">Tanggal Lahir</th>
            <th class="py-2 px-4 bg-gray-100 border-b">Alamat</th>
            <th class="py-2 px-4 bg-gray-100 border-b">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($siswa as $row) : ?>
            <tr class="hover:bg-gray-100">
                <td class="py-2 px-4 border-b"><?= $row['nama']; ?></td>
                <td class="py-2 px-4 border-b"><?= $row['kelas']; ?></td>
                <td class="py-2 px-4 border-b"><?= $row['tanggal_lahir']; ?></td>
                <td class="py-2 px-4 border-b"><?= $row['alamat']; ?></td>
                <td class="py-2 px-4 border-b">
                    <a href="/siswa/edit/<?= $row['id']; ?>" class="text-blue-500 hover:text-blue-700">Edit</a>
                    <a href="/siswa/delete/<?= $row['id']; ?>" class="text-red-500 hover:text-red-700 ml-2">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
</div>

</body>
</html>
