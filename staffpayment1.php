<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php include("p3.php"); ?>
<table width="1311" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="10" height="20">&nbsp;</td>
    <td width="261">&nbsp;</td>
    <td width="32">&nbsp;</td>
    <td width="923">&nbsp;</td>
    <td width="85">&nbsp;</td>
  </tr>
  <tr>
    <td height="393">&nbsp;</td>
    <td valign="top"><p><strong>Fees Structure</strong></p>
   <?php
   
   $as=0;
   $admno=$_POST["t0"];
   session_start();
   $_SESSION["admno"]=$admno;
   include("connection.php");
   $s=mysql_query("select * from student where admno='$admno'");
   if($row=mysql_fetch_array($s))
   {
   $cname=$row[11];
   }
   
   $s=mysql_query("select * from feesmaster where cname='$cname'");
   if(mysql_num_rows($s)==0)
    echo "<b><font color='red'>Fees not fixed for the class $cname.....Please Inform";
	else
	{
	$as++;
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
      </table>  <?php } ?>   <p>&nbsp; </p></td>
    <td>&nbsp;</td>
    <td valign="top"><?php if ($as>0) { ?><p><strong>Fees Payment </strong></p>
    <p><strong>
      <?php
	 $s=mysql_query("select * from feesmaster where cname='$cname'");
	 echo "<table bordrr='1' width='100%'><tr><th></th><th>Admission Fees</th><th>First Installment</th><th>Second Installment</th><th>Third Installment</th><th>Exam Fees</th></tr>";
   if($row=mysql_fetch_array($s))
   {
   $a1=$row[1];
   $a2=$row[2];
   $a3=$row[3];
   $a4=$row[4];
   $a5=$row[5];
   
   }
  echo "<tr align='center'><td><td>$a1</td><td>$a2</td><td>$a3</td><td>$a4</td><td>$a5</td></tr>";
  $s=mysql_query("select * from payment where admno='$admno'  and cname='$cname'  and paytype='adm'");
  $adm="Not Paid";
  $admdate="-";
  if($row=mysql_fetch_array($s))
  {
  $adm="Paid";
  $admdate=$row[4];
  }
  
   $s=mysql_query("select * from payment where admno='$admno'  and cname='$cname'  and paytype='finst'");
  $finst="Not Paid";
  $fdate="-";
  if($row=mysql_fetch_array($s))
  {
  $finst="Paid";
  $fdate=$row[4];
  }
  
   $s=mysql_query("select * from payment where admno='$admno'  and cname='$cname'  and paytype='sinst'");
  $sinst="Not Paid";
  $sdate="-";
  if($row=mysql_fetch_array($s))
  {
  $sinst="Paid";
  $sdate=$row[4];
  }
  
   $s=mysql_query("select * from payment where admno='$admno'  and cname='$cname'  and paytype='tinst'");
  $tinst="Not Paid";
  $tdate="-";
  if($row=mysql_fetch_array($s))
  {
  $tinst="Paid";
  $tdate=$row[4];
  }
  
   $s=mysql_query("select * from payment where admno='$admno'  and cname='$cname'  and paytype='exam'");
  $exam="Not Paid";
  $examdate="-";
  if($row=mysql_fetch_array($s))
  {
  $exam="Paid";
  $examdate=$row[4];
  }
  echo "<tr align='center'><td><b>Pay Status</b></td><td>$adm</td><td>$finst</td><td>$sinst</td><td>$tinst</td><td>$exam</td></tr>";
    echo "<tr align='center'><td><b>Pay Date</b></td><td>$admdate</td><td>$fdate</td><td>$sdate</td><td>$tdate</td><td>$examdate</td></tr>";
	if($adm=="Not Paid")
  	 echo "<tr align='center'><td></td><td><form action='staffpayment2.php' method='post'><input type='submit' value='Pay Now'></form></td><td><form action='payment22.php' method='post'><input type='submit' value='------' disabled></form></td><td><form action='payment222.php' method='post'><input type='submit' value='------' disables></form></td><td><form action='payment2222.php' method='post'><input type='submit' value='------' disabled></form></td><td><form action='payment22222.php' method='post'><input type='submit' value='------' disabled></form></td></tr>";
	else if($adm=="Paid" && $finst=="Not Paid") 
   echo "<tr align='center'><td></td><td><form action='staffpayment2.php' method='post'><input type='submit' value=' Paid ' disabled></form></td><td><form action='staffpayment22.php' method='post'><input type='submit' value='Pay Now'></form></td><td><form action='payment222.php' method='post'><input type='submit' value='------' disabled></form></td><td><form action='payment2222.php' method='post'><input type='submit' value='------' disabled></form></td><td><form action='payment22222.php' method='post'><input type='submit' value='------' disabled></form></td></tr>";
	else if($adm=="Paid" && $finst=="Paid"  && $sinst=="Not Paid") 
   echo "<tr align='center'><td></td><td><form action='payment2.php' method='post'><input type='submit' value=' Paid ' disabled></form></td><td><form action='payment22.php' method='post'><input type='submit' value=' Paid ' disabled></form></td><td><form action='staffpayment222.php' method='post'><input type='submit' value='Pay Now'></form></td><td><form action='payment2222.php' method='post'><input type='submit' value='------' disabled></form></td><td><form action='payment22222.php' method='post'><input type='submit' value='------' disabled></form></td></tr>";
	else if($adm=="Paid" && $finst=="Paid"  && $sinst=="Paid" && $tinst=="Not Paid") 
   	echo "<tr align='center'><td></td><td><form action='payment2.php' method='post'><input type='submit' value=' Paid ' disabled></form></td><td><form action='payment22.php' method='post'><input type='submit' value=' Paid ' disabled></form></td><td><form action='payment222.php' method='post'><input type='submit' value=' Paid ' disabled></form></td><td><form action='staffpayment2222.php' method='post'><input type='submit' value='Pay Now'></form></td><td><form action='payment22222.php' method='post'><input type='submit' value='------' disabled></form></td></tr>";
	else if($adm=="Paid" && $finst=="Paid"  && $sinst=="Paid" && $tinst=="Paid" && $exam=="Not Paid") 
   	echo "<tr align='center'><td></td><td><form action='payment2.php' method='post'><input type='submit' value=' Paid ' disabled></form></td><td><form action='payment22.php' method='post'><input type='submit' value=' Paid ' disabled></form></td><td><form action='payment222.php' method='post'><input type='submit' value=' Paid ' disabled></form></td><td><form action='payment2222.php' method='post'><input type='submit' value=' Paid ' disabled></form></td><td><form action='staffpayment22222.php' method='post'><input type='submit' value='Pay Now'></form></td></tr>";



  echo "</table>";	
	
	}
	?>
    </strong>&nbsp;</p></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
