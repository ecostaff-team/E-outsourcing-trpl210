<div class="mt-6 bg-white p-8 rounded-lg shadow-lg border border-gray-100">
    <div class="flex items-center gap-3 mb-1">
        <i class="fas fa-search text-blue-600"></i>
        <h2 class="text-lg font-bold text-gray-800">Filter Rekap</h2>
    </div>
    <p class="text-sm text-gray-500 mb-6">Pilih vendor pada tabel di bawah, lalu tentukan periode untuk menampilkan rekap
        absensi</p>

    <div class="w-full mb-6">
        <label class="block text-xs font-semibold text-gray-600 mb-2">Pilih Vendor / Admin Outsourcing</label>

        <div class="overflow-y-auto max-h-64 border border-gray-200 rounded-lg shadow-inner mb-3">
            <table class="min-w-full text-left text-sm text-gray-600">
                <thead class="bg-gray-50 sticky top-0 border-b border-gray-200 z-10 shadow-sm">
                    <tr>
                        <th class="px-4 py-3 font-semibold text-gray-700 w-12 text-center">Pilih</th>
                        <th class="px-4 py-3 font-semibold text-gray-700">Nama Vendor</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 bg-white">
                    <tr class="hover:bg-green-50 transition cursor-pointer">
                        <td class="px-4 py-3 text-center">
                            <input type="radio" name="vendor_id" value="1"
                                class="w-4 h-4 text-green-600 focus:ring-green-500 cursor-pointer">
                        </td>
                        <td class="px-4 py-3 font-medium text-gray-800">PT. Chemistry Jaya</td>

                    </tr>
                    <tr class="hover:bg-green-50 transition cursor-pointer">
                        <td class="px-4 py-3 text-center">
                            <input type="radio" name="vendor_id" value="2"
                                class="w-4 h-4 text-green-600 focus:ring-green-500 cursor-pointer">
                        </td>
                        <td class="px-4 py-3 font-medium text-gray-800">PT. TechSolution</td>

                    </tr>
                    <tr class="hover:bg-green-50 transition cursor-pointer">
                        <td class="px-4 py-3 text-center">
                            <input type="radio" name="vendor_id" value="2"
                                class="w-4 h-4 text-green-600 focus:ring-green-500 cursor-pointer">
                        </td>
                        <td class="px-4 py-3 font-medium text-gray-800">PT. GlobalMaju</td>

                    </tr>
                    <tr class="hover:bg-green-50 transition cursor-pointer">
                        <td class="px-4 py-3 text-center">
                            <input type="radio" name="vendor_id" value="2"
                                class="w-4 h-4 text-green-600 focus:ring-green-500 cursor-pointer">
                        </td>
                        <td class="px-4 py-3 font-medium text-gray-800">PT. CreativeDev</td>

                    </tr>
                </tbody>
            </table>
        </div>

        <div
            class="flex items-center gap-4 shrink-0 w-full lg:w-auto justify-between lg:justify-end mt-2 lg:mt-0 text-xs text-gray-500">
            <span>Menampilkan 1-4 dari 4 vendor</span>
            <div class="flex gap-1">
                <div
                    class="bg-green-700 text-white w-7 h-7 flex items-center justify-center rounded-lg shadow-sm font-medium cursor-pointer">
                    1
                </div>
                <div
                    class="bg-white border border-gray-200 text-gray-600 hover:bg-gray-50 w-7 h-7 flex items-center justify-center rounded-lg shadow-sm font-medium cursor-pointer transition">
                    2
                </div>
            </div>
        </div>
    </div>

    <hr class="border-gray-100 mb-6">

    <div class="flex flex-col md:flex-row gap-4 md:items-end">
        <div class="w-full md:w-auto">
            <label class="block text-xs font-semibold text-gray-600 mb-1">Bulan</label>
            <input type="date" id="start_date" name="start_date"
                class="w-full md:w-56 border rounded-lg px-3 py-2 text-sm text-gray-700 transition-all focus:ring-2 focus:ring-green-500 outline-none bg-white shadow-sm cursor-pointer"
                title="Tanggal Mulai">
        </div>

        <div class="flex flex-row gap-2 w-full md:w-auto">
            <button
                class="flex-1 md:flex-none bg-green-600 hover:bg-green-700 text-white font-medium text-sm px-5 py-2 rounded-lg transition shadow-sm text-center">
                Tampilkan Rekap
            </button>
            <button
                class="flex-1 md:flex-none bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 font-medium text-sm px-5 py-2 rounded-lg transition shadow-sm text-center">
                Reset
            </button>
        </div>
    </div>
</div>
