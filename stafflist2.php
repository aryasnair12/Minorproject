<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<script>
function printf()
{
window.print();
}
</script>
<body>
<?php include("p2.php"); ?>
<table width="1318" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="38" height="21">&nbsp;</td>
    <td width="1229" rowspan="2" valign="top"><p><strong>Staff List (Teaching-Staff) </strong></p>      <p>
        <?php
	include("connection.php");
	$s=mysql_query("select * from staff  where stype='T'");
	if(mysql_num_rows($s)==0)
	   echo "<b>No Office Staff Available.... ";
	   else
	   {
	   $f=1;
	   echo "<table border='0' width='100%' bgcolor='yellow'><tr><th>Staff ID</th><th>Name</th><th>House Name</th><th>Place</th><th>Pin</th><th>Phone</th><th>Gender</th><th>Email</th><th>District</th><th>State</th><th>Qualification</th><th>Reg Date</th></tr>";
	   while($row=mysql_fetch_array($s))
	   {
	   if($f==1)
	   echo "<tr align='center' bgcolor='#aabbcc'><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td><td>$row[10]</td><td>$row[12]</td><td><img src='./staffpic/$row[13]' width='50' height='50'></td></tr>";
	   else
   	   echo "<tr align='center' bgcolor='#00bbcc'><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td><td>$row[10]</td><td>$row[12]</td><td><img src='./staffpic/$row[13]' width='50' height='50'></td></tr>";
		$f=$f*-1;
	   
	   }
	  echo "</table>";
	   }
	 
	?>
    &nbsp; </p></td>
    <td width="51" valign="top"><input type="submit" name="Submit" value="Print" onClick="printf()"></td>
  </tr>
  <tr>
    <td height="342">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="43">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
