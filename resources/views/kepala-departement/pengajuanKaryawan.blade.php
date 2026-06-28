@extends('layouts.kepala-departement')

@section('content')
    <!-- Validasi Lembur Component -->
    <livewire:kepala-departemen.validasi-lembur />

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
@endsection
