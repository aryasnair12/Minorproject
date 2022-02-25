<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>
<script>
function abc()
{
if(document.form1.t2.value=="")
{
alert("Please enter the Reply");
return(false);

}


}

</script>
<body>
<?php include("p2.php"); ?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="512" height="21">&nbsp;</td>
    <td width="13">&nbsp;</td>
    <td width="394">&nbsp;</td>
    <td width="25">&nbsp;</td>
    <td width="340">&nbsp;</td>
    <td width="26">&nbsp;</td>
  </tr>
  <tr>
    <td height="400" valign="top"><p><strong>Feedback Reply To Staff</strong></p>      <p>
        <?php
	include("connection.php");
	$s1=$_POST["t1"];
	$s=mysql_query("select * from feedback where staffid is not null and reply is null");
	if(mysql_num_rows($s)==0)
	    echo "<b><br><center><font size='5'>No Feedback from Any staff waiting for Reply";
	else
	{
	   echo "<table border='0' width='100%'><tr bgcolor='yellow'><th>Feedback ID(Click)</th><th>Feedback Date</th><th>Staff ID</th></tr>";
	   while($row=mysql_fetch_array($s))
	   {
	   if($s1==$row[0])
	   	   echo "<tr align='center' bgcolor='#aabbcc'><td><form action='feedreply2.php' method='post'><input type='submit' value='$row[0] ==>>'><input type='hidden' name='t1' value='$row[0]'></form></td><td>$row[2]</td><td>$row[6]</td></tr>";
	   else
	   echo "<tr align='center'><td><form action='feedreply2.php' method='post'><input type='submit' value='$row[0] ==>>'><input type='hidden' name='t1' value='$row[0]'></form></td><td>$row[2]</td><td>$row[6]</td></tr>";
	   
	   }
	     echo "</table>";
	
	}	
	
	
	?>
      </p>      <p>&nbsp; </p></td>
    <td>&nbsp;</td>
    <td valign="top"><?php
	$s=mysql_query("select * from feedback where fid='$s1'");
	if($row=mysql_fetch_array($s))
	{
	$feedback=$row[1];
	$fdate=$row[2];
	$staffid=$row[6];
	
	
	}
	$s=mysql_query("select * from staff where staffid='$staffid'");
	if($row=mysql_fetch_array($s))
	{
	$name=$row[1];
	$hname=$row[2];
	$place=$row[3];
		$pin=$row[4];
	$ph=$row[5];
	$gender=$row[6];
	$email=$row[7];
	$dist=$row[8];
	$state=$row[9];
	
	}
	
	?><table width="386" border="0">
      <tr>
        <td colspan="2">Feedback</td>
        </tr>
      <tr>
        <td colspan="2"><textarea name="textarea" disabled><?php echo $feedback; ?></textarea></td>
        </tr>
      <tr>
        <td width="189">Date</td>
        <td width="181"><?php  echo $fdate;?>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2"><span class="style1">Staff Details </span></td>
        </tr>
      <tr>
        <td>Staff ID </td>
        <td><?php echo $staffid; ?>&nbsp;</td>
      </tr>
      <tr>
        <td>Name</td>
        <td><?php echo $name; ?></td>
      </tr>
      <tr>
        <td>House Name </td>
        <td><?php echo $hname; ?></td>
      </tr>
      <tr>
        <td>Place</td>
        <td><?php echo $place; ?></td>
      </tr>
      <tr>
        <td>Pin</td>
        <td><?php echo $pin; ?></td>
      </tr>
      <tr>
        <td>Phone</td>
        <td><?php echo $ph; ?></td>
      </tr>
      <tr>
        <td>Gender</td>
        <td><?php echo $gender; ?></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><?php echo $email; ?></td>
      </tr>
      <tr>
        <td>District</td>
        <td><?php echo $dist; ?></td>
      </tr>
      <tr>
        <td>State</td>
        <td><?php echo $state; ?></td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
    <td rowspan="2" valign="top"><form name="form1" onSubmit="return abc()" method="post" action="feedreply3.php">
      <table width="337" border="0">
        <tr>
          <td><strong>Reply(Type here) </strong></td>
        </tr>
        <tr>
          <td><textarea name="t2" id="t2"></textarea></td>
        </tr>
        <tr>
          <td><input type="submit" name="Submit" value="Send==&gt;&gt;"><?php
		  echo "<input type='hidden' name='t1' value='$s1'>";
		  
		  ?></td>
        </tr>
      </table>
    </form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="49">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
