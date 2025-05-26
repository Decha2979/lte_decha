<HTML><HEAD><TITLE></TITLE>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta http-equiv=Content-Type content="text/html; charset=windows-874">

<!-- Bootstrap CSS -->
<script type="text/javascript" src ="../bootstrap4_4_1/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="../bootstrap4_4_1/css/bootstrap.min.css"  crossorigin="anonymous">

<?
include ("../bootstrap4_4_1/css/decha.css");

?>
			 <meta charset="utf-8">
			 <meta http-equiv="X-UA-Compatible" content="IE=edge">
			 <meta name="viewport" content="width=device-width, initial-scale=1">
			 <title>ข้อมูลการลงทะเบียน</title>

			 <!-- Bootstrap -->
			 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


<link rel="stylesheet" href="../bootstrap4_4_1/css/bootstrap-4-hover-navbar.css"  crossorigin="anonymous">


			 <!--Demo purpose css-->
			 <style>
					 body {
							 padding-top: 50px;
					 }
					 .navbar {
							 margin:  40px 0;
					 }
					 .jumbotron{background-color: #1f1f1f;color: #fff;}

			 </style>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200;400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300&family=Kanit:wght@600&display=swap" rel="stylesheet">

<style>
		 .kanitdec {
			font-family: 'Kanit', sans-serif;
		 }
	 .prompt  {
			font-family: 'Prompt', sans-serif;
		 }

	 </style>
<?php

function fullDateTimes(){
			$thDay = array('อาทิตย์', 'จันทร์' ,'อังคาร' ,'พุธ' ,'พฤหัสบดี' ,'ศุกร์' ,'เสาร์' );
		$thMon = array('มกราคม', 'กุมภาพันธ์' ,'มีนาคม' ,'เมษายน','พฤษภาคม' ,'มิถุนายน',
									 'กรกฎาคม' ,'สิงหาคม' ,'กันยานยน' ,'ตุลาคม' ,'พฤศจิกายน' ,'ธันวาคม' );
		$w = $thDay[date('w')];
		$d = date('d');
		$m = $thMon[date('n')-1];
		$y = date('y')+2543;
		return 'วัน ' .$w. 'ที่ '.$d. ' เดือน ' .$m. ' ปี ' .$y. ' เวลา :' .date('H:i:s');
			 }

?>

	 </head>
<body background="images/bg2.gif">
<form name="form1" method="post" action="post_add.php">
  <table width="100%" border="1" align="center" cellspacing="0" bordercolor="#FF66CC"  >
   
    <tr align="center"> 
   
      <td ><div align="right"><font color="#0000FF" face="Arial, Helvetica, sans-serif">ชื่อรายละเอียดเอกสาร</font></div></td>
      <td width="70%" ><div align="left">
        <input type="text" name="name" size="50">
     </div></td>
    </tr>
    
    <tr align="center"> 
   
      <td ><div align="right"><font color="#0000FF" face="Arial, Helvetica, sans-serif">
    ประเภทเอกสาร </font></div></td>
      <td width="70%" ><div align="left">
        <input type="text" name="code" size="50">
     </div></td>
    </tr>
    
    <tr align="center"> 
   
      <td ><div align="right"><font color="#0000FF" face="Arial, Helvetica, sans-serif">
      เบอร์โทรศัพท์มือถือ </font></div></td>
      <td width="70%" ><div align="left">
        <input type="text" name="t_per" size="50">
     </div></td>
    </tr>
    
    <tr align="center"> 
      <td ><div align="right"><font color="#0000FF" face="Arial, Helvetica, sans-serif">จ่ายเงินแล้ว</font></div></td>
      <td width="70%" ><div align="left">
      <input type="text" name="money"  size="50">
      </div></td>
    </tr>
      
    <tr align="center"> 
      <td width="30%" ><div align="right">
      <font color="#0000FF" face="Arial, Helvetica, sans-serif">
      รุ่นที่</font>
      </div></td>
      
      
      <td ><div align="left">
        <input type="text" name="sur_1"  size="5">
      </div></td>
    </tr>
    
    <tr align="center"> 
      <td width="30%" ><div align="right">
      <font color="#0000FF" face="Arial, Helvetica, sans-serif">
      มา </font>
      </div></td>
      
      
      <td ><div align="left">
      
        <input type="text" name="sur_2"  size="5">
      
      </div></td>
    </tr>
     
    <tr align="center"> 
      <td width="30%" ><div align="right">
      <font color="#0000FF" face="Arial, Helvetica, sans-serif">
      ไม่มา </font>
      </div></td>
      
      
      <td ><div align="left">
      
        <input type="text" name="sur_4"  size="5">
      
      </div></td>
    </tr>
   
     
    <tr align="center"> 
      <td width="30%" ><div align="right">
      <font color="#0000FF" face="Arial, Helvetica, sans-serif">
      ไม่แน่ </font>
      </div></td>
      
      
      <td ><div align="left">
      
        <input type="text" name="sur_5"  size="5">
      
      </div></td>
    </tr>
   
    <tr align="center"> 
      <td width="30%" ><div align="right">
      <font color="#0000FF" face="Arial, Helvetica, sans-serif">
      ผู้ติดตาม</font>
      </div></td>
      
      
      <td ><div align="left">
      
        <input type="text" name="sur_3"  size="5">
      
      </div></td>
    </tr>
   
    <tr align="center"> 
      <td width="30%" ><div align="right">
      <font color="#0000FF" face="Arial, Helvetica, sans-serif">
      ห้องพัก</font>
      </div></td>
      
      
      <td ><div align="left">
      
        <input type="text" name="sur_12"  size="5">
      
      </div></td>
    </tr>
   
    <tr align="center"> 
      <td width="30%" ><div align="right">
      <font color="#0000FF" face="Arial, Helvetica, sans-serif">
      เสื้อเบอร์ S </font>
      </div></td>
      
      
      <td ><div align="left">
      
        <input type="text" name="sur_6"  size="5">
      
      </div></td>
    </tr>
   
    <tr align="center"> 
      <td width="30%" ><div align="right">
      <font color="#0000FF" face="Arial, Helvetica, sans-serif">
      เสื้อเบอร์ M </font>
      </div></td>
      
      
      <td ><div align="left">
      
        <input type="text" name="sur_7"  size="5">
      
      </div></td>
    </tr>
   
    <tr align="center"> 
      <td width="30%" ><div align="right">
      <font color="#0000FF" face="Arial, Helvetica, sans-serif">
      เสื้อเบอร์ L </font>
      </div></td>
      
      
      <td ><div align="left">
      
        <input type="text" name="sur_8"  size="5">
      
      </div></td>
    </tr>
   
    <tr align="center"> 
      <td width="30%" ><div align="right">
      <font color="#0000FF" face="Arial, Helvetica, sans-serif">
      เสื้อเบอร์ XL</font>
      </div></td>
      
      
      <td ><div align="left">
      
        <input type="text" name="sur_9"  size="5">
      
      </div></td>
    </tr>
    
    <tr align="center"> 
      <td width="30%" ><div align="right">
      <font color="#0000FF" face="Arial, Helvetica, sans-serif">
      เสื้อเบอร์ XXL</font>
      </div></td>
      
      
      <td ><div align="left">
      
        <input type="text" name="sur_10"  size="5">
      
      </div></td>
    </tr>
    <tr align="center"> 
      <td width="30%" ><div align="right">
      <font color="#0000FF" face="Arial, Helvetica, sans-serif">
      เสื้อเบอร์ XXXL</font>
      </div></td>
      
      
      <td ><div align="left">
      
        <input type="text" name="sur_11"  size="5">
      
      </div></td>
    </tr>
   

    <tr align="center">
      <td height="15" >&nbsp;</td>
      <td ><div align="left">
          <input name="submit" type="submit" value="บันทึกข้อมูล">
        </div></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
</BODY>
</HTML>
