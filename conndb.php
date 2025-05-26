<META http-equiv=Content-Type content="text/html; charset=windows-874">

<?

$hostname = "localhost";	//ชื่อโฮสต์
$user = "mainmrgo";	//ชื่อผู้ใช้  $user = "koratmrg";
$password = "SQdec298";	 //รหัสผ่าน   $password = "dec298";
$dbname = "mainmrgo_db";	//ชื่อฐานข้อมูล $dbname = "koratmrg"$dbname = "mainmrgo_db";
$tblname = "d_mrgo";
$conn = mysql_connect($hostname,$user,$password) or die ("ไม่สามารถติดต่อ Mysql ได้ในขณะนี้");
$db=mysql_select_db($dbname)or die("ไม่สามารถติดต่อ database ได้ในขณะนี้");
mysql_query("SET NAMES utf8");


?>



<!--
 <?php
$servername = "localhost";
$username = "mainmrgo";
$password = "SQdec298";
$dbname = "mainmrgo_db";
$tblname = "d_mrgo";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


?> -->
