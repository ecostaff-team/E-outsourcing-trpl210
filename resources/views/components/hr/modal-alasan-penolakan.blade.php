<div id="rejectModal" class="fixed inset-0 z-50 hidden bg-black/50 bg-opacity-60 flex items-center justify-center transition-opacity">
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-lg p-8 relative mx-4">

        <button onclick="closeRejectModal()" class="absolute top-4 right-4 text-gray-400 hover:text-gray-700 transition-colors focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <h2 class="text-2xl font-bold text-center text-gray-900 mb-6">Alasan Penolakan</h2>

        <div class="mb-6">
            <label for="alasanPenolakan" class="block text-sm font-medium text-gray-700 mb-2">Berikan alasan mengapa pengajuan ini ditolak:</label>
            <textarea id="alasanPenolakan" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500" placeholder="Ketik alasan di sini..."></textarea>
        </div>

        <div class="flex justify-end gap-3">
            <button onclick="closeRejectModal()" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-6 rounded-full transition-all">
                Batal
            </button>
            <button onclick="submitRejectAction()" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-6 rounded-full transition-all shadow-md">
                Kirim Penolakan
            </button>
        </div>
    </div>
</div>
