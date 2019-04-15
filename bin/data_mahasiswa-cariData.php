<?php include("koneksi.php"); ?>
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
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 220px;background: #2c2f33;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 135px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #282c33;
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
    background-color: orange;
}
</style>
<body class="bodyColor">
<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center w3-card-4">
  <!-- Avatar image in top left corner -->
  <img src="./images/logo-uinjkt.png" style="width:50%" class="w3-padding-small">
  <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-hover-orange">
    <i class="w3-xxlarge">
      <img src="./images/home-icon.png" width="50px" height="40px">
    </i>
    <p>HOME</p>
  </a>
  <a href="data_mahasiswa.php" class="w3-bar-item w3-button w3-padding-large w3-hover-orange w3-orange">
    <i class="w3-xxlarge">
      <img src="./images/acc-icon.png" width="30%">
    </i>
    <p>DATA MAHASISWA</p>
  </a>

  <a href="tentang.php" class="w3-bar-item w3-button w3-padding-large w3-hover-orange">
    <i class="w3-xxlarge">
      <img src="./images/tentang-icon.png" width="40%">
    </i>
    <p>TENTANG</p>
  </a>
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
var highlight_start = '<TD WIDTH="30"><TABLE CELLSPACING=0 BORDER=1 BGCOLOR=000000 BORDERCOLOR=f78a1d><TR><TD WIDTH=20><B><CENTER>';
var highlight_end   = '</CENTER></TD></TR></TABLE></B>';
var TD_start = '<TD WIDTH="30"><CENTER>';
var TD_end = '</CENTER></TD>';

/* BEGIN CODE FOR CALENDAR
NOTE: You can format the 'BORDER', 'BGCOLOR', 'CELLPADDING', 'BORDERCOLOR'
tags to customize your calendar's look.*/

cal =  '<TABLE BORDER=1 CELLSPACING=0 CELLPADDING=0 BORDERCOLOR=f78a1d><TR><TD>';
cal += '<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=2>' + TR_start;
cal += '<TD COLSPAN="' + DAYS_OF_WEEK + '" BGCOLOR="#f78a1d"><CENTER><B>';
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
</nav>

<!-- Page Content -->
<div id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center header-uin id="home">
    <h1 class="w3-xxxlarge"><span class="w3-hide-small">Sistem Informasi Mahasiswa Pendidikan Matematika</span></h1>
    <p>UIN JAKARTA</p>
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-white w3-padding-32" id="about" style="overflow-x:auto; ">
    <h2 class="w3-text-white" align="center">Data Mahasiswa</h2>
    <p align="center">
    </p>
    <ul class="w3-small" style="background-color: #066ea3">
  <li style="background-color: #2b2d2d"><a class="active" href="data_mahasiswa.php">Lihat Data</a></li>
  <li style="background-color: #2b2d2d"><a href="data_mahasiswa-editData.php">Edit Data</a></li>
  <li style="background-color: orange"><a href="data_mahasiswa-cariData.php">Cari Data</a></li>
</ul>
<p></p>
<form action="data_mahasiswa-cariData.php" method="get">
    <label>Cari :</label>
    <input type="text" name="cari">
    <input type="submit" value="Cari">
</form>
<p></p>
<?php 
$hasilCari;
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $hasilCari = $cari;
    echo "<p></p><b>Hasil pencarian : ".$hasilCari."</b> <p></p>";
}
?>
 
<table class="w3-table-all w3-small w3-card-4 w3-centered" border="1">
    <thead>
    <tr style="background-color: #282c33">
            <th>Tindakan</th>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>TTL</th>
            <th>Asal SMA</th>
            <th>Telp. Rumah</th>
            <th>HP</th>
            <th>E-mail</th>
            <th>Ibu</th>
            <th>Bapak</th>
            <th>No. Telp Ortu</th>
            <th>Alamat</th>
            <th>Kelurahan</th>
            <th>Kecamatan</th>
            <th>Negara</th>
            <th>Provinsi</th>
            <th>Kabupaten/Kota</th>
            <th>Kode Pos</th>
            <th>Email Lain</th>
        </tr>
    </thead>
    <tbody class="w3-text-black">
    <?php
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];             
        $sql = "SELECT * FROM mhs WHERE nama LIKE '%".$cari."%'";
        $query = mysqli_query($db,$sql);
    }else{
        $sql2 = "SELECT * FROM mhs";
        $query = mysqli_query($db,$sql2);       
    }
    $no = 1;
    while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "<td>".$no."</td>";
            echo "<td>".$siswa['nim']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['ttl']."</td>";
            echo "<td>".$siswa['asal_sma']."</td>";
            echo "<td>".$siswa['telp_rumah']."</td>";
            echo "<td>".$siswa['no_hp']."</td>";
            echo "<td>".$siswa['email']."</td>";
            echo "<td>".$siswa['ibu']."</td>";
            echo "<td>".$siswa['bapak']."</td>";
            echo "<td>".$siswa['no_telp_ortu']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['kelurahan']."</td>";
            echo "<td>".$siswa['kecamatan']."</td>";
            echo "<td>".$siswa['negara']."</td>";
            echo "<td>".$siswa['provinsi']."</td>";
            echo "<td>".$siswa['kabupaten_kota']."</td>";
            echo "<td>".$siswa['kode_pos']."</td>";
            echo "<td>".$siswa['email_lain']."</td>";

            echo "</tr>";
        }
        ?>
    </tbody>
</table>
</div>

    
  

<!-- END PAGE CONTENT -->

</body>
</html>
