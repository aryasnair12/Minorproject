<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php include("p3.php"); ?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="7" height="20">&nbsp;</td>
    <td width="515">&nbsp;</td>
    <td width="11">&nbsp;</td>
    <td width="327">&nbsp;</td>
    <td width="18">&nbsp;</td>
    <td width="361">&nbsp;</td>
    <td width="75">&nbsp;</td>
  </tr>
  <tr>
    <td height="428">&nbsp;</td>
    <td valign="top"><p align="right"><strong>Notice For Students/All </strong></p>      
      <p><?php
	$s1=$_POST["t11"];
	include("connection.php");
	session_start();
	$staffid=$_SESSION["staffid"];
	
	$s=mysql_query("select * from notice where staffid='$staffid' order by nno");
		if(mysql_num_rows($s)==0)
	    echo "<b><br><center><font size='5'>No Notice";
	else
	{
	   echo "<table border='0' width='100%' bgcolor='cyan'><tr bgcolor='yellow'><th>Notice No.</th><th>Prepared Date</th><th>Click</th></tr>";
	   while($row=mysql_fetch_array($s))
	   {
	   if($s1==$row[0])
	   	   echo "<tr align='center' bgcolor='#aabbcc'><td>$row[0]</td><td>$row[2]</td><td><form action='checknotice1.php' method='post'><input type='submit' value='More==>>'><input type='hidden' name='t11' value='$row[0]'></form></td></tr>";
	   else
	   echo "<tr align='center' bgcolor='white'><td>$row[0]</td><td>$row[2]</td><td><form action='checknotice1.php' method='post'><input type='submit' value='More==>>'><input type='hidden' name='t11' value='$row[0]'></form></td></tr>";
	   
	   }
	     echo "</table>";
	
	}	
	
	
	?>&nbsp; </p></td>
    <td>&nbsp;</td>
    <td valign="top"><div align="center">
      <p><strong>Details</strong></p>
    <?php
	$s=mysql_query("select * from notice where nno=$s1");
	if($row=mysql_fetch_array($s))
	{
	$nmatter=$row[1];
	$ndate=$row[2];
	$staffid=$row[3];
	$appstatus=$row[4];
	$appdate=$row[5];
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
          <td><?php echo $vdate; ?></td>
        </tr>
        <tr>
          <td>Availability Status</td>
          <td><?php if($status=="A") echo "For All"; else echo "Only for Students"; ?></td>
        </tr>
      </table>
      <p>&nbsp;</p>
    </div></td>
    <td>&nbsp;</td>
    <td valign="top"><p><strong>Approval Details</strong></p>
     <?php  if($appstatus=="") echo "<b>Please wait for Approval";
	 else
	 {?> <table width="329" border="0">
        <tr>
          <td width="127">Approval Status</td>
          <td width="186"><?php if($appstatus=="Y") echo "Approved"; else echo "Rejected"; ?>&nbsp;</td>
        </tr>
        <tr>
          <td>Date</td>
          <td><?php echo $appdate; ?>&nbsp;</td>
        </tr>
      </table><?php } ?>      <p>&nbsp; </p></td>
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
