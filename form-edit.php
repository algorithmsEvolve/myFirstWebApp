<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: data_mahasiswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM mhs WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html>
<title>Sistem Informasi Mahasiswa Pendidikan Matematika UIN Jakarta</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/fonts.css">
<link rel="stylesheet" href="./css/test.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
body{
  background:#f5deb3;
}
html{
  background-color: #a52a2a;
}
.footerBot{
   clear: both;
    position: relative;
    height: 40px;
    margin-top: -40px;
}
hr{ 
  height: 1px;
  color: black;
  background-color: black;
  border: none;
}
label {
    display: inline-block;
    width:200px;
    text-align: left;
}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 220px;background: #a52a2a;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 220px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #fff;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: grey;
}
</style>
<body>

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-card-4 w3-bar-block w3-small w3-hide-small  " style="margin-top: 90px">
  <!-- Avatar image in top left corner -->
  <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-hover-grey">
    <i>
      <img src="./images/nav_home-icon.png" width="22x" height="23px">
    </i><b style="margin-left: 3px; color:#ffffff">
  Home</b>
  </a>
  <a href="data_mahasiswa.php" class="w3-bar-item w3-button w3-padding-large w3-hover-grey" style="background: #f5deb3">
    <i>
      <img src="./images/nav_acc-icon2.png" width="20px" height="20px">
    </i><b style="margin-left: 5px; color:#000000"">
    Data Mahasiswa</b>
  </a>
  <a href="tentang.php" class="w3-bar-item w3-button w3-padding-large w3-hover-grey">
    <i>
      <img src="./images/nav_tentang-icon.png" width="20px" height="20px">
    </i><b style="margin-left: 5px; color:#ffffff">
    Tentang</b>
  </a>
  <div style="margin-top: 50px; color:#ffffff">
  <script language="javascript" type="text/javascript">
var day_of_week = new Array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
var month_of_year = new Array('January','February','March','April','May','June','July','August','September','October','November','December');

//  DECLARE AND INITIALIZE VARIABLES
var Calendar = new Date();

var year = Calendar.getFullYear();     // Returns year
var month = Calendar.getMonth();    // Returns month (0-11)
var today = Calendar.getDate();    // Returns day (1-31)
var weekday = Calendar.getDay();    // Returns day (1-31)

var DAYS_OF_WEEK = 7;    // "constant" for number of days in a week
var DAYS_OF_MONTH = 31;    // "constant" for number of days in a month
var cal;    // Used for printing

Calendar.setDate(1);    // Start the calendar day at '1'
Calendar.setMonth(month);    // Start the calendar month at now


/* VARIABLES FOR FORMATTING
NOTE: You can format the 'BORDER', 'BGCOLOR', 'CELLPADDING', 'BORDERCOLOR'
      tags to customize your caledanr's look. */

var TR_start = '<TR>';
var TR_end = '</TR>';
var highlight_start = '<TD WIDTH="30"><TABLE CELLSPACING=0 BORDER=1  BORDERCOLOR=f5deb3><TR><TD WIDTH=20><B><CENTER>';
var highlight_end   = '</CENTER></TD></TR></TABLE></B>';
var TD_start = '<TD WIDTH="30"><CENTER>';
var TD_end = '</CENTER></TD>';

/* BEGIN CODE FOR CALENDAR
NOTE: You can format the 'BORDER', 'BGCOLOR', 'CELLPADDING', 'BORDERCOLOR'
tags to customize your calendar's look.*/

cal =  '<TABLE BORDER=1 CELLSPACING=0 CELLPADDING=0 BORDERCOLOR=f5deb3><TR><TD>';
cal += '<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=2>' + TR_start;
cal += '<TD class="w3-text-black" COLSPAN="' + DAYS_OF_WEEK + '" BGCOLOR="#f5deb3"><CENTER><B>';
cal += month_of_year[month]  + '   ' + year + '</B>' + TD_end + TR_end;
cal += TR_start;

//   DO NOT EDIT BELOW THIS POINT  //

// LOOPS FOR EACH DAY OF WEEK
for(index=0; index < DAYS_OF_WEEK; index++)
{

// BOLD TODAY'S DAY OF WEEK
if(weekday == index)
cal += TD_start + '<B>' + day_of_week[index] + '</B>' + TD_end;

// PRINTS DAY
else
cal += TD_start + day_of_week[index] + TD_end;
}

cal += TD_end + TR_end;
cal += TR_start;

// FILL IN BLANK GAPS UNTIL TODAY'S DAY
for(index=0; index < Calendar.getDay(); index++)
cal += TD_start + '  ' + TD_end;

