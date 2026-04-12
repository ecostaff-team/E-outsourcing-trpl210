<div id="detailModal" class="fixed inset-0 z-50 hidden bg-black/50 bg-opacity-60 flex items-center justify-center transition-opacity">
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-lg p-8 relative mx-4">
        
        <h2 class="text-2xl font-bold text-center text-gray-900 mb-8">Detail Karyawan</h2>

        <div class="space-y-4 text-gray-800">
            <div class="grid grid-cols-12 gap-2">
                <span class="col-span-5 font-bold">NIP</span>
                <span class="col-span-1 text-center">:</span>
                <span id="modalNip" class="col-span-6 font-medium text-gray-700 text-sm"></span>
            </div>
            <div class="grid grid-cols-12 gap-2">
                <span class="col-span-5 font-bold">Nama Lengkap</span>
                <span class="col-span-1 text-center">:</span>
                <span id="modalNama" class="col-span-6 font-medium text-gray-700 text-sm"></span>
            </div>
            <div class="grid grid-cols-12 gap-2">
                <span class="col-span-5 font-bold">Email</span>
                <span class="col-span-1 text-center">:</span>
                <span id="modalEmail" class="col-span-6 font-medium text-gray-700 text-sm"></span>
            </div>
            <div class="grid grid-cols-12 gap-2">
                <span class="col-span-5 font-bold">Nomor Telepon</span>
                <span class="col-span-1 text-center">:</span>
                <span id="modalTelp" class="col-span-6 font-medium text-gray-700 text-sm"></span>
            </div>
            <div class="grid grid-cols-12 gap-2">
                <span class="col-span-5 font-bold">Alamat</span>
                <span class="col-span-1 text-center">:</span>
                <span id="modalAlamat" class="col-span-6 font-medium text-gray-700 text-sm"></span>
            </div>
            <div class="grid grid-cols-12 gap-2">
                <span class="col-span-5 font-bold">Berasal dari</span>
                <span class="col-span-1 text-center">:</span>
                <span id="modalAsal" class="col-span-6 font-medium text-gray-700 text-sm"></span>
            </div>
        </div>

        <div class="mt-10 flex justify-between gap-4 px-4">
            <button onclick="closeModal()" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2.5 px-10 rounded-full transition-all shadow-md">
                Tolak
            </button>
            <button onclick="approveAction()" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2.5 px-10 rounded-full transition-all shadow-md">
                Setuju
            </button>
        </div>
    </div>
</div>

