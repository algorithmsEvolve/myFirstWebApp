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

    $ekstensi_diperbolehkan = array('png','jpg');
    $nama2 = $_FILES['upload']['name'];
    $x = explode('.', $nama2);//img.jpg
    //setelah di explode nilai1=image . nilai2=jpg JPG
    $ekstensi = strtolower(end($x)); //jpg
    $ukuran = $_FILES['upload']['size'];
    $file_temp = $_FILES['upload']['tmp_name'];//original name
        if($ukuran > 1){
        if($ukuran < 1044070){
            //cek ukuran file
            move_uploaded_file($file_temp, 'upload/'.$nama2);
                //proses insert ke database
            $sql = "UPDATE mhs SET nim='$nim', nama='$nama', foto='$nama2' , ttl='$ttl', asal_sma='$asal_sma', telp_rumah='$telp_rumah', no_hp='$no_hp', email='$email', ibu='$ibu', bapak='$bapak', no_telp_ortu='$no_telp_ortu', alamat='$alamat', kelurahan='$kelurahan', kecamatan='$kecamatan', negara='$negara', provinsi='$provinsi', kabupaten_kota='$kabupaten_kota', kode_pos='$kode_pos', email_lain='$email_lain' WHERE id=$id";
            $query = mysqli_query($db, $sql);
            if($query){
                header('Location: data_mahasiswa.php');
            }
        }
    }
        else {
            $sql = "UPDATE mhs SET nim='$nim', nama='$nama' , ttl='$ttl', asal_sma='$asal_sma', telp_rumah='$telp_rumah', no_hp='$no_hp', email='$email', ibu='$ibu', bapak='$bapak', no_telp_ortu='$no_telp_ortu', alamat='$alamat', kelurahan='$kelurahan', kecamatan='$kecamatan', negara='$negara', provinsi='$provinsi', kabupaten_kota='$kabupaten_kota', kode_pos='$kode_pos', email_lain='$email_lain' WHERE id=$id";
            $query = mysqli_query($db, $sql);
            if($query){
                header('Location: data_mahasiswa.php');
            }
        }

} else {
    die("Akses dilarang...");
}

?>