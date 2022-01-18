<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<script>
function abc()
{
if(document.form1.t2.value=="" ||document.form1.t3.value=="" ||document.form1.t4.value=="" ||document.form1.t5.value=="" ||document.form1.t7.value=="" ||document.form1.t8.value=="" ||document.form1.t10.value=="" )
{
alert("Please enter All");
return(false);
}

}
</script>
<body>
<?php include("p2.php"); ?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="142" height="16"></td>
    <td width="438"></td>
    <td width="646"></td>
    <td width="105"></td>
  </tr>
  <tr>
    <td height="365"></td>
    <td valign="top"><strong>Fees Structure Entry
    </strong>      <form name="form1" method="post" action="fmasterentry2.php">
        <?php
	   $s1=$_POST["t1"];
	   $s2=$_POST["t2"];
	   $s3=$_POST["t3"];
	   $s4=$_POST["t4"];
	   $s5=$_POST["t5"];
	   $s6=$_POST["t6"];
	   
	   
	   
	   ?> <table width="330" border="0">
          <tr>
            <td width="134">Class Name</td>
            <td width="180"><?php echo $s1; ?>&nbsp;</td>
          </tr>
          <tr>
            <td>Admission Fees </td>
            <td><?php echo $s2; ?></td>
          </tr>
          <tr>
            <td>First Installment </td>
            <td><?php echo $s3; ?></td>
          </tr>
          <tr>
            <td>Second Installment </td>
            <td><?php echo $s4; ?></td>
          </tr>
          <tr>
            <td>Third Installment </td>
            <td><?php echo $s5; ?></td>
          </tr>
          <tr>
            <td>Exam Fees </td>
            <td><?php echo $s6; ?></td>
          </tr>
          <tr>
            <td colspan="2"><?php
			include("connection.php");
			$s=mysql_query("select * from feesmaster where cname='$s1'");
			if(mysql_num_rows($s)==0)
			   {
			   $s="insert into feesmaster values('$s1','$s2','$s3','$s4','$s5','$s6')";
			   mysql_query($s);
			   echo "<b><font color='red'>Fees  details stored";
			   }
			else
			{
			$s="update feesmaster set admfees='$s2',finstallment='$s3',sinstallment='$s4',tinstallment='$s5',examfees='$s6' where cname='$s1'";
			mysql_query($s);
		   echo "<b><font color='red'>Fees  details Updated";

			}
			?>&nbsp;</td>
          </tr>
          </table>
    </form></td>
    <td valign="top"><p><strong>Fees Structure (Entered...) Details </strong></p>
    <p>      
      <?php
	include("connection.php");
	$s=mysql_query("select * from feesmaster");
	if(mysql_num_rows($s)==0)
	   echo "<b>Fees details are not entered";
	   else
	   {
	   echo "<table border='0' width='100%'<tr><th>Class Name</th><th>Admission Fees</th><th>First Istallment</th><th>Second Installment</th><th>Third Installment</th><th>Exam fees</th><th>Edit</th></tr>";
	   while($row=mysql_fetch_array($s))
	   {
	   echo "<tr align='center'><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td><form action='fmasterentry3.php' method='post'><input type='submit' value='Click'><input type='hidden' name='t11' value='$row[0]'></form></td></tr>";
	   
	   }
	     echo "</table>";
	   }
	 
	?>
    </p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="23"></td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
