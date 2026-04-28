<div id="rejectModal" class="fixed inset-0 z-50 hidden bg-black/50 backdrop-blur-sm transition-opacity duration-200 opacity-0 flex items-center justify-center">
    <div id="rejectModalContent" class="bg-white rounded-xl shadow-2xl w-full max-w-lg mx-4 overflow-hidden flex flex-col transform transition-transform duration-200 scale-95">

        <div class="p-4 border-b border-gray-100 flex justify-between items-center bg-gray-50">
            <h3 class="font-bold text-gray-800 text-lg flex items-center gap-2">
                <i class="fas fa-exclamation-triangle text-red-600"></i>
                Alasan Penolakan
            </h3>
            <button onclick="closeRejectModal()" class="text-gray-400 hover:text-red-500 transition-colors bg-white rounded-full w-8 h-8 flex items-center justify-center shadow-sm border border-gray-200 focus:outline-none">
                <i class="fas fa-times text-sm"></i>
            </button>
        </div>

        <div class="p-5 bg-white">
            <label for="alasanPenolakan" class="block text-sm font-medium text-gray-700 mb-2">
                Berikan alasan mengapa pengajuan ini ditolak:
            </label>
            <textarea
                id="alasanPenolakan"
                rows="4"
                class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500/20 focus:border-red-500 bg-gray-50/50 text-sm placeholder-gray-400 transition-all shadow-inner"
                placeholder="Ketik alasan penolakan di sini..."></textarea>
        </div>

        <div class="p-4 border-t border-gray-100 bg-gray-50 flex justify-end gap-3">
            <button onclick="closeRejectModal()" class="px-5 py-2.5 rounded-lg border border-gray-200 bg-white text-gray-700 hover:bg-gray-50 font-semibold text-sm flex items-center justify-center transition shadow-sm focus:outline-none">
                Batal
            </button>
            <button onclick="submitRejectAction()" class="px-6 py-2.5 rounded-lg border border-red-200 bg-red-600 text-white hover:bg-red-700 font-semibold text-sm flex items-center justify-center gap-2 transition shadow-sm focus:outline-none">
                <i class="fas fa-paper-plane"></i> Kirim Penolakan
            </button>
        </div>

    </div>
</div>
