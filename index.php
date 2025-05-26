<HTML><HEAD>

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
			 <title>เอกสารเผยแพร่ อบต.มะเริง</title>

			 <!-- Bootstrap -->
			 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


<link rel="stylesheet" href="../bootstrap4_4_1/css/bootstrap-4-hover-navbar.css"  crossorigin="anonymous">


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
      $m = array(
            "",
            " ม.ค. ",
            " ก.พ. ",
            " มี.ค. ",
            " เม.ย. ",
            " พ.ค. ",
			" มิ.ย. ",
            " ก.ค. ",
            " ส.ค. ",
            " ก.ย. ",
            " ต.ค. ",
            " พ.ย. ",
            " ธ.ค. "
        );

?>

<style>
body {
  background-color: black;
}
</style>
</head>

<? if ($codesearch == "1" ) {
	?>

<div class="container-md">

	 <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

	  <form class="form-inline mb-1" method="post" action="index.php">
	  <input type="hidden" name="codesearch" value ="1">
	    <div class="input-group">
	      <div class="input-group-prepend">
	        <span class="input-group-text">&#128269;</span>
	      </div>
				<input type="hidden" name="type" value ="name">
	      <input class="form-control mr-sm-2 prompt" type="text" placeholder="คำค้นหา"  name="search" size="11" value =<?php echo $search	;?>>
	    &nbsp;
		 <button class="btn btn-primary btn-sm  prompt" type="submit">ค้นหา</button>
        </div>
	  </form>


&nbsp;
<a href = "index.php#" class="btn btn-rounded btn-dark btn-sm  prompt" role = "button" title="Exit" >
<font class = "prompt text-dark" size="1">
<!--icon onlin -->
<i class="fa fa-sign-out text-success " style="font-size:30px;color:light"></i>
</font>
</a>

		 &nbsp;
<a href = "index_2.php" target = "_blank" class="btn btn-dark btn-sm text-dark" role = "button" >admin
</a>
 &nbsp;
<a href = "login_edit_4_12_06_66.php" target = "_blank" class="btn btn-dark btn-sm text-dark" role = "button" >admin
</a>

&nbsp;
<a href = "index_28_11_65.php" target = "_blank" class="btn btn-dark btn-sm text-dark" role = "button" >admin
</a>
&nbsp;
<a href = "index_12.php" target = "_blank" class="btn btn-dark btn-sm text-dark" role = "button" >admin
</a>
</nav>
</div>
<? } ?>

<?
include ("conndb.php");
//d_mrgo = "mr_index";	//ชื่อตาราง
	/*** Connect ***/
	$objConnect = mysql_connect($hostname, $user, $password)or die("Error Connect to Database");
	$objDB = mysql_select_db($dbname);
     mysql_query("SET NAMES UTF8");
// คำสั่ง SQL และสั่งให้ทำงาน

$strSQL4 = "select * from d_mrgo order by id ";	// กำหนดคำสั่ง SQL เพื่อแสดงข้อมูล
$objQuery4= mysql_query($strSQL4) or die ("Error Query [".$strSQL4."]");


?>
<!-- Small button groups (default and split) -->

<div class="container-md">

<div class="btn-group">
<a class="nav-link dropdown-toggle badge badge-dark badge-sm " role = "badge"  " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<font class = "prompt text-light " size="3">
รายการ ที่ 1-15
</font>
</a>

  <div class="dropdown-menu">
 		<?php

				$strSQL4 = "select * from mr_index order by id limit 15 ";	// กำหนดคำสั่ง SQL เพื่อแสดงข้อมูล
				$objQuery4= mysql_query($strSQL4) or die ("Error Query [".$strSQL4."]");

				         $i=1;
				        	while($objResult4 = mysql_fetch_array($objQuery4))

							{

							?> <li>
							<a class='dropdown-item 'href='index.php?type=code&search=<?echo $objResult4[code];?>&codesearch=<?echo $codesearch;?>'
							>
									<font class = "dropdown-item prompt text-primary " role = "badge" size = "2" >
									<?echo $objResult4[name];?>
									</font> </a></li>
							<?
						$i++;
							}
				?>
  </div>
</div>

&nbsp;
<div class="btn-group">
<a class="nav-link dropdown-toggle badge badge-dark badge-sm " role = "badge" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<font class = "prompt text-light " size="3">
รายการ ที่ 16...
</font>
</a>

  <div class="dropdown-menu">
 		<?php

				$strSQL4 = "select * from mr_index order by id limit 15,15 ";	// กำหนดคำสั่ง SQL เพื่อแสดงข้อมูล
				$objQuery4= mysql_query($strSQL4) or die ("Error Query [".$strSQL4."]");

				         $i=1;
				        	while($objResult4 = mysql_fetch_array($objQuery4))

							{

							?> <li>
							<a class='dropdown-item 'href='index.php?type=code&search=<?echo $objResult4[code];?>&codesearch=<?echo $codesearch;?>'
							>
									<font class = "dropdown-item prompt text-primary" role = "badge" size = "2" >
									<?echo $objResult4[name];?>
									</font> </a></li>
							<?
						$i++;
							}
				?>
  </div>
