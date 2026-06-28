@extends('layouts.admin-outsourcing')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-50 to-gray-100 p-4 md:p-8 font-sans relative overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-green-50/50 blur-3xl pointer-events-none z-0"></div>
    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-blue-50/50 blur-3xl pointer-events-none z-0"></div>

    <div class="relative z-10 max-w-7xl mx-auto">
        @livewire('admin-outsourcing.pengajuan-karyawan')

        {{-- Monitoring privilege dari database --}}
        @livewire('super-admin.privilege-monitor')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            window.addEventListener('privilege-revoked', event => {
                Swal.fire({
                    title: 'Akses Diubah!',
                    text: 'Privilege akun Anda telah diubah dari Server secara langsung.',
                    icon: 'warning',
                    confirmButtonText: 'Muat Ulang Halaman',
                    allowOutsideClick: false,
                    confirmButtonColor: '#166534'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.reload();
                    }
                });
            });

            document.addEventListener('livewire:init', () => {
                Livewire.hook('request', ({ fail }) => {
                    fail(({ status, content, preventDefault }) => {
                        if (status === 500 && (content.includes('42000') || content.includes('Access denied') || content.includes('command denied'))) {
                            preventDefault();
                            Swal.fire({
                                title: 'Akses Basis Data Ditolak!',
                                text: 'Privilege akun Anda telah diubah dari Server secara langsung.',
                                icon: 'error',
                                confirmButtonText: 'Muat Ulang',
                                allowOutsideClick: false,
                                confirmButtonColor: '#991b1b'
                            }).then(() => {
                                window.location.reload();
                            });
                        }
                    });
                });
            });
        </script>
    </div>
</div>

<style>
    .hide-scrollbar::-webkit-scrollbar { display: none; }
    .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
</style>
@endsection
