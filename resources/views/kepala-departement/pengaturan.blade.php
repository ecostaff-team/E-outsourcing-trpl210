<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan</title>

    <link rel="icon" href="/images/logo.png">
    @vite('resources/css/app.css')

    <!-- Alpine -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>

<body class="bg-gray-100">

<div class="flex">

    <!-- SIDEBAR -->
    <x-sidebar :menus="[
        ['title' => 'Dashboard', 'icon' => 'fas fa-home', 'ref' => '/'],
        ['title' => 'Cuti & Izin', 'icon' => 'fas fa-calendar-check', 'ref' => '/cuti'],
        ['title' => 'Settings', 'icon' => 'fas fa-cog', 'ref' => '/pengaturan'],
    ]">kepala-departemen</x-sidebar>

    <div class="flex-1 p-6">

        <x-header>Kepala Departemen</x-header>

        <div x-data="pengaturanPage()" class="max-w-5xl mx-auto space-y-6 mt-4">

            <!-- HEADER -->
            <div class="flex justify-between items-center">
                <h1 class="text-xl font-bold text-gray-800">Aturan Penjadwalan</h1>

                <button @click="openCreate()"
                    class="px-4 py-2 bg-blue-600 text-white text-sm rounded-xl shadow hover:bg-blue-700 flex items-center gap-2">
                    <i class="fas fa-plus"></i>
                    Tambah Aturan
                </button>
            </div>

            <!-- LIST -->
            <div class="space-y-4">

                <template x-for="rule in rules" :key="rule.id">
                    <div class="bg-white rounded-2xl shadow-sm p-5 flex justify-between items-center hover:shadow-md transition">

                        <div>
                            <h3 class="font-semibold text-gray-800" x-text="rule.title"></h3>
                            <p class="text-sm text-gray-500 mt-1" x-text="rule.desc"></p>
                        </div>

                        <div class="flex items-center gap-3">

                            <!-- TOGGLE -->
                            <button @click="rule.active = !rule.active"
                                :class="rule.active ? 'bg-blue-600' : 'bg-gray-300'"
                                class="w-12 h-6 rounded-full flex items-center transition">
                                <div
                                    :class="rule.active ? 'translate-x-6' : 'translate-x-1'"
                                    class="w-4 h-4 bg-white rounded-full transition">
                                </div>
                            </button>

                            <!-- EDIT -->
                            <button @click="openEdit(rule)" class="text-blue-500 hover:text-blue-700">
                                <i class="fas fa-pen"></i>
                            </button>

                            <!-- DELETE -->
                            <button @click="openDelete(rule.id)" class="text-red-500 hover:text-red-700">
                                <i class="fas fa-trash"></i>
                            </button>

                        </div>

                    </div>
                </template>

            </div>

            <!-- ========================= -->
            <!-- MODAL CREATE / EDIT -->
            <!-- ========================= -->
            <div x-show="openModal" x-cloak x-transition
                class="fixed inset-0 flex items-center justify-center z-50">

                <div @click="closeModal()" class="absolute inset-0 bg-black/40 backdrop-blur-sm"></div>

                <div @click.stop
                    class="bg-white w-full max-w-md rounded-2xl shadow-lg p-6 z-10">

                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-lg font-semibold"
                            x-text="isEdit ? 'Edit Aturan' : 'Tambah Aturan'"></h2>

                        <button @click="closeModal()" class="text-gray-400 hover:text-red-500">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                    <div class="space-y-4">

                        <input type="text" x-model="form.title"
                            placeholder="Nama aturan"
                            class="w-full px-3 py-2 border rounded-lg text-sm focus:ring-2 focus:ring-blue-400 outline-none">

                        <textarea x-model="form.desc"
                            placeholder="Deskripsi"
                            class="w-full px-3 py-2 border rounded-lg text-sm focus:ring-2 focus:ring-blue-400 outline-none"></textarea>

                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Aktifkan</span>

                            <button @click="form.active = !form.active"
                                :class="form.active ? 'bg-blue-600' : 'bg-gray-300'"
                                class="w-12 h-6 rounded-full flex items-center">
                                <div
                                    :class="form.active ? 'translate-x-6' : 'translate-x-1'"
                                    class="w-4 h-4 bg-white rounded-full transition">
                                </div>
                            </button>
                        </div>

                    </div>

                    <div class="flex justify-end gap-2 mt-6">
                        <button @click="closeModal()"
                            class="px-4 py-2 bg-gray-100 rounded-lg text-sm">
                            Batal
                        </button>

                        <button @click="saveRule()"
                            class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm">
                            Simpan
                        </button>
                    </div>

                </div>
            </div>

            <!-- ========================= -->
            <!-- MODAL DELETE -->
            <!-- ========================= -->
            <div x-show="modalDelete" x-cloak x-transition
                class="fixed inset-0 flex items-center justify-center z-50">

                <div @click="closeDelete()" class="absolute inset-0 bg-black/40 backdrop-blur-sm"></div>

                <div @click.stop
                    class="bg-white w-full max-w-sm rounded-2xl shadow-lg p-6 z-10 text-center">

                    <i class="fas fa-exclamation-triangle text-red-500 text-3xl mb-3"></i>

                    <h2 class="text-lg font-semibold mb-2">Hapus Aturan</h2>

                    <p class="text-sm text-gray-500 mb-6">
                        Data tidak bisa dikembalikan. Lanjutkan?
                    </p>

                    <div class="flex gap-2">
                        <button @click="closeDelete()"
                            class="w-full bg-gray-200 py-2 rounded-lg text-sm">
                            Batal
                        </button>

                        <button @click="confirmDelete()"
                            class="w-full bg-red-600 text-white py-2 rounded-lg text-sm">
                            Hapus
                        </button>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>

<script>
function pengaturanPage() {
    return {
        openModal: false,
        modalDelete: false,
        isEdit: false,
        editId: null,
        selectedId: null,

        rules: [
            {id:1,title:'Tidak Boleh 2 Shift Berturut',desc:'Tidak boleh shift malam ke pagi',active:true},
            {id:2,title:'Batas Jam Kerja Mingguan',desc:'Max 40 jam per minggu',active:true},
            {id:3,title:'Minimal Staf per Shift',desc:'Minimal 2 orang per shift',active:true}
        ],

        form: {title:'',desc:'',active:true},

        openCreate() {
            this.isEdit = false
            this.form = {title:'',desc:'',active:true}
            this.openModal = true
        },

        openEdit(rule) {
            this.isEdit = true
            this.editId = rule.id
            this.form = {...rule}
            this.openModal = true
        },

        closeModal() {
            this.openModal = false
        },

        saveRule() {
            if (!this.form.title || !this.form.desc) {
                alert('Semua field wajib diisi')
                return
            }

            if (this.isEdit) {
                let i = this.rules.findIndex(r => r.id === this.editId)
                this.rules[i] = {...this.form}
            } else {
                this.rules.push({
                    id: Date.now(),
                    ...this.form
                })
            }

            this.closeModal()
        },

        openDelete(id) {
            this.selectedId = id
            this.modalDelete = true
        },

        confirmDelete() {
            this.rules = this.rules.filter(r => r.id !== this.selectedId)
            this.selectedId = null
            this.modalDelete = false
        },

        closeDelete() {
            this.modalDelete = false
        }
    }
}
</script>

</body>
</html>