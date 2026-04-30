function autoFill() {
    // ambil data dari panel 0
    let nim = document.getElementById("nim0").value;
    let nama = document.getElementById("nama0").value;
    let noHp = document.getElementById("noHp0").value;
    let email = document.getElementById("email0").value;
    let tanggal = document.getElementById("tanggal0").value;
    let alamat = document.getElementById("alamat0").value;

    // isi ke panel 1
    document.getElementById("nim1").value = nim;
    document.getElementById("nama1").value = nama;
    document.getElementById("noHp1").value = noHp;
    document.getElementById("email1").value = email;
    document.getElementById("tanggal1").value = tanggal;
    document.getElementById("alamat1").value = alamat;
}