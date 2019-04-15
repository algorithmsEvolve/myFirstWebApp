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
  <a href="data_mahasiswa.php" class="w3-bar-item w3-button w3-padding-large w3-hover-grey" style="background-color: #f5deb3">
    <i>
      <img src="./images/nav_acc-icon2.png" width="20px" height="20px">
    </i><b style="margin-left: 5px; color:#000000"">
    Data Mahasiswa</b>
  </a>
  <a href="tentang.php" class="w3-bar-item w3-button w3-padding-large w3-hover-gray">
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
cal += '<TD CLASS="w3-text-black" COLSPAN="' + DAYS_OF_WEEK + '" BGCOLOR="#f5deb3"><CENTER><B>';
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
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
</div>
</nav>

  <header class="w3-container w3-card-4 w3-padding-small w3-center id="home" style="position: sticky;top:0px;background-image: url('./images/headerFix.png');background-size: 100% 100%;height: 90px">
    <h1 class="w3-xlarge" style="text-align: left; margin-bottom: 2px; color: #fff"></h1>
  </header>

  <!-- About Section -->
  <!-- Table Data Mahasiswa-->
  <div class=" w3-justify w3-text-white w3-padding-16" id="about" style="overflow-x:auto; margin-left: 250px; margin-right: 20px">
    <h2 class="w3-text-black" align="center">Data Mahasiswa</h2>
    <hr>
    <p align="center">
    </p>
    <ul class="w3-small" style="background-color: #f5deb3">
  <li style="background-color: grey"><a class="active" href="data_mahasiswa.php">Lihat Data</a></li>
  <li style="background-color: #2b2d2d"><a href="form-tambah.php">Tambah Data</a></li>
  <li style="background-color: #f5deb3;float: right;color: #000;line-height: 20px;padding-top: 10px"><form action="data_mahasiswa.php" method="get">
    <label>Pencarian : </label>
    <input type="text" name="cari">
    <input type="submit" value="Cari" style="background-color: #2b2d2d;color: white;border-color:#2b2d2d">
</form>
</li>
</ul>
<?php 
$hasilCari;
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $hasilCari = $cari;
    echo "<p></p><b style='color:black'>Hasil pencarian : ".$hasilCari."</b> <p></p>";
}
?>
<table class="w3-small w3-table w3-card-4" border="1" style="background-color: #f5deb3">
    <thead>
        <tr style="background-color: #282c33">
            <th style="width: 10%">ID</th>
            <th style="width: 10%">Foto</th>
            <th style="width: 10%">NIM</th>
            <th style="width: 10%">Nama</th>
            <th style="width: 10%">TTL</th>
            <th style="width: 10%">Asal SMA</th>
            <th style="width: 10%">Telp. Rumah</th>
            <th style="width: 10%">HP</th>
            <th style="width: 10%">E-mail</th>
            <th style="width: 10%">Tindakan</th>
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

            echo "<td>".$no."</td>";
            $s=$siswa['foto'];
            echo '<td><img src="./upload/'.$s.'" alt="foto" style="width:110px;height:128px"></td>';
            echo "<td>".$siswa['nim']."</td>";
            echo "<td><a href='lihat-data.php?id=".$siswa['id']."'>".$siswa['nama']."</a></td>";
            echo "<td>".$siswa['ttl']."</td>";
            echo "<td>".$siswa['asal_sma']."</td>";
            echo "<td>".$siswa['telp_rumah']."</td>";
            echo "<td>".$siswa['no_hp']."</td>";
            echo "<td>".$siswa['email']."</td>";
            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'><img src='./images/edit-icon.png' title='edit' style='width:20px;height:20px'></a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'onclick='return checkDelete()'><img src='./images/delete-icon.png' title='hapus'style='width:20px;height:20px'></a>";
            echo "</td>";
            echo "</tr>";
            $no=$no+1;
        }
        ?>

    </tbody>
    </table>

</div>

<div class="footerBot">
  <div style="background-color: #a52a2a;color: white">
<hr>
<footer style="text-align: center;margin-left: 200px">
  <a href="http://twitter.com/nindy_amalia"><img src="./images/twitter-icon.png" width="40px" height="40px">
  </a>
  <a href="http://instagram.com/nindyamalia" style="margin-left: 5px">
  <img src="./images/instagram-icon2.png" width="33px" height="33px">
</a>
<p>
    Copyright@Nindy dan Maghfira -FITK-UIN Syarif Hidayatullah Jakarta
  </p>

</footer>
</div>
</div>
</body>
</html>
