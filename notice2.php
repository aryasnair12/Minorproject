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
       <?php
	   $s1=$_POST["t1"];
	   $s2=$_POST["t2"];
	   $s3=$_POST["r1"];
	   
	   ?> <table width="924" border="0">
          <tr>
            <td colspan="5">Type Matter here... </td>
          </tr>
          <tr>
            <td colspan="5"><textarea name="t1" cols="80" rows="12" id="t1" disabled><?php echo $s1; ?></textarea></td>
          </tr>
          <tr>
            <td width="141" height="61">Valid Upto</td>
            <td width="219"><?php
			
			echo $s2;
			?>&nbsp;</td>
            <td width="93">Status</td>
            <td width="269"><?php if($s3=="A") echo "For All" ; else echo "Only For Students"; ?></td>
            <td width="180">&nbsp;</td>
          </tr>
          <tr>
            <td height="61" colspan="5"><?php
			$s0=$_POST["t0"];
			
			include("connection.php");
			$nno=1000;
			$s=mysql_query("select * from notice order by nno desc");
			if($row=mysql_fetch_array($s))
			{
			$nno=$row[0];
			}
			$nno++;
			if($nno==$s0)
			{
			$ndate=date("Y")."-".date("m")."-".date("d");
			session_start();
			$staffid=$_SESSION["staffid"];
			$s="insert  into notice(nno,nmatter,ndate,staffid,vdate,status)values($nno,'$s1','$ndate','$staffid','$s2','$s3')";
			mysql_query($s);
			echo "<b><font size='5'>Notice Prepared and move to Autority approval...The notice No. is $nno";
			}
			else
			echo "<b><font size='5'>Refresh has no effect";

			?>&nbsp;</td>
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
