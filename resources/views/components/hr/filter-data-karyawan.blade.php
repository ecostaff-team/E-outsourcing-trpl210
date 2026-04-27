<div class="mt-6 bg-white p-8 pb-2 rounded-lg shadow-lg border border-gray-100">
    <div class="flex items-center gap-3 mb-1">
        <i class="fas fa-search text-blue-600"></i>
        <h2 class="text-lg font-bold text-gray-800">Filter Data Karyawan</h2>
    </div>
    <p class="text-sm text-gray-500 mb-6">Pilih asal vendor pada tabel di bawah untuk menyaring data karyawan</p>

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
            <span>Menampilkan 1-2 dari 25 vendor</span>
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
</div>