</div>
&nbsp;

<a href = "index.php">
<font class = "prompt text-light badge badge-dark badge-sm " size="3">
ทั้งหมด
</font>
</a>

<a href = "index.php?codesearch=1"
 style="text-decoration: none"
  >
<i class="bi bi-search text-danger " style="font-size:30px;color:light"></i>
</a>
<br>

   <?php
 include ("conndb.php");

if ($list_page == "")
	{
	$list_page = 20;}
	/*** Connect ***/
	$objConnect = mysql_connect($hostname, $user, $password)or die("Error Connect to Database");
	$objDB = mysql_select_db($dbname);
	mysql_query("SET NAMES UTF8");
if ($order == "" )
	{ 	$order = "DESC" ;}
//else
//{ 	$order = "DESC" ;}

if ($search == "")
	{
		$type = "name";
		$search = "";
	}
if ($sort == "")
	{
		$sort = "id";
	}
if ($type == "")
	{
		$type = "name";
		$search = "";
	}
// ติดต่อ database เพื่ออ่านข้อมูล
// หาจำนวนหน้าทั้งหมด
	$chk_date = date("j M Y",mktime( date("H")+$p_hour, date("i")+$p_min ));
	if (empty($page)){
		$page=1;
	}

$sql = "select id from d_mrgo where $type like '%$search%' ";
	$result = mysql_query($sql);
	$NRow = mysql_num_rows($result);
	$rt = $NRow%$list_page;
	if($rt!=0) {
		$totalpage = floor($NRow/$list_page)+1;
	}
	else {
		$totalpage = floor($NRow/$list_page);
	}
	$goto = ($page-1)*$list_page;


//    if ($list_page == $goto) {
//	     $list_page = $goto + $list_page; }

// Query ข้อมูลตามจำนวนที่กำหนด
//	$sql = "select * from webboard_data where Category='$Category' order by No DESC limit $goto,$list_page";
//	$result = mysql_query($sql);
//	$NRow = mysql_num_rows($result);

// กำหนดคำสั่ง SQL เพื่อแสดงข้อมูล
$strSQL2 = "select * from d_mrgo where  $type like '%$search%' order by $sort $order limit $goto,$list_page";
$objQuery2 = mysql_query($strSQL2) or die ("Error Query [".$strSQL2."]");
$NRow = mysql_num_rows($objQuery2);

 $id = $goto;

?>


<nav>


<div class="container  alert bg-dark btn-group btn-group-sm">
		<?
	// สร้าง link <<BACK เพื่อไปหน้าก่อน-หน้าถัดไป
	// ถ้าหน้าปัจจุบัน($page)มากกว่า 1 และ(&&) หน้าปัจจุบัน น้อยกว่าหรือเท่า จำนวนหน้าทั้งหมด($totalpage) ให้แสดง Link <<BACK
		 if($page>1 && $page<=$totalpage) {
		 $prevpage = $page-1;
		 echo
		 "<button type='button' class='btn btn-outline-warning btn-rounded btn-sm my-0 prompt'>
		 <a href ='index.php?search=$search&sort=$sort&type=$type&order=$order&page=$prevpage'>
		<<
		 </a></button>";
	 }
	 else {
		 echo
	 // ปุ่ม <<BACK  Disable
		 "<button type='button' class='btn btn-outline-secondary btn-rounded btn-sm my-0 prompt'>
		 <<
		 </button>";
	 }
     // ถ้าจำนวนหน้าทั้งหมดมากกว่า  5 ให้แสดงหน้าที่ 1-3
 if ($totalpage>=1){
	 // สำหรับ $lowpage น้อยกว่าหน้าปัจจุบัน และ $lowpage น้อยกว่า 4 ให้แสดง
			for ($lowpage=1 ; $lowpage<$page && $lowpage<=1 ; $lowpage++){
			 echo "\t<button type='button' class='btn btn-outline-warning btn-rounded btn-sm my-0 prompt'><a href ='index.php?search=$search&sort=$sort&type=$type&order=$order&page=$lowpage'>$lowpage</a></button> \n";
			}
			if ($page<=2){
			 echo "\t<button type='button' class='btn  btn-outline-danger  btn-sm my-0 prompt'>$page</button> \n";
			}

	//&&$totalpage>=$page+3
			if ($page>=3){
				echo "
				\t<button type='button' class='btn  btn-outline-secondary  btn-sm my-0 prompt'>
				...
				</button> \n
				";
				for ($lowpage= $page-1 ; $lowpage<$page ; $lowpage++){
				 echo "\t<button type='button' class='btn btn-outline-warning btn-rounded btn-sm my-0 prompt'><a href ='index.php?search=$search&sort=$sort&type=$type&order=$order&page=$lowpage'>$lowpage</a></button> \n";
			 }
				echo "\t<button type='button' class='btn  btn-outline-danger  btn-sm my-0 prompt'>$page</button> \n";
						}
		for ($lowpage=$page+1 ; $lowpage<=$page+1 &&$lowpage<=$totalpage ; $lowpage++){
			 echo "\t<button type='button' class='btn btn-outline-warning btn-rounded btn-sm my-0 prompt'><a href ='index.php?search=$search&sort=$sort&type=$type&order=$order&page=$lowpage'>$lowpage</a></button> \n";
			}
			if($totalpage>$page+2)
			{
		 echo

		    "
			\t<button type='button' class='btn  btn-outline-secondary  btn-sm my-0 prompt'>
				...
				</button> \n
			";
			}
			}
    /* link สามหน้าสุดท้าย หายไปเมื่อหน้าปัจจุบันใกล้เข้ามา  */
	 $M = $totalpage -1;
	 if ($totalpage>=$page+2){
	 for($l=$M+1 ; $l<=$totalpage ; $l++) {
		 echo "\t<button type='button' class='btn btn-outline-warning btn-rounded btn-sm my-0 prompt'>
		 <a href ='index.php?search=$search&sort=$sort&type=$type&order=$order&page=$l'>
		 $l
		 </a></button>\n ";
	 }
	 }
	 if($page!=$totalpage) {
		 $nextpage = $page+1;
		 echo "\t<button type='button' class='btn btn-outline-warning btn-rounded btn-sm my-0 prompt'><a href ='index.php?search=$search&sort=$sort&type=$type&order=$order&page=$nextpage'>
		 >>
		 </a></button>\n";
	 }
			 else {
			echo " <button type='button' class='btn btn-outline-secondary btn-rounded btn-sm my-0 prompt'>
			>>
			</button> ";
				}

	 ?>

