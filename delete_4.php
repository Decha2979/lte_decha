<meta http-equiv=Content-Type content="text/html; charset=utf-8">
 <?php
//กำหนดตัวแปรเพื่อนำไปใช้งาน
 include ("conndb.php"); 
//Include("../thai.inc");	//แทรกไฟล์เพื่อใช้อาร์เรย์ที่เกี่ยวกับภาษาไทย

// เริ่มติดต่อฐานข้อมูล
mysql_connect($hostname, $user, $password) or die("ติดต่อฐานข้อมูลไม่ได้");

// เลือกฐานข้อมูล
mysql_select_db($dbname) or die("เลือกฐานข้อมูลไม่ได้");

//setlocale("LC_TIME","th");	//ใช้เวลาแบบไทย (ดูตัวอย่างในบทที่ 7)
if ($delpic =="del") {
	$strSQL = "SELECT * FROM $tblname where id = '$id'";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
    $result = mysql_fetch_array($objQuery);
           if ($result["tumpic"]  != ""){     
  		     unlink ($result[tumpic]);  //ลบไฟล์ jpg เดิมที่เก็บไว้
      }
	$tumpic="";
	$sql = "update $tblname set   tumpic = '$tumpic' where id = '$id'";
    $result = mysql_db_query($dbname, $sql);
}
if ($delpdf =="del") {
	$strSQL = "SELECT * FROM $tblname where id = '$id'";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
    $result = mysql_fetch_array($objQuery);
           if ($result["f_pdf"]  != ""){     
  		     unlink ($result[f_pdf]);  //ลบไฟล์ pdf เดิมที่เก็บไว้
      }
	$f_pdf="";
	$sql = "update $tblname set   f_pdf = '$f_pdf' where id = '$id'";
    $result = mysql_db_query($dbname, $sql);
}		
// คำสั่ง SQL และสั่งให้ทำงาน
$sql = "delete from  $tblname   where id = $id ";	// กำหนดคำสั่ง SQL เพื่อเพิ่มข้อมูล
$result = mysql_db_query($dbname, $sql);
if(!$result){
		echo “ไม่สามารถลบได้”;
}else{
 		echo “ลบได้สำเร็จ”;
}
// ปิดการติดต่อฐานข้อมูล

?>
<body>

		<center>
		<table width=60% border=1 bordercolor=#ff69b4 bgcolor=#f0ffff cellpadding=2 cellspacing=0>
		<tr><td align=center>
		<font size=2 face='MS Sans Serif'>
		<font size=3 color=red><b>ลบข้อมูลได้แล้วครับ</b></font><br><br>
        หากกลับไปหน้าแรกแล้วข้อมูลของคุณยังไม่ขึ้นให้ลองกดปุ่ม Refresh/Reload 
        ครับ </font></td>
    </tr></table>
		<br><hr color=FF1493 width=600>
	<META HTTP-EQUIV="Content-Type" content="text/html; charset=Windows-874">
	<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=login_edit_4_16_05_64.php">

		</center>
		
		
		</body>