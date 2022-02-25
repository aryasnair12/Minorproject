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
    <td width="226" height="20">&nbsp;</td>
    <td width="706">&nbsp;</td>
    <td width="399">&nbsp;</td>
  </tr>
  <tr>
    <td height="339">&nbsp;</td>
    <td valign="top"><p align="center"><strong>Notice For Students /All </strong></p>      
      <p><?php
	include("connection.php");
	session_start();
	$staffid=$_SESSION["staffid"];
	
	$s=mysql_query("select * from notice where staffid='$staffid' order by nno");
	if(mysql_num_rows($s)==0)
	    echo "<b>No Notice prepared";
	else
	{
	   echo "<table border='0' width='100%' bgcolor='cyan'><tr bgcolor='yellow'><th>Notice No.</th><th>Prepared Date</th><th>Click</th></tr>";
	   while($row=mysql_fetch_array($s))
	   {
	   echo "<tr align='center' bgcolor='white'><td>$row[0]</td><td>$row[2]</td><td><form action='checknotice1.php' method='post'><input type='submit' value='More==>>'><input type='hidden' name='t11' value='$row[0]'></form></td></tr>";
	   
	   }
	     echo "</table>";
	
	}	
	
	
	?>&nbsp; </p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="41">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
