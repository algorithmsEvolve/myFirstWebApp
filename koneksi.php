<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "data_mhs";

$host = mysqli_connect("localhost","root","","data_mhs");
$db = mysqli_connect($server, $user, $password, $nama_database);

if(!$db)
{
	die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>