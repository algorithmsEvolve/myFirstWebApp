<?php
include "koneksi.php";
$inputNim=$_POST['nim'];
$inputNama=$_POST['nama'];
$inputTtl=$_POST['ttl'];
$inputAsalSma=$_POST['asal_sma'];
$inputTelpRumah=$_POST['telp_rumah'];
$inputNoHp=$_POST['no_hp'];
$inputEmail=$_POST['email'];
$inputIbu=$_POST['ibu'];
$inputBapak=$_POST['bapak'];
$inputNoTelpOrtu=$_POST['no_telp_ortu'];
$inputAlamat=$_POST['alamat'];
$inputKelurahan=$_POST['kelurahan'];
$inputKecamatan=$_POST['kecamatan'];
$inputNegara=$_POST['negara'];
$inputProvinsi=$_POST['provinsi'];
$inputKabupatenKota=$_POST['kabupaten_kota'];
$inputKodePos=$_POST['kode_pos'];
$inputEmailLain=$_POST['email_lain'];

$ekstensi_diperbolehkan = array('png','jpg');
	$nama = $_FILES['upload']['name'];
	$x = explode('.', $nama);//img.jpg
	//setelah di explode nilai1=image . nilai2=jpg JPG
	$ekstensi = strtolower(end($x)); //jpg
	$ukuran = $_FILES['upload']['size'];
	$file_temp = $_FILES['upload']['tmp_name'];//original name
	if(in_array($ekstensi, $ekstensi_diperbolehkan) === TRUE){
		if($ukuran < 1044070){
			//cek ukuran file
			move_uploaded_file($file_temp, 'upload/'.$nama);
				//proses insert ke database
			$in=mysqli_query($host,"INSERT INTO mhs (foto,nim,nama,ttl,asal_sma,telp_rumah,no_hp,email,ibu,bapak,no_telp_ortu,alamat,kelurahan,kecamatan,negara,provinsi,kabupaten_kota,kode_pos,email_lain) VALUES ('$nama','$inputNim','$inputNama','$inputTtl','$inputAsalSma','$inputTelpRumah','$inputNoHp','$inputEmail','$inputIbu','$inputBapak','$inputNoTelpOrtu','$inputAlamat','$inputKelurahan','$inputKecamatan','$inputNegara','$inputProvinsi','$inputKabupatenKota','$inputKodePos','$inputEmailLain')");
			if($in){
				header('Location: data_mahasiswa.php');
			}
			else{
				echo "</br>Input Gagal.";
			}

		}
		else{
			echo "UKURAN TERLALU BESAR";
		}
	}
	else{
		echo "EKSTENSI TIDAK DIIZINKAN";
	}
	?>