<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<script>
function abc()
{
if(document.form1.t1.value=="" || document.form1.t3.value=="" || document.form1.t4.value=="")
{
alert("Please Enter the Bank Details");
return (false);
}


}

</script>
<body>
<?php include("p3.php"); ?>
<table width="1311" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="10" height="20">&nbsp;</td>
    <td width="261">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="444">&nbsp;</td>
    <td width="564">&nbsp;</td>
  </tr>
  <tr>
    <td height="393">&nbsp;</td>
    <td valign="top"><p><strong>Fees Structure</strong></p>
   <?php
  
   session_start();
   $admno=$_SESSION["admno"];
   $staffid=$_SESSION["staffid"];
   include("connection.php");
   $s=mysql_query("select * from student where admno='$admno'");
   if($row=mysql_fetch_array($s))
   {
   $cname=$row[11];
   }
   $s=mysql_query("select * from feesmaster where cname='$cname'");
   if($row=mysql_fetch_array($s))
   {
   $a1=$row[1];
   $a2=$row[2];
   $a3=$row[3];
   $a4=$row[4];
   $a5=$row[5];
   
   }
   
   ?>   <table width="261" border="1">
        <tr>
          <td width="131">AdmNo</td>
          <td width="114"><?php echo $admno; ?>&nbsp;</td>
        </tr>
        <tr>
          <td>Class</td>
          <td><?php echo $cname; ?></td>
        </tr>
        <tr>
          <td>Adm Fees </td>
          <td><?php echo $a1; ?></td>
        </tr>
        <tr>
          <td>First Installment</td>
          <td><?php echo $a2; ?></td>
        </tr>
        <tr>
          <td>Second Installment </td>
          <td><?php echo $a3; ?></td>
        </tr>
        <tr>
          <td>Third Installment </td>
          <td><?php echo $a4; ?></td>
        </tr>
        <tr>
          <td>Exam Fees </td>
          <td><?php echo $a5; ?></td>
        </tr>
      </table>      <p>&nbsp; </p></td>
    <td>&nbsp;</td>
    <td valign="top"><p><strong>Fees Payment (First Installment) </strong></p>
      <form name="form1" onSubmit="return abc()" method="post" action="payment3.php">
        <table width="471" border="0">
          <tr>
            <td width="179">Pay Amount </td>
            <td width="276"><?php echo $a2; ?></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><?php
			   $payno=0;
			   $s=mysql_query("select * from payment order by payno desc");
			   if($row=mysql_fetch_array($s))
			   {
			   $payno=$row[0];
			   }
			   $payno++;
			   $paydate=date("Y")."-".date("m")."-".date("d");
			   $s="insert into payment (payno,admno,cname,paytype,paydate,amount,staffid) values($payno,'$admno','$cname','finst','$paydate', $a2,'$staffid')";
			   mysql_query($s);
			   
			   echo "<b>Payment Accepted";
			   
			?>&nbsp;</td>
          </tr>
        </table>
      </form>      <p><strong></strong></p>      <p><strong>
    </strong>&nbsp;</p></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
