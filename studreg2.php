<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php include("p3.php"); ?>
<table width="1305" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="111" height="30">&nbsp;</td>
    <td width="802">&nbsp;</td>
    <td width="26">&nbsp;</td>
    <td width="341">&nbsp;</td>
    <td width="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="20">&nbsp;</td>
    <td rowspan="3" valign="top"><p><strong>Student Registration</strong></p>      <form action="studreg2.php" method="post" enctype="multipart/form-data" name="form1">
       <?php
	 $s1=$_POST["t1"];
	 $s2=$_POST["t2"];
	 $s3=$_POST["t3"];
	 $s4=$_POST["t4"];
	 $s5=$_POST["t5"];
	 $s6=$_POST["t6"];
	 $s7=$_POST["t7"];
	 $s8=$_POST["t8"];
	 $s9=$_POST["t9"];
	 $s10=$_POST["t10"];
	 $s11=$_POST["t11"];
	 
	 
	 ?>   <table width="782" border="0">
          <tr>
            <td width="153">Name</td>
            <td width="205"><?php echo $s1; ?>&nbsp;</td>
            <td width="123">House Name </td>
            <td width="235"><?php echo $s2; ?></td>
          </tr>
          <tr>
            <td>Place</td>
            <td><?php echo $s3; ?></td>
            <td>Pin</td>
            <td><?php echo $s4; ?></td>
          </tr>
          <tr>
            <td>Phone</td>
            <td><?php echo $s5; ?></td>
            <td>Gender</td>
            <td><?php echo $s6; ?></td>
          </tr>
          <tr>
            <td>Date of Birth </td>
            <td><?php echo $s7; ?></td>
            <td>Adhar No. </td>
            <td><?php echo $s8; ?></td>
          </tr>
          <tr>
            <td>Parent Name </td>
            <td><?php echo $s9; ?></td>
            <td>Occupation</td>
            <td><?php echo $s10; ?></td>
          </tr>
          <tr>
            <td>Select Class</td>
            <td><?php echo $s11; ?></td>
            <td>Photo            </td>
            <td>Selected</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td colspan="2"><?php
			$filename="";
			$admno="A1234";
			include("connection.php");
			$s=mysql_query("select * from student where ph='$s5'");
			if(mysql_num_rows($s)>0)
			  echo "<b>This Phone number already Entered...";
			  else
			  {
			$s=mysql_query("select * from student order by admno desc");
			if($row=mysql_fetch_array($s))
			{
			$admno=$row[0];
			}
			$admno++;
			$filename=$_FILES["file"]["name"];
			$x=explode(".",$filename);
			$n=count($x);
			$n--;
			$ext=$x[$n];
			$filename="$admno.$ext";
			move_uploaded_file($_FILES["file"]["tmp_name"],"./studphoto/$filename");
			$regdate=date("Y")."-".date("m")."-".date("d");
			session_start();
			$staffid=$_SESSION["staffid"];
			
			$s="insert into student values('$admno','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9','$s10','$s11','$filename','$regdate','$staffid')";
			mysql_query($s);
			$s="insert into login values('$admno','$admno')";
			mysql_query($s); 
			echo "<b><font color='red'>Student Registered...The Admission No. is $admno and Password is the Same";
			}
			?>
			  
			
			&nbsp;</td>
          </tr>
          </table>
    </form>      <p>&nbsp;</p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="281">&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><p>&nbsp;</p>
      <p>
        <?php
	if($filename != "")
	echo "<img src='./studphoto/$filename' width='200' height='200'>";
	?>
    &nbsp;</p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="49">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="43">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
