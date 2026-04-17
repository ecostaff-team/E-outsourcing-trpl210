<div class="mt-6 bg-white p-8 rounded-lg shadow-lg border border-gray-100">
    <div class="flex items-center gap-3 mb-1">
        <i class="fas fa-search text-blue-600"></i>
        <h2 class="text-lg font-bold text-gray-800">Filter Rekap</h2>
    </div>
    <p class="text-sm text-gray-500 mb-4">Pilih vendor dan periode untuk menampilkan rekap absensi</p>

    <div class="flex flex-col md:flex-row gap-4 items-end">
        <div class="w-full md:w-1/4">
            <label class="block text-xs font-semibold text-gray-600 mb-1">Vendor / Admin Outsourcing</label>
            <select class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500">
                <option>CV Tenaga Prima</option>
                <option>PT Maju Jaya</option>
            </select>
        </div>

        <div class="w-full md:w-1/4">
            <label class="block text-xs font-semibold text-gray-600 mb-1">Bulan</label>
            <select class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500">
                <option>Maret 2026</option>
                <option>Februari 2026</option>
            </select>
        </div>

        <div class="flex gap-2 w-full md:w-auto mt-4 md:mt-0">
            <button class="bg-green-600 hover:bg-green-700 text-white font-medium text-sm px-5 py-2 rounded-lg transition">
                Tampilkan Rekap
            </button>
            <button class="bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 font-medium text-sm px-5 py-2 rounded-lg transition">
                Reset
            </button>
        </div>
    </div>
</div>
