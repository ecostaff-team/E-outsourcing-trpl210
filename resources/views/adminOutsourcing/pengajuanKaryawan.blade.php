@extends('layouts.admin-outsourcing')

@section('content')
    <div class="min-h-screen bg-gray-100 p-4">
        <div class="bg-white shadow-lg w-full p-6 rounded-lg max-w-5xl mx-auto">
            <h2 class="text-xl font-bold text-center text-gray-900 mb-6">Form Pengajuan Karyawan</h2>

            <form action="#" method="POST" class="grid grid-cols-1 md:grid-cols-1 gap-4">
                <div>
                    <label for="nip" class="block text-sm font-bold text-gray-900 mb-2">
                        NIP <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="nip" name="nip" placeholder="Masukkan NIP" required
                        class="w-full px-4 py-2 border border-gray-400 rounded-md focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none placeholder-gray-400">
                </div>

                <div>
                    <label for="nama" class="block text-sm font-bold text-gray-900 mb-2">
                        Nama Lengkap <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" required
                        class="w-full px-4 py-2 border border-gray-400 rounded-md focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none placeholder-gray-400">
                </div>

                <div>
                    <label for="email" class="block text-sm font-bold text-gray-900 mb-2">
                        Email <span class="text-red-500">*</span>
                    </label>
                    <input type="email" id="email" name="email" placeholder="Masukkan Email" required
                        class="w-full px-4 py-2 border border-gray-400 rounded-md focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none placeholder-gray-400">
                </div>

                <div>
                    <label for="telepon" class="block text-sm font-bold text-gray-900 mb-2">
                        Nomor Telepon <span class="text-red-500">*</span>
                    </label>
                    <input type="tel" id="telepon" name="telepon" placeholder="Masukkan Nomor Telepon" required
                        class="w-full px-4 py-2 border border-gray-400 rounded-md focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none placeholder-gray-400">
                </div>

                <div>
                    <label for="alamat" class="block text-sm font-bold text-gray-900 mb-2">
                        Alamat <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="alamat" name="alamat" placeholder="Masukkan Detail Alamat" required
                        class="w-full px-4 py-2 border border-gray-400 rounded-md focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none placeholder-gray-400">
                </div>

                <div class="flex justify-end pt-4">

                    <button type="submit"
                        class="bg-[#009254] hover:bg-[#007a46] text-white font-bold py-3 px-8 rounded-2xl transition-all duration-200">
                        Ajukan Data
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
