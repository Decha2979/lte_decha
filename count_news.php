<HTML><HEAD><TITLE></TITLE>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">

<STYLE>BODY {
	FONT-SIZE: 8pt; COLOR: black; FONT-FAMILY: MS Sans Serif
}
TD {
	FONT-SIZE: 10pt; COLOR: black; FONT-FAMILY: MS Sans Serif
}
SELECT {
	FONT-SIZE: 8pt; FONT-FAMILY: 'ms sans serif'
}
INPUT {
	FONT-SIZE: 8pt; FONT-FAMILY: 'ms sans serif'
}
.pos1 {
	POSITION: absolute; TOP: 170px
}
.color2 {
	COLOR: blue
}
.pos2 {
	BACKGROUND: #eafdff; LEFT: 228px; WIDTH: 150px; POSITION: absolute; TOP: 168px
}
.pos3 {
	BACKGROUND: #eafdff; LEFT: 228px; WIDTH: 220px; POSITION: absolute; TOP: 190px
}
.pos4 {
	BACKGROUND: #eafdff; LEFT: 228px; WIDTH: 220px; POSITION: absolute; TOP: 210px
}
.pos5 {
	BACKGROUND: #eafdff; LEFT: 228px; WIDTH: 220px; POSITION: absolute; TOP: 231px
}
.pos6 {
	BACKGROUND: #eafdff; LEFT: 228px; WIDTH: 225px; POSITION: absolute; TOP: 252px
}
.pos7 {
	BACKGROUND: #eafdff; LEFT: 228px; WIDTH: 225px; POSITION: absolute; TOP: 274px
}
.pos8 {
	BACKGROUND: #eafdff; LEFT: 228px; WIDTH: 220px; POSITION: absolute; TOP: 294px
}
AA {
	COLOR: green; TEXT-DECORATION: none
}
AA:hover {
	COLOR: blue
}
A {
	COLOR: #660033; TEXT-DECORATION: none
}
A:hover {
	COLOR: red; TEXT-DECORATION: underline
}
.menu {
	COLOR: black
}
</style>

<style><style type=text/css>A:hover {
	COLOR: #ff0000; BACKGROUND-COLOR: #FF9900; TEXT-DECORATION: underline
}
</style>
<STYLE type=text/css>A:hover {
	COLOR: #ff0000; BACKGROUND-COLOR: #FF9900; TEXT-DECORATION: underline
}
</STYLE>
<STYLE>BODY {
	SCROLLBAR-FACE-COLOR: #ff9966; SCROLLBAR-HIGHLIGHT-COLOR: #0000ff; SCROLLBAR-SHADOW-COLOR: #ffffff; SCROLLBAR-3DLIGHT-COLOR: #ffffff; SCROLLBAR-ARROW-COLOR: #ffffff; SCROLLBAR-TRACK-COLOR: #fff2e6; SCROLLBAR-DARKSHADOW-COLOR: #0000ff
}

</STYLE>


</HEAD>
 <?php
//กำหนดตัวแปรเพื่อนำไปใช้งาน
 include ("conndb.php");
//Include("../thai.inc");	//แทรกไฟล์เพื่อใช้อาร์เรย์ที่เกี่ยวกับภาษาไทย
// เริ่มติดต่อฐานข้อมูล

$objConnect = mysql_connect($hostname, $user, $password)or die("Error Connect to Database");
$objDB = mysql_select_db($dbname);
$strSQL = "SELECT * FROM d_mrgo where id = '$id'";
mysql_query("SET NAMES UTF8");
	// กำหนดคำสั่ง SQL เพื่อแสดงข้อมูล
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
$result = mysql_fetch_array($objQuery);
    $count = $result[count];

$sum_count= $count+1;

$sql = "update d_mrgo set  count = '$sum_count'  where id = '$id'";	// กำหนดคำสั่ง SQL เพื่อเพิ่มข้อมูล

$result = mysql_db_query($dbname, $sql);


?>


<body>


  <hr color=FF1493 width=600>
  <META HTTP-EQUIV="Content-Type" content="text/html; charset=Windows-874">
	<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=<?php echo $f;?>">

		</center>


		</body>
