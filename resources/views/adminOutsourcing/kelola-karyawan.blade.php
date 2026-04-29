@extends('layouts.admin-outsourcing')

@section('content')
    <div x-data="modalKaryawan()" class="p-6">

        {{-- HEADER --}}
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 mb-6">
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-semibold text-gray-800">Data Karyawan</h2>

                <div class="relative">
                    <input type="text" x-model="search" placeholder="Cari karyawan..."
                        class="pl-10 pr-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-green-400 focus:outline-none text-sm">
                    <span class="absolute left-3 top-2.5 text-gray-400 text-sm">🔍</span>
                </div>
            </div>
        </div>

        {{-- TABLE --}}
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <table class="w-full text-sm">
                <thead class="bg-gray-50 text-gray-500 uppercase text-xs tracking-wide">
                    <tr>
                        <th class="px-6 py-4 text-left">No</th>
                        <th class="px-6 py-4 text-left">Nama</th>
                        <th class="px-6 py-4 text-left">Email</th>
                        <th class="px-6 py-4 text-left">Telepon</th>
                        <th class="px-6 py-4 text-left">Alamat</th>
                        <th class="px-6 py-4 text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody class="divide-y">
                    <template x-for="(karyawan, index) in filteredKaryawans()" :key="karyawan.id">
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 text-gray-500" x-text="index + 1"></td>

                            <td class="px-6 py-4">
                                <div class="font-medium text-gray-800" x-text="karyawan.nama_lengkap"></div>
                                <div class="text-xs text-gray-400" x-text="karyawan.nim"></div>
                            </td>

                            <td class="px-6 py-4 text-gray-600" x-text="karyawan.email"></td>
                            <td class="px-6 py-4 text-gray-600" x-text="karyawan.nomor_telepon"></td>
                            <td class="px-6 py-4 text-gray-500 truncate max-w-xs" x-text="karyawan.alamat"></td>

                            <td class="px-6 py-4">
                                <div class="flex justify-center gap-2">

                                    <button @click="open('detail', karyawan)"
                                        class="w-9 h-9 flex items-center justify-center rounded-lg bg-gray-100 hover:bg-gray-200 transition">
                                        👁️
                                    </button>

                                    <button @click="open('edit', karyawan)"
                                        class="w-9 h-9 flex items-center justify-center rounded-lg bg-blue-100 hover:bg-blue-200 text-blue-600 transition">
                                        ✏️
                                    </button>

                                    <button @click="open('delete', karyawan)"
                                        class="w-9 h-9 flex items-center justify-center rounded-lg bg-red-100 hover:bg-red-200 text-red-600 transition">
                                        🗑️
                                    </button>

                                </div>
                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>

        {{-- MODAL BASE STYLE --}}
        <template x-if="modal">
            <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/40 backdrop-blur-sm">

                {{-- DETAIL --}}
                <div x-show="modal === 'detail'" x-transition class="bg-white rounded-2xl shadow-xl w-full max-w-md p-6">
                    
                    {{-- HEADER --}}
                    <div class="flex items-center gap-4 mb-5">
                        <div
                            class="w-12 h-12 rounded-xl bg-gradient-to-br from-green-400 to-emerald-500 text-white flex items-center justify-center font-semibold text-lg shadow-md">
                            <span x-text="selected.nama_lengkap?.charAt(0)"></span>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-gray-800" x-text="selected.nama_lengkap"></h3>
                            <p class="text-xs text-gray-400" x-text="selected.nim"></p>
                        </div>

                        <button @click="close()" class="ml-auto text-gray-400 hover:text-gray-600 transition">
                            ✖
                        </button>
                    </div>

                    {{-- CONTENT --}}
                    <div class="grid grid-cols-1 gap-4 text-sm">

                        <div class="bg-gray-50 rounded-xl p-3">
                            <p class="text-xs text-gray-400 mb-1">Email</p>
                            <p class="font-medium text-gray-700" x-text="selected.email"></p>
                        </div>

                        <div class="bg-gray-50 rounded-xl p-3">
                            <p class="text-xs text-gray-400 mb-1">Nomor Telepon</p>
                            <p class="font-medium text-gray-700" x-text="selected.nomor_telepon"></p>
                        </div>

                        <div class="bg-gray-50 rounded-xl p-3">
                            <p class="text-xs text-gray-400 mb-1">Alamat</p>
                            <p class="font-medium text-gray-700 leading-relaxed" x-text="selected.alamat"></p>
                        </div>

                    </div>

                    {{-- FOOTER --}}
                    <div class="mt-6 flex justify-end">
                        <button @click="close()"
                            class="px-4 py-2 text-sm bg-gray-100 hover:bg-gray-200 rounded-lg transition">
                            Tutup
                        </button>
                    </div>
                </div>

                {{-- EDIT --}}
                <div x-show="modal === 'edit'" x-transition class="bg-white rounded-2xl shadow-xl w-full max-w-lg p-6">

                    <h3 class="text-lg font-semibold mb-4 text-gray-800">Edit Karyawan</h3>

                    <div class="space-y-3">
                        <input x-model="selected.nim" class="w-full border rounded-lg p-2 text-sm">
                        <input x-model="selected.nama_lengkap" class="w-full border rounded-lg p-2 text-sm">
                        <input x-model="selected.email" class="w-full border rounded-lg p-2 text-sm">
                        <input x-model="selected.nomor_telepon" class="w-full border rounded-lg p-2 text-sm">
                        <textarea x-model="selected.alamat" class="w-full border rounded-lg p-2 text-sm"></textarea>
                    </div>

                    <div class="flex justify-end gap-2 mt-5">
                        <button @click="close()" class="px-4 py-2 bg-gray-100 rounded-lg text-sm">Batal</button>
                        <button @click="saveEdit()"
                            class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg text-sm">Simpan</button>
                    </div>
                </div>

                {{-- DELETE --}}
                <div x-show="modal === 'delete'" x-transition
                    class="bg-white rounded-2xl shadow-xl w-full max-w-sm p-6 text-center">

                    <div class="text-3xl mb-2">⚠️</div>
                    <h3 class="font-semibold text-gray-800">Hapus Data?</h3>
                    <p class="text-sm text-gray-500 mt-1" x-text="selected.nama_lengkap"></p>

                    <div class="flex gap-2 mt-5">
                        <button @click="close()" class="flex-1 bg-gray-100 py-2 rounded-lg text-sm">Batal</button>
                        <button @click="deleteData()"
                            class="flex-1 bg-red-500 text-white py-2 rounded-lg text-sm">Hapus</button>
                    </div>
                </div>

            </div>
        </template>

    </div>

    <script>
        function modalKaryawan() {
            return {
                search: '',
                modal: null,
                selected: {},

                karyawans: [{
                        id: 1,
                        nim: '2021001',
                        nama_lengkap: 'Budi Santoso',
                        email: 'budi@email.com',
                        nomor_telepon: '0812',
                        alamat: 'Jakarta'
                    },
                    {
                        id: 2,
                        nim: '2021002',
                        nama_lengkap: 'Siti Rahayu',
                        email: 'siti@email.com',
                        nomor_telepon: '0823',
                        alamat: 'Bandung'
                    },
                    {
                        id: 3,
                        nim: '2021003',
                        nama_lengkap: 'Ahmad Fauzi',
                        email: 'ahmad@email.com',
                        nomor_telepon: '0834',
                        alamat: 'Surabaya'
                    },
                ],

                open(type, data) {
                    this.modal = type
                    this.selected = {
                        ...data
                    }
                },

                close() {
                    this.modal = null
                },

                deleteData() {
                    this.karyawans = this.karyawans.filter(k => k.id !== this.selected.id)
                    this.close()
                },

                saveEdit() {
                    const i = this.karyawans.findIndex(k => k.id === this.selected.id)
                    if (i !== -1) this.karyawans[i] = {
                        ...this.selected
                    }
                    this.close()
                },

                filteredKaryawans() {
                    return this.karyawans.filter(k =>
                        k.nama_lengkap.toLowerCase().includes(this.search.toLowerCase())
                    )
                }
            }
        }
    </script>
@endsection
