<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<script>
function abc()
{
if(document.form1.t1.value=="")
{
alert("Please enter the Matter");
return(false);
}

if(document.form1.t2.value=="")
{
alert("Please select the validity Date");
return(false);
}
}

</script>
<body>
<?php  include("p3.php");?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="119" height="330">&nbsp;</td>
    <td width="975" valign="top"><p><strong>Prepare Notice</strong></p>
      <form name="form1" onSubmit="return abc()" method="post" action="notice2.php">
        <table width="924" border="0">
          <tr>
            <td colspan="5">Type Matter here... </td>
          </tr>
          <tr>
            <td colspan="5"><textarea name="t1" cols="80" rows="12" id="t1"></textarea></td>
          </tr>
          <tr>
            <td width="101" height="61">Valid Upto </td><?php
			$cdate=date("Y")."-".date("m")."-".date("d");
			?>
            <td width="172"><input type="date" name="t2" min="<?php echo $cdate; ?>"></td>
            <td width="59">Status</td>
            <td width="268"><input name="r1" type="radio" value="A" checked>
For All
  <input name="r1" type="radio" value="S">
Only For Students </td>
            <td width="302">&nbsp;</td>
          </tr>
          <tr>
            <td height="61" colspan="5"><input type="submit" name="Submit" value="Submit"><?php
			include("connection.php");
			$nno=1000;
			$s=mysql_query("select * from notice order by nno desc");
			if($row=mysql_fetch_array($s))
			{
			$nno=$row[0];
			}
			$nno++;
			echo "<input type='hidden' name='t0' value='$nno'>";
			?></td>
          </tr>
        </table>
      </form>      <p>&nbsp; </p></td>
    <td width="237">&nbsp;</td>
  </tr>
  <tr>
    <td height="67">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
