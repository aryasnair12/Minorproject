<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/	html; charset=iso-8859-1">
</head>
<script>
function abc()
{
if(document.form1.t1.value=="")
{
alert("Please enter your feedback...");
return(false);
}
}


</script>
<body>
<?php include("p3.php");  ?>
<table width="1306" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="141" height="13"></td>
    <td width="994"></td>
    <td width="171"></td>
  </tr>
  <tr>
    <td height="388"></td>
    <td valign="top"><form name="form1" onSubmit="return abc()" method="post" action="feed2.php">
  <?php
  $s1=$_POST["t1"];
  
  
  ?>    <table width="994" border="0">
        <tr>
          <td width="284" height="28"><strong>Type Your Feedback Here ==&gt;&gt; </strong></td>
          <td width="694" rowspan="5"><textarea name="t1" cols="100" rows="10" id="t1" disabled><?php echo $s1; ?></textarea></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td><?php
		  include("connection.php");
		  $fid=100;
		  $s=mysql_query("select * from feedback order by fid desc");
		  if($row=mysql_fetch_array($s))
		  {
		  $fid=$row[0];
		  }
		  $fid++;
		  $fdate=date("Y")."-".date("m")."-".date("d");
		  session_start();
		  $staffid=$_SESSION["staffid"];
		  $s="insert into feedback(fid,feedback,fdate,staffid) values($fid,'$s1','$fdate','$staffid')";
		  mysql_query($s);
		  echo "<b><font color='red' size='5'>Your feedback successfully send to the authority<br>The Feedback ID is $fid <br>Please wait for the reply";
		  
		  ?>&nbsp;</td>
        </tr>
      </table>
    </form></td>
    <td></td>
  </tr>
  <tr>
    <td height="13"></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
