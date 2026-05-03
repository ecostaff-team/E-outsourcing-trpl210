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