// LOOPS FOR EACH DAY IN CALENDAR
for(index=0; index < DAYS_OF_MONTH; index++)
{
if( Calendar.getDate() > index )
{
  // RETURNS THE NEXT DAY TO PRINT
  week_day =Calendar.getDay();

  // START NEW ROW FOR FIRST DAY OF WEEK
  if(week_day == 0)
  cal += TR_start;

  if(week_day != DAYS_OF_WEEK)
  {

  // SET VARIABLE INSIDE LOOP FOR INCREMENTING PURPOSES
  var day  = Calendar.getDate();

  // HIGHLIGHT TODAY'S DATE
  if( today==Calendar.getDate() )
  cal += highlight_start + day + highlight_end + TD_end;

  // PRINTS DAY
  else
  cal += TD_start + day + TD_end;
  }

  // END ROW FOR LAST DAY OF WEEK
  if(week_day == DAYS_OF_WEEK)
  cal += TR_end;
  }

  // INCREMENTS UNTIL END OF THE MONTH
  Calendar.setDate(Calendar.getDate()+1);

}// end for loop

cal += '</TD></TR></TABLE></TABLE>';

//  PRINT CALENDAR
document.write(cal);

//  End -->
</script>
</div>
</nav>
  <header class="w3-container w3-card-4 w3-padding-small w3-center id="home" style="position: sticky;top:0px;background-image: url('./images/headerFix.png');background-size: 100% 100%;height: 90px">
    <h1 class="w3-xlarge" style="text-align: left; margin-bottom: 2px; color: #fff"></h1>
  </header>
<div id="main">

  <!-- About Section -->
  <div class=" w3-content w3-justify w3-text-black w3-padding-32" id="about">
    <h2 class="w3-text-black" align="center">Edit Data Mahasiswa</h2>
    <hr>
    <div>
    <form action="proses-edit.php" method="POST" enctype="multipart/form-data">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

        <p>
            <label for="nim">NIM: </label>
            <input type="text" name="nim" value="<?php echo $siswa['nim'] ?>" />
        </p>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $siswa['nama'] ?>" />
        </p>
        <p>
          <label for="upload">Foto: </label>
          <input type="file" name="upload">
        </p>
        <p>
            <label for="ttl">TTL: </label>
            <input type="text" name="ttl" value="<?php echo $siswa['ttl'] ?>" />
        </p>
        <p>
            <label for="asal_sma">Asal SMA: </label>
            <input type="text" name="asal_sma" value="<?php echo $siswa['asal_sma'] ?>" />
        </p>
        <p>
            <label for="telp_rumah">Telp. Rumah: </label>
            <input type="text" name="telp_rumah" value="<?php echo $siswa['telp_rumah'] ?>" />
        </p>
        <p>
            <label for="no_hp">No. HP: </label>
            <input type="text" name="no_hp" value="<?php echo $siswa['no_hp'] ?>" />
        </p>
        <p>
            <label for="email">E-Mail: </label>
            <input type="text" name="email" value="<?php echo $siswa['email'] ?>" />
        </p>
        <p>
            <label for="ibu">Ibu: </label>
            <input type="text" name="ibu" value="<?php echo $siswa['ibu'] ?>" />
        </p>
        <p>
            <label for="bapak">Bapak: </label>
            <input type="text" name="bapak" value="<?php echo $siswa['bapak'] ?>" />
        </p>
        <p>
            <label for="no_telp_ortu">No. Telp Ortu: </label>
            <input type="text" name="no_telp_ortu" value="<?php echo $siswa['no_telp_ortu'] ?>" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
        </p>
        <p>
            <label for="kelurahan">Kelurahan: </label>
            <input type="text" name="kelurahan" value="<?php echo $siswa['kelurahan'] ?>" />
        </p>
        <p>
            <label for="kecamatan">Kecamatan: </label>
            <input type="text" name="kecamatan" value="<?php echo $siswa['kecamatan'] ?>" />
        </p>
        <p>
            <label for="negara">Negara: </label>
            <input type="text" name="negara" value="<?php echo $siswa['negara'] ?>" />
        </p>
        <p>
            <label for="provinsi">Provinsi: </label>
            <input type="text" name="provinsi" value="<?php echo $siswa['provinsi'] ?>" />
        </p>
        <p>
            <label for="kabupaten_kota">Kabupaten/kota: </label>
            <input type="text" name="kabupaten_kota" value="<?php echo $siswa['kabupaten_kota'] ?>" />
        </p>
        <p>
            <label for="kode_pos">Kode Pos: </label>
            <input type="text" name="kode_pos" value="<?php echo $siswa['kode_pos'] ?>" />
        </p>
        <p>
            <label for="email_lain">E-mail Lain: </label>
            <input type="text" name="email_lain" value="<?php echo $siswa['email_lain'] ?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>
    </div>
</div>
<!-- END PAGE CONTENT -->
<div class="footerBot">
  <div style="background-color: #a52a2a;color: white">
<hr>
<footer style="text-align: center">
  <a href="http://twitter.com/b_math16"><img src="./images/twitter-icon.png" width="40px" height="40px">
  </a>
  <a href="http://instagram.com/b_math16" style="margin-left: 5px">
  <img src="./images/instagram-icon2.png" width="33px" height="33px">
</a>
<p>
    Copyright@Annisa Fira Nindy Amalia dan Maghfira Izani Maulani -FITK-UIN Syarif Hidayatullah Jakarta
  </p>

</footer>
</div>
</div>

</body>
</html>
