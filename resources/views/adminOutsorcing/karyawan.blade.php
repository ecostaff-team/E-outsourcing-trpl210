<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard adminOutsorcing</title>

    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    @vite('resources/css/app.css')

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body x-data="{ open: false }" class="bg-gray-100">

    <div class="flex flex-col md:flex-row">


        {{-- SIDEBAR --}}
        @include('components.sidebar_admin_out')

        <div class="flex-1 p-4 md:p-6 w-full">
            <!-- HEADER CONTENT -->
            @include('components.header_admin_out')
            {{-- // BUAT ISI CONTENT DIBAWAH SINIIIIIII --}}

            <div class="w-full md:max-w-7xl mx-auto space-y-6" x-data="dateFilter()">

                <!-- ================= CARDS ================= -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

                    <div class="bg-white rounded-xl shadow p-5 border-l-4 border-green-500">
                        <div class="flex items-center gap-3">
                            <div class="p-3 bg-green-100 rounded-lg">👤</div>
                            <div>
                                <p class="text-sm text-gray-500">Karyawan OSA Aktif</p>
                                <h2 class="text-2xl font-bold">5</h2>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow p-5 border-l-4 border-orange-500">
                        <div class="flex items-center gap-3">
                            <div class="p-3 bg-orange-100 rounded-lg">⏱️</div>
                            <div>
                                <p class="text-sm text-gray-500">Total Menit Lembur</p>
                                <h2 class="text-2xl font-bold">870</h2>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow p-5 border-l-4 border-blue-500">
                        <div class="flex items-center gap-3">
                            <div class="p-3 bg-blue-100 rounded-lg">📋</div>
                            <div>
                                <p class="text-sm text-gray-500">Ajukan Rekap Pending</p>
                                <h2 class="text-2xl font-bold">2</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- ================= FILTER ================= -->
                <div class="bg-white rounded-xl shadow p-5 space-y-4">

                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">

                        <h2 class="font-semibold text-lg">Waktu Lembur Karyawan</h2>

                        <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                            Export Excel
                        </button>

                    </div>

                    <!-- Filter -->
                    <div class="flex flex-col sm:flex-row gap-4 w-full">

                        <!-- Dropdown Range -->
                        <select x-model="rangeType" @change="setRange()" class="border rounded-lg p-2">
                            <option value="today">Hari Ini</option>
                            <option value="3days">3 Hari</option>
                            <option value="7days">7 Hari</option>
                            <option value="month">Bulan Ini</option>
                            <option value="custom">Custom</option>
                        </select>

                        <!-- Custom Date -->
                        <template x-if="rangeType === 'custom'">
                            <div class="flex gap-2">
                                <input type="date" x-model="startDate" class="border rounded-lg p-2">
                                <input type="date" x-model="endDate" class="border rounded-lg p-2">
                            </div>
                        </template>

                        <button @click="applyFilter()"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                            Filter
                        </button>

                    </div>

                    <!-- Preview Range -->
                    <div class="text-sm text-gray-500">
                        <span x-text="startDate"></span> → <span x-text="endDate"></span>
                    </div>

                </div>

                <!-- ================= TABLE ================= -->
                <div class="bg-white rounded-xl shadow overflow-hidden">

                    <div x-data="tableData()" x-init="init()" class="overflow-x-auto ">
                        <table class="min-w-[900px] whitespace-nowrap">

                            <thead class="bg-gray-100 text-gray-600">
                                <tr>
                                    <th class="p-3 text-left">ID Lembur</th>
                                    <th class="p-3 text-left">Nama</th>
                                    <th class="p-3 text-left">Departemen</th>
                                    <th class="p-3 text-left">Tanggal</th>
                                    <th class="p-3 text-left">Mulai</th>
                                    <th class="p-3 text-left">Selesai</th>
                                    <th class="p-3 text-left">Durasi</th>
                                    <th class="p-3 text-left">Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                <template x-for="item in orders" :key="item.id">
                                    <tr class="border-b hover:bg-gray-50">
                                        <td class="p-3" x-text="item.code"></td>
                                        <td class="p-3" x-text="item.name"></td>
                                        <td class="p-3" x-text="item.division"></td>
                                        <td class="p-3" x-text="item.date"></td>
                                        <td class="p-3" x-text="item.start"></td>
                                        <td class="p-3" x-text="item.end"></td>
                                        <td class="p-3" x-text="item.duration"></td>
                                        <td class="p-3">
                                            <span class="px-2 py-1 text-xs rounded" :class="statusClass(item.status)"
                                                x-text="item.status">
                                            </span>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>

                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="p-4 flex justify-end gap-2">
                        <button class="px-3 py-1 border rounded">Previous</button>
                        <button class="px-3 py-1 border rounded bg-green-500 text-white">1</button>
                        <button class="px-3 py-1 border rounded">2</button>
                        <button class="px-3 py-1 border rounded">Next</button>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- ================= ALPINE SCRIPT ================= -->
    <script>
        function dateFilter() {
            return {
                rangeType: 'today',
                startDate: '',
                endDate: '',

                init() {
                    this.setRange();
                },

                setRange() {
                    const today = new Date();

                    const format = (d) => d.toISOString().split('T')[0];

                    if (this.rangeType === 'today') {
                        this.startDate = format(today);
                        this.endDate = format(today);
                    }

                    if (this.rangeType === '3days') {
                        let start = new Date();
                        start.setDate(today.getDate() - 3);
                        this.startDate = format(start);
                        this.endDate = format(today);
                    }

                    if (this.rangeType === '7days') {
                        let start = new Date();
                        start.setDate(today.getDate() - 7);
                        this.startDate = format(start);
                        this.endDate = format(today);
                    }

                    if (this.rangeType === 'month') {
                        let start = new Date(today.getFullYear(), today.getMonth(), 1);
                        this.startDate = format(start);
                        this.endDate = format(today);
                    }

                    if (this.rangeType === 'custom') {
                        this.startDate = '';
                        this.endDate = '';
                    }
                },

                applyFilter() {
                    console.log('Filter:', this.startDate, this.endDate);
                    // nanti di sini bisa trigger request ke Laravel (AJAX / fetch)
                }
            }
        }

        /* DATA DUMMY */
        function tableData() {
            return {
                orders: [],

                init() {
                    this.orders = this.getDummyData();
                },

                getDummyData() {
                    return [{
                            id: 1,
                            code: "LMB001",
                            name: "John Doe",
                            division: "Produksi",
                            date: "2025-03-01",
                            start: "17:00",
                            end: "20:00",
                            duration: "180 menit",
                            status: "Disetujui"
                        },
                        {
                            id: 2,
                            code: "LMB002",
                            name: "Jane Smith",
                            division: "HR",
                            date: "2025-03-02",
                            start: "09:00",
                            end: "12:00",
                            duration: "180 menit",
                            status: "Disetujui"
                        },
                        {
                            id: 3,
                            code: "LMB003",
                            name: "Budi Santoso",
                            division: "IT",
                            date: "2025-03-03",
                            start: "10:00",
                            end: "14:00",
                            duration: "240 menit",
                            status: "Pending"
                        },
                        {
                            id: 4,
                            code: "LMB004",
                            name: "Siti Aminah",
                            division: "Keuangan",
                            date: "2025-03-04",
                            start: "08:00",
                            end: "11:00",
                            duration: "180 menit",
                            status: "Disetujui"
                        },
                        {
                            id: 5,
                            code: "LMB005",
                            name: "Agus Salim",
                            division: "Produksi",
                            date: "2025-03-05",
                            start: "13:00",
                            end: "17:00",
                            duration: "240 menit",
                            status: "Ditolak"
                        },
                        {
                            id: 6,
                            code: "LMB006",
                            name: "Rina Kartika",
                            division: "Marketing",
                            date: "2025-03-06",
                            start: "09:30",
                            end: "12:30",
                            duration: "180 menit",
                            status: "Disetujui"
                        },
                        {
                            id: 7,
                            code: "LMB007",
                            name: "Dedi Kurniawan",
                            division: "IT",
                            date: "2025-03-07",
                            start: "10:00",
                            end: "15:00",
                            duration: "300 menit",
                            status: "Pending"
                        },
                        {
                            id: 8,
                            code: "LMB008",
                            name: "Maya Sari",
                            division: "HR",
                            date: "2025-03-08",
                            start: "08:00",
                            end: "12:00",
                            duration: "240 menit",
                            status: "Disetujui"
                        },
                        {
                            id: 9,
                            code: "LMB009",
                            name: "Fajar Nugroho",
                            division: "Produksi",
                            date: "2025-03-09",
                            start: "14:00",
                            end: "18:00",
                            duration: "240 menit",
                            status: "Ditolak"
                        },
                        {
                            id: 10,
                            code: "LMB010",
                            name: "Intan Permata",
                            division: "Keuangan",
                            date: "2025-03-10",
                            start: "07:00",
                            end: "10:00",
                            duration: "180 menit",
                            status: "Pending"
                        }
                    ];
                },

                statusClass(status) {
                    if (status === 'Disetujui') return 'bg-green-100 text-green-600';
                    if (status === 'Pending') return 'bg-yellow-100 text-yellow-600';
                    if (status === 'Ditolak') return 'bg-red-100 text-red-600';
                    return 'bg-gray-100 text-gray-600';
                }
            }
        }
    </script>
</body>

</html>
