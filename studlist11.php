<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php include("p2.php");  ?>
<table width="1323" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="59" height="387">&nbsp;</td>
    <td width="1235" valign="top"><p align="center"><strong>Students List</strong></p>      <form name="form1" method="post" action="studlist22.php"><?php
	include("connection.php");
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
			<?php
			while($row=mysql_fetch_array($s))
			{
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
    </form>      <p>&nbsp; </p></td>
    <td width="29">&nbsp;</td>
  </tr>
  <tr>
    <td height="68">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
