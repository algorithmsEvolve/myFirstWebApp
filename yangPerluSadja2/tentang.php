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
  <a href="data_mahasiswa.php" class="w3-bar-item w3-button w3-padding-large w3-hover-grey">
    <i>
      <img src="./images/nav_acc-icon.png" width="20px" height="20px">
    </i><b style="margin-left: 5px; color:#ffffff"">
    Data Mahasiswa</b>
  </a>
  <a href="tentang.php" class="w3-bar-item w3-button w3-padding-large w3-hover-grey"style="background-color: #f5deb3">
    <i>
      <img src="./images/nav_tentang-icon2.png" width="20px" height="20px">
    </i><b style="margin-left: 5px; color:#000000">
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
<!-- Page Content -->
<div id="main">
  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-black w3-padding-32" id="about">
    <h2 class="w3-text-black" align="center">Tentang</h2>
    <p align="center">Website ini adalah ....
    </p>
    <hr>
    <!-- EDIT DISINI NIN -->
    <h4>
      Team :
    </h4>
    <h5 style="float: left">
      <img src="./images/tentang1.jpg" width="200px" height="200px">
      <br>
      Annisa Fira Nindy Amalia
      <br>
      Pendidikan Matematika 5B
      <br>
      11160170000043
    </h5>
    <h5 style="float: right">
      <img src="./images/tentang2.jpg" width="200px" height="200px">
      <br>
      Maghfira Izani Maulani
      <br>
      Pendidikan Matematika 5B
      <br>
      11160170000050
    </h5>
</div>

<!-- END PAGE CONTENT -->
<div class="footerBot">
  <div style="background-color: #a52a2a;color: white">
<hr>
<footer style="text-align: center">
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
