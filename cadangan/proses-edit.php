<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $asal_sma = $_POST['asal_sma'];
    $telp_rumah = $_POST['telp_rumah'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $ibu = $_POST['ibu'];
    $bapak = $_POST['bapak'];
    $no_telp_ortu = $_POST['no_telp_ortu'];
    $alamat = $_POST['alamat'];
    $kelurahan = $_POST['kelurahan'];
    $kecamatan = $_POST['kecamatan'];
    $negara = $_POST['negara'];
    $provinsi = $_POST['provinsi'];
    $kabupaten_kota = $_POST['kabupaten_kota'];
    $kode_pos = $_POST['kode_pos'];
    $email_lain = $_POST['email_lain'];

    // buat query update
    $sql = "UPDATE mhs SET nim='$nim', nama='$nama', ttl='$ttl', asal_sma='$asal_sma', telp_rumah='$telp_rumah', no_hp='$no_hp', email='$email', ibu='$ibu', bapak='$bapak', no_telp_ortu='$no_telp_ortu', alamat='$alamat', kelurahan='$kelurahan', kecamatan='$kecamatan', negara='$negara', provinsi='$provinsi', kabupaten_kota='$kabupaten_kota', kode_pos='$kode_pos', email_lain='$email_lain' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: data_mahasiswa.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>