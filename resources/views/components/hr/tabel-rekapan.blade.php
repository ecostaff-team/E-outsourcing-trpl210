<div
    class="bg-white mt-6 rounded-lg shadow-lg border border-gray-100 flex flex-col w-full max-w-full overflow-hidden relative">

    <div class="p-5 border-b border-gray-100 bg-white">
        <div class="flex items-center gap-3">
            <i class="far fa-calendar text-2xl md:text-xl text-gray-900"></i>
            <h2 class="text-lg md:text-xl font-bold text-gray-900">Rekapan Detail Karyawan per Bulan</h2>
        </div>
    </div>
    <div class="p-4 border-b border-gray-100 flex flex-col lg:flex-row lg:items-center justify-between gap-4">
        <div class="flex flex-wrap items-center gap-2">
            <span
                class="px-3 py-1 bg-green-50 text-green-700 text-xs font-semibold rounded-full flex items-center gap-1"><span
                    class="w-2 h-2 rounded-full bg-green-500"></span> CV Tenaga Prima</span>
            <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-semibold rounded-full">Maret 2026</span>
            <span
                class="px-3 py-1 bg-yellow-50 text-yellow-700 text-xs font-semibold rounded-full flex items-center gap-1"><i
                    class="fas fa-hourglass-half"></i> Menunggu Persetujuan</span>
        </div>
        <button
            class="bg-green-600 shadow-lg text-white hover:text-green-700 px-4 py-2 rounded-lg text-sm flex items-center gap-2 cursor-pointer transition-colors duration-200 hover:bg-white border-transparent border hover:border-green-600">
            <i class="fas fa-file-excel"></i>
            Export Excel
        </button>
    </div>

    <div class="w-full overflow-x-auto pb-2 custom-scrollbar">
        <table class="w-full text-left text-xs whitespace-nowrap min-w-max border-collapse">
            <thead class="bg-gray-50 text-gray-500 font-semibold uppercase">
                <tr>
                    <th class="px-4 py-3 border-b border-gray-200">#</th>
                    <th
                        class="px-4 py-3 border-b border-gray-200 sticky left-0 z-20 bg-gray-50 shadow-[2px_0_5px_-2px_rgba(0,0,0,0.1)]">
                        NAMA KARYAWAN</th>
                    <th class="px-4 py-3 border-b border-gray-200">POSISI</th>

                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6">1</th>
                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6">2</th>
                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6">3</th>
                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6">4</th>
                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6">5</th>
                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6">6</th>
                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6 text-red-500">7</th>
                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6">8</th>
                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6">9</th>
                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6">10</th>
                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6">11</th>
                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6">12</th>
                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6">13</th>
                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6 text-red-500">14</th>
                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6">15</th>
                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6">16</th>
                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6">17</th>
                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6">18</th>
                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6">19</th>
                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6">20</th>
                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6 text-red-500">21</th>
                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6">22</th>
                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6">23</th>
                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6">24</th>
                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6">25</th>
                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6">26</th>
                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6">27</th>
                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6 text-red-500">28</th>
                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6">29</th>
                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6">30</th>
                    <th class="px-1 py-3 border-b border-gray-200 text-center w-6">31</th>

                    <th class="px-4 py-3 border-b border-gray-200 text-center border-l border-gray-200 bg-gray-50">H
                    </th>
                    <th class="px-4 py-3 border-b border-gray-200 text-center bg-gray-50">A</th>
                    <th class="px-4 py-3 border-b border-gray-200 text-center bg-gray-50">S/I</th>
                    <th class="px-4 py-3 border-b border-gray-200 text-center bg-gray-50">L</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">

                <tr class="group hover:bg-gray-100 bg-orange-50/50 transition-colors">
                    <td class="px-4 py-3 text-gray-500">1</td>
                    <td
                        class="px-4 py-3 sticky left-0 z-10 bg-orange-50 group-hover:bg-gray-100 shadow-[2px_0_5px_-2px_rgba(0,0,0,0.1)] transition-colors">
                        <div class="flex items-center gap-2">
                            <div
                                class="w-8 h-8 rounded-full text-white flex items-center justify-center font-bold bg-green-600 shrink-0">
                                IS</div>
                            <div>
                                <div class="font-bold text-gray-800">Irwan Santoso</div>
                                <div class="text-[10px] text-gray-400">#TP001</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-gray-600">Operator</td>

                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-purple-100 text-purple-700">L</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span class="text-gray-300">-</span></td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-red-100 text-red-700">A</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span class="text-gray-300">-</span></td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-purple-100 text-purple-700">L</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span class="text-gray-300">-</span></td>

                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span class="text-gray-300">-</span></td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span class="text-gray-300">-</span></td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-red-100 text-red-700">A</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-blue-100 text-blue-700">I</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span class="text-gray-300">-</span></td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-purple-100 text-purple-700">L</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span class="text-gray-300">-</span></td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>

                    <td class="px-4 py-3 text-center font-bold text-green-600 border-l border-gray-100 bg-green-50/30">
                        16</td>
                    <td class="px-4 py-3 text-center font-bold text-red-600 bg-red-50/30">2</td>
                    <td class="px-4 py-3 text-center font-bold text-yellow-600 bg-yellow-50/30">1</td>
                    <td class="px-4 py-3 text-center font-bold text-purple-600 bg-purple-50/30">3</td>
                </tr>

                <tr class="group hover:bg-gray-50 bg-white transition-colors">
                    <td class="px-4 py-3 text-gray-500">2</td>
                    <td
                        class="px-4 py-3 sticky left-0 z-10 bg-white group-hover:bg-gray-50 shadow-[2px_0_5px_-2px_rgba(0,0,0,0.1)] transition-colors">
                        <div class="flex items-center gap-2">
                            <div
                                class="w-8 h-8 rounded-full text-white flex items-center justify-center font-bold bg-emerald-600 shrink-0">
                                JP</div>
                            <div>
                                <div class="font-bold text-gray-800">Juliana Putri</div>
                                <div class="text-[10px] text-gray-400">#TP002</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-gray-600">Teknisi</td>

                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-red-100 text-red-700">A</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span class="text-gray-300">-</span></td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-yellow-100 text-yellow-700">S</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-purple-100 text-purple-700">L</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span class="text-gray-300">-</span></td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-red-100 text-red-700">A</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span class="text-gray-300">-</span></td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span class="text-gray-300">-</span></td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span class="text-gray-300">-</span></td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-purple-100 text-purple-700">L</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-blue-100 text-blue-700">I</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span class="text-gray-300">-</span></td>
                    <td class="px-1 py-3 text-center"><span class="text-gray-300">-</span></td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-red-100 text-red-700">A</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span class="text-gray-300">-</span></td>

                    <td class="px-4 py-3 text-center font-bold text-green-600 border-l border-gray-100 bg-green-50/30">
                        15</td>
                    <td class="px-4 py-3 text-center font-bold text-red-600 bg-red-50/30">3</td>
                    <td class="px-4 py-3 text-center font-bold text-yellow-600 bg-yellow-50/30">2</td>
                    <td class="px-4 py-3 text-center font-bold text-purple-600 bg-purple-50/30">2</td>
                </tr>

                <tr class="group hover:bg-gray-100 bg-orange-50/50 transition-colors">
                    <td class="px-4 py-3 text-gray-500">3</td>
                    <td
                        class="px-4 py-3 sticky left-0 z-10 bg-orange-50 group-hover:bg-gray-100 shadow-[2px_0_5px_-2px_rgba(0,0,0,0.1)] transition-colors">
                        <div class="flex items-center gap-2">
                            <div
                                class="w-8 h-8 rounded-full text-white flex items-center justify-center font-bold bg-blue-500 shrink-0">
                                KW</div>
                            <div>
                                <div class="font-bold text-gray-800">Karno Wibowo</div>
                                <div class="text-[10px] text-gray-400">#TP003</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-gray-600">Helper</td>

                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-purple-100 text-purple-700">L</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-yellow-100 text-yellow-700">S</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span class="text-gray-300">-</span></td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-red-100 text-red-700">A</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span class="text-gray-300">-</span></td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-purple-100 text-purple-700">L</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span class="text-gray-300">-</span></td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span class="text-gray-300">-</span></td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span class="text-gray-300">-</span></td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-red-100 text-red-700">A</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-blue-100 text-blue-700">I</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span class="text-gray-300">-</span></td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-purple-100 text-purple-700">L</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-yellow-100 text-yellow-700">S</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>
                    <td class="px-1 py-3 text-center"><span class="text-gray-300">-</span></td>
                    <td class="px-1 py-3 text-center"><span
                            class="inline-flex w-5 h-5 items-center justify-center rounded text-[10px] font-bold bg-green-100 text-green-700">H</span>
                    </td>

                    <td class="px-4 py-3 text-center font-bold text-green-600 border-l border-gray-100 bg-green-50/30">
                        14</td>
                    <td class="px-4 py-3 text-center font-bold text-red-600 bg-red-50/30">2</td>
                    <td class="px-4 py-3 text-center font-bold text-yellow-600 bg-yellow-50/30">3</td>
                    <td class="px-4 py-3 text-center font-bold text-purple-600 bg-purple-50/30">3</td>
                </tr>

            </tbody>
            <tfoot class="bg-gray-100 border-t-2 border-gray-200 font-bold text-sm">
                <tr>
                    <td class="px-4 py-3 text-gray-700"></td>
                    <td
                        class="px-4 py-3 text-gray-800 text-right sticky left-0 z-10 bg-gray-100 shadow-[2px_0_5px_-2px_rgba(0,0,0,0.1)]">
                        TOTAL REKAP</td>
                    <td class="px-4 py-3 text-gray-700"></td>
                    <td colspan="31"></td>
                    <td class="px-4 py-3 text-center text-green-700 border-l border-gray-200 bg-green-100/50">45</td>
                    <td class="px-4 py-3 text-center text-red-700 bg-red-100/50">7</td>
                    <td class="px-4 py-3 text-center text-yellow-700 bg-yellow-100/50">6</td>
                    <td class="px-4 py-3 text-center text-purple-700 bg-purple-100/50">8</td>
                </tr>
            </tfoot>
        </table>
    </div>

    <div
        class="p-4 border-t border-gray-100 flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4 text-xs text-gray-500 bg-white">
        <div class="flex items-center flex-wrap gap-x-4 gap-y-2">
            <span class="font-semibold text-gray-700">Keterangan:</span>
            <span class="flex items-center gap-1.5"><span
                    class="w-5 h-5 bg-green-100 text-green-700 flex items-center justify-center rounded font-bold">H</span>
                Hadir</span>
            <span class="flex items-center gap-1.5"><span
                    class="w-5 h-5 bg-red-100 text-red-700 flex items-center justify-center rounded font-bold">A</span>
                Alpha</span>
            <span class="flex items-center gap-1.5"><span
                    class="w-5 h-5 bg-yellow-100 text-yellow-700 flex items-center justify-center rounded font-bold">S</span>
                Sakit</span>
            <span class="flex items-center gap-1.5"><span
                    class="w-5 h-5 bg-blue-100 text-blue-700 flex items-center justify-center rounded font-bold">I</span>
                Izin</span>
            <span class="flex items-center gap-1.5"><span
                    class="w-5 h-5 bg-purple-100 text-purple-700 flex items-center justify-center rounded font-bold">L</span>
                Lembur</span>
            <span class="flex items-center gap-1.5"><span class="text-gray-300 font-bold">-</span> Libur</span>
        </div>

        <div class="flex items-center gap-4 shrink-0 w-full lg:w-auto justify-between lg:justify-end mt-2 lg:mt-0">
            <span>Menampilkan 1-3 dari 3 karyawan</span>
            <div
                class="bg-green-700 text-white w-7 h-7 flex items-center justify-center rounded-lg shadow-sm font-medium">
                1</div>
        </div>
    </div>

    <div class="p-4 border-t border-gray-100 bg-gray-50 flex flex-col md:flex-row justify-between items-center gap-4">
        <div class="flex items-center gap-2">
            <span class="text-sm text-gray-600">Status rekap:</span>
            <span
                class="text-sm font-bold text-yellow-600 flex items-center gap-1 bg-yellow-100 px-3 py-1 rounded-full"><i
                    class="fas fa-hourglass-half"></i> Menunggu Persetujuan</span>
        </div>
        <div class="flex gap-3 w-full md:w-auto">
            <button
                class="flex-1 md:flex-none px-6 py-2.5 rounded-lg border border-red-200 bg-red-50 text-red-600 hover:bg-red-100 font-semibold text-sm flex items-center justify-center gap-2 transition">
                <i class="fas fa-times"></i> Tolak Rekap
            </button>
            <button
                class="flex-1 md:flex-none px-6 py-2.5 rounded-lg border border-green-200 bg-green-600 text-white hover:bg-green-700 font-semibold text-sm flex items-center justify-center gap-2 transition shadow-sm">
                <i class="fas fa-check"></i> Setujui Rekap
            </button>
        </div>
    </div>
</div>
