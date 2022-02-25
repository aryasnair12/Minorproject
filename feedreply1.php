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
    <td width="35" height="21">&nbsp;</td>
    <td width="776">&nbsp;</td>
    <td width="516">&nbsp;</td>
  </tr>
  <tr>
    <td height="331">&nbsp;</td>
    <td valign="top"><p><strong>Feedback Reply To Staff</strong></p>
      <p>
        <?php
	include("connection.php");
	
	$s=mysql_query("select * from feedback where staffid is not null and reply is null");
	if(mysql_num_rows($s)==0)
	    echo "<b><br><center><font size='5'>No Feedback from Any staff waiting for Reply";
	else
	{
	   echo "<table border='0' width='100%'><tr bgcolor='yellow'><th>Feedback ID(Click)</th><th>Feedback Date</th><th>Staff ID</th></tr>";
	   while($row=mysql_fetch_array($s))
	   {
	   echo "<tr align='center'><td><form action='feedreply2.php' method='post'><input type='submit' value='$row[0] ==>>'><input type='hidden' name='t1' value='$row[0]'></form></td><td>$row[2]</td><td>$row[6]</td></tr>";
	   
	   }
	     echo "</table>";
	
	}	
	
	
	?>
      </p>
    <p>&nbsp; </p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="49">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
