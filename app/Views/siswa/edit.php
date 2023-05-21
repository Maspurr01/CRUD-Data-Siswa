<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
<div class="flex justify-center items-center h-screen">
  <form action="/siswa/update/<?= $siswa['id']; ?>" method="post" class="w-1/2 bg-gray-100 p-8 border border-gray-200 rounded-lg">
    <label for="nama" class="block mb-2">Nama:</label>
    <input type="text" name="nama" value="<?= $siswa['nama']; ?>" required class="border border-gray-300 px-4 py-2 mb-4 w-full">

    <label for="kelas" class="block mb-2">Kelas:</label>
    <input type="text" name="kelas" value="<?= $siswa['kelas']; ?>" required class="border border-gray-300 px-4 py-2 mb-4 w-full">

    <label for="tanggal_lahir" class="block mb-2">Tanggal Lahir:</label>
    <input type="date" name="tanggal_lahir" value="<?= $siswa['tanggal_lahir']; ?>" required class="border border-gray-300 px-4 py-2 mb-4 w-full">

    <label for="alamat" class="block mb-2">Alamat:</label>
    <textarea name="alamat" required class="border border-gray-300 px-4 py-2 mb-4 w-full"><?= $siswa['alamat']; ?></textarea>

    <div class="flex justify-center">
    <input type="submit" value="Simpan" class="bg-green-700 text-white px-4 py-2 rounded-md">
    </div>
  </form>
</div>
</body>
</html>

