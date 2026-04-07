<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://unpkg.com/lucide@latest"></script>

    <title>Document</title>
</head>

<body class="bg-gray-100" style="font-family: 'Poppins', sans-serif;">

<!-- TOPBAR -->
<div class="bg-gradient-to-r from-green-900 to-green-700 px-10 h-16 flex items-center justify-between text-white shadow">
  <div class="flex items-center gap-3">
    <div class="w-9 h-9 bg-white/20 rounded-lg flex items-center justify-center">🌿</div>
    <div>
      <h1 class="text-sm font-extrabold">OutsourceMS</h1>
      <p class="text-[11px] text-green-200">Sistem Manajemen Tenaga Outsourcing</p>
    </div>
  </div>
  <div class="bg-white/10 px-4 py-1.5 rounded-lg flex items-center gap-2 border border-white/20">
    <div class="w-7 h-7 bg-green-400 rounded-full flex items-center justify-center text-green-900 font-bold text-xs">SA</div>
    <span class="text-sm font-semibold">Super Admin</span>
  </div>
</div>


<div class="p-4 md:p-8 lg:p-10">
  <h1 class="text-2xl font-semibold">Kelola Akun Pengguna</h1>
  <p class="text-sm text-gray-500 mb-4">Tambah, ubah, dan hapus akun Admin Outsourcing, HR, dan Kepala Departemen</p>

  

<div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
  <div class="bg-white rounded-xl p-4 shadow flex items-center gap-4 border border-gray-200">
    <div class="w-12 h-12 bg-pink-100 flex items-center justify-center rounded-xl">
      <i class="fas fa-user text-pink-600 text-lg"></i>
    </div>
    <div>
      <p class="text-xs text-gray-500">Admin Outsourcing</p>
      <h3 class="text-xl font-bold text-gray-800">7</h3>
    </div>
  </div>

  <div class="bg-white rounded-xl p-4 shadow flex items-center gap-4 border border-gray-200">
    <div class="w-12 h-12 bg-yellow-100 flex items-center justify-center rounded-xl">
      <i class="fas fa-user-tie text-yellow-600 text-lg"></i>
    </div>
    <div>
      <p class="text-xs text-gray-500">HR</p>
      <h3 class="text-xl font-bold text-gray-800">5</h3>
    </div>
  </div>

  <div class="bg-white rounded-xl p-4 shadow flex items-center gap-4 border border-gray-200">
    <div class="w-12 h-12 bg-gray-100 flex items-center justify-center rounded-xl">
      <i class="fas fa-chalkboard-teacher text-gray-600 text-lg"></i>
    </div>
    <div>
      <p class="text-xs text-gray-500">Kepala Departemen</p>
      <h3 class="text-xl font-bold text-gray-800">6</h3>
    </div>
  </div>

  <div class="bg-green-50 rounded-xl p-4 shadow flex items-center gap-4 border border-green-200">
    <div class="w-12 h-12 bg-green-200 flex items-center justify-center rounded-xl">
      <i class="fas fa-users text-green-600 text-lg"></i>
    </div>
    <div>
      <p class="text-xs text-gray-500">Total</p>
      <h3 class="text-xl font-bold text-green-700">18</h3>
    </div>
  </div>
</div>

  <!-- TABS -->
<div class="bg-white px-4 md:px-10 border-gray-200 border-b border-t flex gap-6 text-sm overflow-x-auto">
  <button class="py-3 border-b-2 border-green-600 text-green-700 font-semibold">Admin Outsourcing</button>
  <button class="py-3 text-gray-500">HR Perusahaan</button>
  <button class="py-3 text-gray-500">Kepala Departemen</button>
</div>



  <div class="bg-white p-8 rounded-lg shadow-lg mt-6">
    <div class="flex flex-col md:flex-row md:justify-between gap-3 mb-4">
      <div class="flex flex-col sm:flex-row gap-2">
        <input type="text" placeholder="Cari nama atau email" class="border rounded-lg px-3 py-2 text-sm w-64 focus:ring-2 focus:ring-green-500 outline-none">
        <select class="border rounded-lg px-3 py-2 text-sm w-64 focus:ring-2 focus:ring-green-500 outline-none">
          <option>Semua Status</option>
          <option>Aktif</option>
          <option>Nonaktif</option>
        </select>
      </div>
      <button class="bg-green-600 shadow-lg text-white px-4 py-2 rounded-lg text-sm">+ Tambah Akun</button>
    </div>

    <div class="overflow-x-auto">
  <table class="w-full text-sm border-separate border-spacing-y-2">
    
    <thead class="bg-gray-100 text-gray-600">
      <tr class=" shadow-sm hover:shadow-md hover:-translate-y-0.5 transition cursor-pointer border border-gray-100">
        <th class="p-2 md:p-3 text-left text-xs md:text-sm">NO</th>
        <th class="p-2 md:p-3 text-left text-xs md:text-sm">NAMA PENGGUNA</th>
        <th class="p-2 md:p-3 text-left text-xs md:text-sm">EMAIL</th>
        <th class="p-2 md:p-3 text-left text-xs md:text-sm">STATUS</th>
        <th class="p-2 md:p-3 text-left text-xs md:text-sm">NO TELP</th>
        <th class="p-2 md:p-3 text-left text-xs md:text-sm">DIBUAT</th>
        <th class="p-2 md:p-3 text-center text-xs md:text-sm">AKSI</th>
      </tr>
    </thead>

    <tbody id="userTable"></tbody>

  </table>
