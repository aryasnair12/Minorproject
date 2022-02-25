<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php include("p1.php"); ?>
<table width="1318" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="118" height="20">&nbsp;</td>
    <td width="1032">&nbsp;</td>
    <td width="168">&nbsp;</td>
  </tr>
  <tr>
    <td height="363">&nbsp;</td>
    <td valign="top"><p><strong>Fees Structure </strong></p>
      <p>
        <?php
	include("connection.php");
	$s=mysql_query("select * from feesmaster");
	if(mysql_num_rows($s)==0)
	   echo "<b>Fees details are not entered";
	   else
	   {
	   echo "<table border='0' width='100%'<tr><th>Class Name</th><th>Admission Fees</th><th>First Istallment</th><th>Second Installment</th><th>Third Installment</th><th>Exam fees</th></tr>";
	   while($row=mysql_fetch_array($s))
	   {
	   echo "<tr align='center'><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td></tr>";
	   
	   }
	  echo "</table>";
	   }
	 
	?>
    &nbsp; </p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
