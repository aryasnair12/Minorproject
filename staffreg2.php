<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<script>
function abc()
{
if(document.form1.t1.value=="" ||document.form1.t2.value=="" ||document.form1.t3.value=="" ||document.form1.t4.value=="" ||document.form1.t5.value=="" ||document.form1.t7.value=="" ||document.form1.t8.value=="" ||document.form1.t10.value=="" )
{
alert("Please enter All");
return(false);
}

}
</script>
<body>
<?php include("p2.php");  ?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="146" height="20">&nbsp;</td>
    <td width="464">&nbsp;</td>
    <td width="43">&nbsp;</td>
    <td width="288">&nbsp;</td>
    <td width="373">&nbsp;</td>
  </tr>
  <tr>
    <td height="107">&nbsp;</td>
    <td rowspan="3" valign="top"><p><strong>Staff Registration</strong></p>      <form action="staffreg2.php" method="post" onSubmit="return abc()" enctype="multipart/form-data" name="form1">
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
	   
	   
	   ?> <table width="439" border="0">
          <tr>
            <td width="191">Name</td>
            <td width="238"><input name="t1" type="text" id="t1" onKeyPress="return alphabets(event)" value="<?php echo $s1; ?>" disabled> </td>
          </tr>
          <tr>
            <td>House Name </td>
            <td><input name="t2" type="text" id="t2"  value="<?php echo $s2; ?>" disabled></td>
          </tr>
          <tr>
            <td>Place</td>
            <td><input name="t3" type="text" id="t3"  onKeyPress="return alphabets(event)"  value="<?php echo $s3; ?>" disabled></td>
          </tr>
          <tr>
            <td>Pin</td>
            <td><input name="t4" type="text" id="t4"  onKeyPress="return numbers(event)" maxlength="6"  value="<?php echo $s4; ?>" disabled></td>
          </tr>
          <tr>
            <td>Phone</td>
            <td><input name="t5" type="text" id="t5"  onKeyPress="return numbers(event)" maxlength="13"  value="<?php echo $s5; ?>" disabled></td>
          </tr>
          <tr>
            <td>Gender</td>
            <td><?php if($s6=="M"){  ?><input name="t6" type="radio" value="M" checked disabled>
              Male 
              <input name="t6" type="radio" value="F" disabled>
              Female <?php
			  }
			  else
			  {
			  ?>
		      <input name="t6" type="radio" value="M"  disabled>
              Male  
              <input name="t6" type="radio" value="F" disabled checked>
              Female
			    
			  <?php
			  }
			  ?></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input name="t7" type="text" id="t7"  onKeyPress="return email(event)"  value="<?php echo $s7; ?>" disabled></td>
          </tr>
          <tr>
            <td>District</td>
            <td><input name="t8" type="text" id="t8"  onKeyPress="return alphabets(event)" value="<?php echo $s8; ?>" disabled ></td>
          </tr>
          <tr>
            <td>State</td>
            <td><select name="t9" id="t9">
                <option>Kerala</option>
                <option>Tamilnadu</option>
                <option>Karnataka</option>
                <option>Andrapradesh</option>
                <option>UP</option>
                <option>MP</option>
                <option>Delhi</option>
                <option>Maharashtra</option>
                <option>Gujarath</option>
                <option>Sikkim</option>
                <option>Missoram</option>
                <option>Panjab</option>
                <option>Hariyana</option>
                <option>Meghalaya</option>
                <option>Jemmu &amp; Kasmir</option>
            </select></td>
          </tr>
          <tr>
            <td>Qualification</td>
            <td><input name="t10" type="text" id="t10"  value="<?php echo $s10; ?>" disabled></td>
          </tr>
          <tr>
            <td>Staff Type </td>
            <td><?php
			if($s11=="T")
			{
			?><input name="t11" type="radio" value="T" checked disabled>
              Teaching 
              <input name="t11" type="radio" value="O" disabled>
              Office Statff
		      <?php
			  }
			  else
			  {
			  ?>
		      <input name="t11" type="radio" value="T" disabled>
              Teaching 
              <input name="t11" type="radio" value="O" checked disabled>
              Office Statff
  
			  
			    
			  <?php
			  }
			  ?>
		       </td>
          </tr>
          <tr>
            <td colspan="2"><?php
			$filename="";
			$staffid="S1000";
			include("connection.php");
			$s=mysql_query("select * from staff where ph='$s5'");
			if(mysql_num_rows($s)>0)
			  echo "<b>This Phone number already Entered...";
			  else
			  {
			$s=mysql_query("select * from staff order by staffid desc");
			if($row=mysql_fetch_array($s))
			{
			$staffid=$row[0];
			}
			$staffid++;
			$filename=$_FILES["file"]["name"];
			$x=explode(".",$filename);
			$n=count($x);
			$n--;
			$ext=$x[$n];
			$filename="$staffid.$ext";
			move_uploaded_file($_FILES["file"]["tmp_name"],"./staffpic/$filename");
			
			$regdate=date("Y")."-".date("m")."-".date("d");
			$s="insert into staff values('$staffid','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9','$s10','$s11','$regdate','$filename')";
			mysql_query($s);
			$s="insert into login values('$staffid','$staffid')";
			mysql_query($s); 
			echo "<b><font color='red'>Staff Registered...The Staff ID is $staffid and Password is the Same";
			}
			?>&nbsp;</td>
          </tr>
          </table>
    </form>      <p>&nbsp; </p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="241">&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><p>Staff Picture</p>
    <p><?php
	if($filename != "")
	echo "<img src='./staffpic/$filename' width='200' height='200'>";
	?>&nbsp; </p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="91">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="33">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