</div>

    <div class="flex justify-end mt-4 gap-1 text-sm">
      <button class="px-3 py-1 border rounded">Previous</button>
      <button class="px-3 py-1 bg-green-600 text-white rounded">1</button>
      <button class="px-3 py-1 border rounded">2</button>
      <button class="px-3 py-1 border rounded">3</button>
      <button class="px-3 py-1 border rounded">Next</button>
    </div>
  </div>
</div>

<script>
const table = document.getElementById('userTable');


table.innerHTML = `
<tr onclick="rowClick('Rizky')" class="bg-white shadow-sm hover:bg-green-50 cursor-pointer">
  <td class="p-3">1</td>
  <td class="p-3">Rizky Darmawan</td>
  <td class="p-3">rizky.darmawan@vendor.co.id</td>
  <td class="p-3"><span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs">Aktif</span></td>
  <td class="p-3">085762360846</td>
  <td class="p-3">10 Apr 2026</td>
  <td class="p-3 text-center">
    <button class="bg-yellow-400 px-2 py-1 rounded"><i class="fas fa-pen"></i></button>
    <button class="bg-red-500 text-white px-2 py-1 rounded"><i class="fas fa-trash"></i></button>
  </td>
</tr>
<tr onclick="rowClick('Carmen')" class="bg-white shadow-sm hover:bg-green-50 cursor-pointer">
  <td class="p-3">2</td>
  <td class="p-3">Carmen Ayu</td>
  <td class="p-3">carmen.ayu@vendor.co.id</td>
  <td class="p-3"><span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs">Aktif</span></td>
  <td class="p-3">089677228168</td>
  <td class="p-3">10 Apr 2026</td>
  <td class="p-3 text-center">
    <button class="bg-yellow-400 px-2 py-1 rounded"><i class="fas fa-pen"></i></button>
    <button class="bg-red-500 text-white px-2 py-1 rounded"><i class="fas fa-trash"></i></button>
  </td>
</tr>
<tr onclick="rowClick('Rizky')" class="bg-white shadow-sm hover:bg-green-50 cursor-pointer">
  <td class="p-3">3</td>
  <td class="p-3">Rizky Darmawan</td>
  <td class="p-3">rizky.darmawan@vendor.co.id</td>
  <td class="p-3"><span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs">Aktif</span></td>
  <td class="p-3">085762360846</td>
  <td class="p-3">10 Apr 2026</td>
  <td class="p-3 text-center">
    <button class="bg-yellow-400 px-2 py-1 rounded"><i class="fas fa-pen"></i></button>
    <button class="bg-red-500 text-white px-2 py-1 rounded"><i class="fas fa-trash"></i></button>
  </td>
</tr>
<tr onclick="rowClick('Carmen')" class="bg-white shadow-sm hover:bg-green-50 cursor-pointer">
  <td class="p-3">4</td>
  <td class="p-3">Carmen Ayu</td>
  <td class="p-3">carmen.ayu@vendor.co.id</td>
  <td class="p-3"><span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs">Aktif</span></td>
  <td class="p-3">089677228168</td>
  <td class="p-3">10 Apr 2026</td>
  <td class="p-3 text-center">
    <button class="bg-yellow-400 px-2 py-1 rounded"><i class="fas fa-pen"></i></button>
    <button class="bg-red-500 text-white px-2 py-1 rounded"><i class="fas fa-trash"></i></button>
  </td>
</tr>
<tr onclick="rowClick('Rizky')" class="bg-white shadow-sm hover:bg-green-50 cursor-pointer">
  <td class="p-3">5</td>
  <td class="p-3">Rizky Darmawan</td>
  <td class="p-3">rizky.darmawan@vendor.co.id</td>
  <td class="p-3"><span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs">Aktif</span></td>
  <td class="p-3">085762360846</td>
  <td class="p-3">10 Apr 2026</td>
  <td class="p-3 text-center">
    <button class="bg-yellow-400 px-2 py-1 rounded"><i class="fas fa-pen"></i></button>
    <button class="bg-red-500 text-white px-2 py-1 rounded"><i class="fas fa-trash"></i></button>
  </td>
</tr>
<tr onclick="rowClick('Carmen')" class="bg-white shadow-sm hover:bg-green-50 cursor-pointer">
  <td class="p-3">6</td>
  <td class="p-3">Carmen Ayu</td>
  <td class="p-3">carmen.ayu@vendor.co.id</td>
  <td class="p-3"><span class="bg-red-100 text-red-600 px-2 py-1 rounded text-xs">Tidak Aktif</span></td>
  <td class="p-3">089677228168</td>
  <td class="p-3">10 Apr 2026</td>
  <td class="p-3 text-center">
    <button class="bg-yellow-400 px-2 py-1 rounded"><i class="fas fa-pen"></i></button>
    <button class="bg-red-500 text-white px-2 py-1 rounded"><i class="fas fa-trash"></i></button>
  </td>
</tr>
`;

function rowClick(nama){
alert('Klik user: ' + nama)
}


</script>



</body>
</html>