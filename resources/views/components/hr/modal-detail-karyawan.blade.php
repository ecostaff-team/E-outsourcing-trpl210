<div id="detailModal" class="fixed inset-0 z-50 hidden bg-black/50 backdrop-blur-sm transition-opacity duration-200 opacity-0 flex items-center justify-center">
    <div id="detailModalContent" class="bg-white rounded-xl shadow-2xl w-full max-w-lg mx-4 overflow-hidden flex flex-col max-h-[90vh] transform transition-transform duration-200 scale-95">

        <div class="p-4 border-b border-gray-100 flex justify-between items-center bg-gray-50">
            <h3 class="font-bold text-gray-800 text-lg flex items-center gap-2">
                <i class="fas fa-user-tie text-green-600"></i>
                Detail Karyawan
            </h3>
            <button onclick="closeModal()" class="text-gray-400 hover:text-red-500 transition-colors bg-white rounded-full w-8 h-8 flex items-center justify-center shadow-sm border border-gray-200 focus:outline-none">
                <i class="fas fa-times text-sm"></i>
            </button>
        </div>

        <div class="p-5 overflow-y-auto custom-scrollbar flex flex-col gap-4 bg-gray-50/50">
            <div class="bg-white p-5 rounded-xl border border-gray-200 shadow-sm">
                <div class="space-y-3 text-sm">
                    <div class="flex items-center justify-between border-b border-gray-50 pb-2">
                        <span class="font-medium text-gray-500 w-1/3">NIP</span>
                        <span id="modalNip" class="font-bold text-gray-800 w-2/3 text-right"></span>
                    </div>
                    <div class="flex items-center justify-between border-b border-gray-50 pb-2">
                        <span class="font-medium text-gray-500 w-1/3">Nama Lengkap</span>
                        <span id="modalNama" class="font-bold text-gray-800 w-2/3 text-right"></span>
                    </div>
                    <div class="flex items-center justify-between border-b border-gray-50 pb-2">
                        <span class="font-medium text-gray-500 w-1/3">Email</span>
                        <span id="modalEmail" class="font-bold text-gray-800 w-2/3 text-right"></span>
                    </div>
                    <div class="flex items-center justify-between border-b border-gray-50 pb-2">
                        <span class="font-medium text-gray-500 w-1/3">Nomor Telepon</span>
                        <span id="modalTelp" class="font-bold text-gray-800 w-2/3 text-right"></span>
                    </div>
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between border-b border-gray-50 pb-2 gap-1 sm:gap-0">
                        <span class="font-medium text-gray-500 w-full sm:w-1/3">Alamat</span>
                        <span id="modalAlamat" class="font-bold text-gray-800 w-full sm:w-2/3 sm:text-right"></span>
                    </div>
                    <div class="flex items-center justify-between pt-1">
                        <span class="font-medium text-gray-500 w-1/3">Berasal dari</span>
                        <span id="modalAsal" class="font-bold text-green-700 bg-green-50 px-2 py-1 rounded-md text-xs border border-green-100 text-right"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-4 border-t border-gray-100 bg-gray-50 flex justify-end gap-3">
            <button onclick="openRejectModal()" class="px-6 py-2.5 rounded-lg border border-red-200 bg-red-50 text-red-600 hover:bg-red-100 font-semibold text-sm flex items-center justify-center gap-2 transition">
                <i class="fas fa-times"></i> Tolak
            </button>
            <button onclick="approveAction()" class="px-6 py-2.5 rounded-lg border border-green-200 bg-green-600 text-white hover:bg-green-700 font-semibold text-sm flex items-center justify-center gap-2 transition shadow-sm">
                <i class="fas fa-check"></i> Setujui
            </button>
        </div>

    </div>
</div>
