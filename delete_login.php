
 <?php
//��˹���������͹����ҹ
 include ("conndb.php"); 
//Include("../thai.inc");	//�á�����������������������ǡѺ������

// ������Դ��Ͱҹ������
mysql_connect($hostname, $user, $password) or die("�Դ��Ͱҹ�����������");

// ���͡�ҹ������
mysql_select_db($dbname) or die("���͡�ҹ�����������");

//setlocale("LC_TIME","th");	//������Ẻ�� (�ٵ�����ҧ㹺���� 7)
if ($delpic =="del") {
	$strSQL = "SELECT * FROM $tblname where id = '$id'";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
    $result = mysql_fetch_array($objQuery);
           if ($result["tumpic"]  != ""){     
  		     unlink ($result[tumpic]);  //ź��� jpg �����������
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
  		     unlink ($result[f_pdf]);  //ź��� pdf �����������
      }
	$f_pdf="";
	$sql = "update $tblname set   f_pdf = '$f_pdf' where id = '$id'";
    $result = mysql_db_query($dbname, $sql);
}		
// ����� SQL ���������ӧҹ
$sql = "delete from  $tblname   where id = $id ";	// ��˹������ SQL ��������������
$result = mysql_db_query($dbname, $sql);
if(!$result){
		echo ��������öź��;
}else{
 		echo �ź������稔;
}
// �Դ��õԴ��Ͱҹ������

?>
<body>

		<center>
		<table width=60% border=1 bordercolor=#ff69b4 bgcolor=#f0ffff cellpadding=2 cellspacing=0>
		<tr><td align=center>
		<font size=2 face='MS Sans Serif'>
		<font size=3 color=red><b>ź�����������Ǥ�Ѻ</b></font><br><br>
        �ҡ��Ѻ�˹���á���Ǣ����Ţͧ�س�ѧ���������ͧ������ Refresh/Reload 
        ��Ѻ </font></td>
    </tr></table>
		<br><hr color=FF1493 width=600>
	<META HTTP-EQUIV="Content-Type" content="text/html; charset=Windows-874">
	<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=man_add_1.php">

		</center>
		
		
		</body>