<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php include("p2.php"); ?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="8" height="20">&nbsp;</td>
    <td width="522">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="328">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="403">&nbsp;</td>
    <td width="30">&nbsp;</td>
  </tr>
  <tr>
    <td height="385">&nbsp;</td>
    <td rowspan="2" valign="top"><p align="right"><strong>Notice Approval</strong></p>      <p><?php
	$s1=$_POST["t11"];
	include("connection.php");
	$s=mysql_query("select * from notice where appstatus is null");
	if(mysql_num_rows($s)==0)
	    echo "<b>No Notice waiting for approval";
	else
	{
	   echo "<table border='0' width='100%' bgcolor='cyan'><tr bgcolor='yellow'><th>Notice No.</th><th>Prepared Date</th><th>Staff ID</th><th>Click</th></tr>";
	   while($row=mysql_fetch_array($s))
	   {
	   if($s1==$row[0])
	   	   echo "<tr align='center' bgcolor='#aabbcc'><td>$row[0]</td><td>$row[2]</td><td>$row[3]</td><td><form action='noticeapproval2.php' method='post'><input type='submit' value='More==>>'><input type='hidden' name='t11' value='$row[0]'></form></td></tr>";
	   else
	   echo "<tr align='center' bgcolor='white'><td>$row[0]</td><td>$row[2]</td><td>$row[3]</td><td><form action='noticeapproval2.php' method='post'><input type='submit' value='More==>>'><input type='hidden' name='t11' value='$row[0]'></form></td></tr>";
	   
	   }
	     echo "</table>";
	
	}	
	
	
	?>&nbsp; </p></td>
    <td>&nbsp;</td>
    <td rowspan="2" valign="top"><div align="center">
      <p><strong>Details</strong></p>
    <?php
	$s=mysql_query("select * from notice where nno=$s1");
	if($row=mysql_fetch_array($s))
	{
	$nmatter=$row[1];
	$ndate=$row[2];
	$staffid=$row[3];
	$vdate=$row[6];
	$status	=$row[7];
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
	}
	
	?>  <table width="292" border="0">
        <tr>
          <td width="148">Notice No </td>
          <td width="128"><?php
		  echo $s1;
		  ?>&nbsp;</td>
        </tr>
        <tr>
          <td>Prepare Date </td>
          <td><?php
		  echo $ndate;
		  ?></td>
        </tr>
        <tr>
          <td colspan="2">Matter</td>
          </tr>
        <tr>
          <td colspan="2"><textarea name="textarea" cols="40"><?php echo $nmatter; ?></textarea></td>
        </tr>
        <tr>
          <td>Valid Till </td>
          <td><?php echo $vdate; ?>&nbsp;</td>
        </tr>
        <tr>
          <td>Availability Status </td>
          <td><?php if($status=="A") echo "For All"; else echo "Only for Students"; ?>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2"><strong>Prepared Staff Details </strong></td>
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
      </table>
      <p>&nbsp;</p>
    </div></td>
    <td>&nbsp;</td>
    <td valign="top"><form name="form1" method="post" action="noticeapproval3.php">
      <table width="200" border="0">
        <tr>
          <td colspan="2"><strong>Approval Status </strong></td>
          </tr>
        <tr>
          <td><input name="r1" type="radio" value="Y">
            Yes</td>
          <td><input name="r1" type="radio" value="N" checked>
            No</td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" name="Submit" value="Submit"><?php echo "<input type='hidden' name='t11' value='$s1'>"; ?></td>
          </tr>
      </table>
    </form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="43">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="41">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
