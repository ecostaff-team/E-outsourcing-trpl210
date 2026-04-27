<div id="documentModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm transition-opacity duration-200 opacity-0">
    <div class="bg-white rounded-xl shadow-2xl w-full max-w-md md:max-w-2xl mx-4 overflow-hidden flex flex-col max-h-[90vh] transform transition-transform duration-200 scale-95" id="documentModalContent">

        <div class="p-4 border-b border-gray-100 flex justify-between items-center bg-gray-50">
            <h3 class="font-bold text-gray-800 text-lg flex items-center gap-2">
                <i class="fas fa-folder-open text-green-600"></i>
                Dokumen Bukti: <span id="modalEmployeeName" class="text-green-700 underline decoration-green-300 decoration-2 underline-offset-4"></span>
            </h3>
            <button onclick="closeModal()" class="text-gray-400 hover:text-red-500 transition-colors bg-white rounded-full w-8 h-8 flex items-center justify-center shadow-sm border border-gray-200 focus:outline-none">
                <i class="fas fa-times text-sm"></i>
            </button>
        </div>

        <div id="modalDocumentContent" class="p-5 overflow-y-auto custom-scrollbar flex flex-col gap-4 bg-gray-50/50">
        </div>

        <div class="p-4 border-t border-gray-100 bg-white flex justify-end">
            <button onclick="closeModal()" class="px-5 py-2.5 rounded-lg border border-gray-200 bg-white text-gray-700 hover:bg-gray-50 font-semibold text-sm flex items-center justify-center transition shadow-sm gap-2 focus:outline-none">
                Tutup
            </button>
        </div>

    </div>
</div>

<script>
    // 1. Siapkan Dummy Data Surat Sakit/Izin berdasarkan Nama Karyawan
    const dummyDocuments = {
        'Rizky Darmawan': [{
            type: 'Izin',
            date: '10 Maret 2026',
            reason: 'Acara Keluarga (Pernikahan Saudara)',
            status: 'Disetujui'
        }],
        'Siti Aminah': [{
                type: 'Sakit',
                date: '06 Maret 2026',
                reason: 'Demam & Flu Berat',
                status: 'Disetujui',
                attachment: 'Surat_Dokter_Klinik.jpg'
            },
            {
                type: 'Sakit',
                date: '07 Maret 2026',
                reason: 'Demam & Flu Berat (Lanjutan)',
                status: 'Disetujui'
            }
        ],
        'Budi Santoso': [{
                type: 'Sakit',
                date: '04 Maret 2026',
                reason: 'Cek Darah (Tipus)',
                status: 'Disetujui',
                attachment: 'Hasil_Lab_Puskesmas.pdf'
            },
            {
                type: 'Izin',
                date: '21 Maret 2026',
                reason: 'Mengurus Perpanjangan SIM',
                status: 'Menunggu Persetujuan'
            }
        ]
    };

    // Variabel global untuk menyimpan state modal
    const documentModal = document.getElementById('documentModal');
    const documentModalBox = document.getElementById('documentModalContent');

    // 2. Fungsi untuk Membuka Modal dengan Animasi
    function openModal(employeeName) {
        document.getElementById('modalEmployeeName').innerText = employeeName;
        const contentContainer = document.getElementById('modalDocumentContent'); // Disesuaikan ID-nya agar tidak bentrok
        contentContainer.innerHTML = '';

        const docs = dummyDocuments[employeeName] || [];

        if (docs.length === 0) {
            contentContainer.innerHTML = `
            <div class="text-center py-8">
                <i class="fas fa-box-open text-4xl text-gray-300 mb-3"></i>
                <p class="text-gray-500 font-medium text-sm">Tidak ada catatan dokumen (Sakit/Izin) untuk karyawan ini.</p>
            </div>`;
        } else {
            docs.forEach(doc => {
                const isSakit = doc.type === 'Sakit';
                const icon = isSakit ? 'fa-notes-medical text-yellow-600' : 'fa-envelope-open-text text-blue-600';
                const bgClass = isSakit ? 'bg-yellow-50 border-yellow-200' : 'bg-blue-50 border-blue-200';
                const statusColor = doc.status === 'Disetujui' ?
                    'bg-green-100 text-green-700 border-green-200' :
                    'bg-orange-100 text-orange-700 border-orange-200';

                let attachmentHTML = '';
                if (doc.attachment) {
                    attachmentHTML = `
                    <div class="mt-3 p-3 bg-white border border-dashed border-gray-300 rounded-lg flex items-center justify-between group">
                        <div class="flex items-center gap-2 text-sm text-gray-600">
                            <i class="fas fa-paperclip text-gray-400"></i>
                            <span class="truncate w-40 md:w-auto font-medium">${doc.attachment}</span>
                        </div>
                        <button class="text-xs bg-gray-50 hover:bg-green-50 px-3 py-1.5 rounded border border-gray-200 hover:border-green-300 text-gray-700 hover:text-green-700 font-semibold transition-colors flex items-center gap-1">
                            <i class="fas fa-eye"></i> Lihat
                        </button>
                    </div>
                `;
                }

                const cardHTML = `
                <div class="p-4 rounded-xl border ${bgClass} shadow-sm relative transition-all hover:shadow-md bg-white">
                    <span class="absolute top-4 right-4 text-[10px] font-bold px-2.5 py-1 rounded-md border ${statusColor}">
                        ${doc.status}
                    </span>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full ${isSakit ? 'bg-yellow-100' : 'bg-blue-100'} flex items-center justify-center shrink-0 border ${isSakit ? 'border-yellow-200' : 'border-blue-200'}">
                            <i class="fas ${icon} text-xl"></i>
                        </div>
                        <div class="flex-1 w-full pt-1">
                            <h4 class="font-bold text-gray-800 text-sm">Surat ${doc.type}</h4>
                            <p class="text-xs text-gray-500 mt-1 flex items-center gap-1">
                                <i class="far fa-calendar-alt"></i> ${doc.date}
                            </p>
                            <p class="text-sm text-gray-700 mt-2 font-medium bg-gray-50 inline-block px-3 py-1.5 rounded-md border border-gray-100">
                                <span class="text-gray-500 text-xs block mb-0.5">Keterangan:</span>
                                ${doc.reason}
                            </p>
                            ${attachmentHTML}
                        </div>
                    </div>
                </div>
            `;
                contentContainer.innerHTML += cardHTML;
            });
        }

        // Hapus hidden, lalu berikan sedikit jeda untuk memicu transisi CSS
        documentModal.classList.remove('hidden');
        setTimeout(() => {
            documentModal.classList.remove('opacity-0');
            documentModalBox.classList.remove('scale-95');
            documentModalBox.classList.add('scale-100');
        }, 10);
    }

    // 3. Fungsi untuk Menutup Modal dengan Animasi
    function closeModal() {
        // Memicu efek fade-out dan scale-down
        documentModal.classList.add('opacity-0');
        documentModalBox.classList.remove('scale-100');
        documentModalBox.classList.add('scale-95');

        // Menunggu transisi selesai sebelum menambahkan class 'hidden'
        setTimeout(() => {
            documentModal.classList.add('hidden');
        }, 200); // Sesuai dengan durasi transition (200ms)
    }

    // 4. Fitur Menutup Modal saat area di luar box diklik
    documentModal.addEventListener('click', function(event) {
        if (event.target === documentModal) {
            closeModal();
        }
    });

    // 5. Fitur Menutup Modal menggunakan tombol 'Escape' pada keyboard
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && !documentModal.classList.contains('hidden')) {
            closeModal();
        }
    });
</script>