</div>

</nav>


<main>


<table id="next" class="table table-secondary table-striped">

<?
		$k=1;

		while($objResult = mysql_fetch_array($objQuery2))
		{

	    $id++;
		//
		?>

<tr id="<?=$objResult["id"];?>" >
      <th scope="row"  >
	  <font class = "prompt text-dark " size="1" >

      <? if ($objResult["tumpic"]  != "") {
      	 echo    "\t <img src = $objResult[tumpic]  width = \"70\" > ";
      	 }
      	 else
      	 { echo "$id.";
      	 //"<img src = images/mrg_logo.jpg width = \"80\" >";
      	 }

      	 ?>
	  </font>
	  </th>

<td >

<a href ="count_news.php?id=<?echo$objResult[id];?>&f=<?php echo $objResult["f_pdf"] ;?>"  target ="_blank" role = "button" title="Open PDF" >
<font class = "prompt text-dark " size="5" id ="<?=$objResult["id"];?>">

	  <?php
			$keySearch = $search;
			$myStrong = $objResult["name"];
		// ค้นหาข้อความใน $search เพื่อเน้นคำค้นหาในตัวแปร $objResult["name"]

		echo str_replace($keySearch,"<font size = 5 color=red><b>$keySearch</b></font>",$myStrong);

		?>

</font>
</a>
<br>

<font class = "prompt text-danger " size="3">

<?
if ($objResult["day_regis"]  != ""){
//		echo '<br>';
//echo $objResult["day_regis"];
 $year = substr(($objResult["day_regis"]),0,4);
 $yearth = substr(($year+543),2,4) ;
 $day = number_format(substr(($objResult["day_regis"]),8,2));
 $month = number_format(substr(($objResult["day_regis"]),5,2));
?>



<font class = "prompt text-danger " size="3">
:
<?
//echo $objResult["day_regis"];
echo $day;
//	echo ' เดือน ';
echo $m[$month];
//	echo '  พ.ศ.  ';
echo $yearth;
echo '  </font> ';

}
?>
</font>
&nbsp; <i class="bi bi-eye text-danger" style="font-size:15px;color:light"></i>
<font class = "prompt text-danger" size="1">
<? echo $objResult["count"];?>
</font>




</td>


<td >
  <?php
  if
  ($objResult["f_pdf"]!="")
 {
   ?>

<a href ="count_news.php?id=<?echo$objResult[id];?>&f=<?php echo $objResult["f_pdf"] ;?>"  target ="_blank" class=" btn btn-rounded btn-dark btn-sm  prompt elevation-3 btn-outline-success btn-rounded img-circle" data-toggle="buttons" title="Open PDF" >

<!--icon onlin -->
<i class="bi bi-file-earmark-pdf text-danger " style="font-size:40px;color:light"></i>

</a>
  <? } ?>


</td>

</tr>


</div>


</div>


</div>


</div>

  <?
  	$k++;

	}
	?>

</div>


</table>
</main>




        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

        <script src="../bootstrap4_4_1/js/bootstrap-4-hover-navbar.js"></script>

</BODY>
</HTML>
