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
<?php include("p2.php");  ?>
<table width="1323" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="59" height="24" valign="top"><input type="submit" name="Submit2" value="Print" onClick="printf()"></td>
    <td width="1235" rowspan="2" valign="top"><p align="center"><strong>Students List</strong></p>      <form name="form1" method="post" action="studlist22.php"><?php
	include("connection.php");
	$s1=$_POST["c1"];
	$s=mysql_query("select distinct(cname) from student");
	if(mysql_num_rows($s)==0)
	 echo "<b> No Students Registered";
	else
	{
	?>
        <table width="357" border="0" align="center">
          <tr>
            <td width="114">Select Class </td>
            <td width="89"><select name="c1" id="c1">
			<?php echo "<option>$s1</option>";
			while($row=mysql_fetch_array($s))
			{
			if($s1==$row[0])
			 continue;
			echo "<option>$row[0]</option>";
			}
			?>
            </select></td>
            <td width="140"><input type="submit" name="Submit" value="Students List==&gt;&gt;"></td>
          </tr>
        </table>
		<?php
		}
		?>
    </form>      
    <p align="center"><?php
	$s=mysql_query("select * from student where cname='$s1'");
	if(mysql_num_rows($s)==0)
	   echo "<b>No Students";
	   else
	   {
	   echo "<table border='0' width='100%' bgcolor='#abcdef'><tr><th>Admission No.</th><th>Name</th><th>House Name</th><th>Place</th><th>Pin</th><th>Phone</th><th>Gender</th><th>DOB</th><th>Adhar No.</th><th>Parent Name</th><th>Occupation</th><th>Reg Date</th><th>Photo</th></tr>";
	   while($row=mysql_fetch_array($s))
	   {
	   echo "<tr align='center' bgcolor='cyan'><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td><td>$row[10]</td><td>$row[13]</td><td><img src='./studphoto/$row[12]' width='50' height='50'></td></tr>";
	   
	   }
	   echo "</table>";
	   }
	?>&nbsp;</p>
    <p align="center">&nbsp; </p></td>
    <td width="29">&nbsp;</td>
  </tr>
  <tr>
    <td height="363">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="68">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
