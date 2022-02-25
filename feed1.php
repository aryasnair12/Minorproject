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
      <table width="994" border="0">
        <tr>
          <td width="284" height="28"><strong>Type Your Feedback Here ==&gt;&gt; </strong></td>
          <td width="694" rowspan="5"><textarea name="t1" cols="100" rows="10" id="t1"></textarea></td>
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
          <td><input type="submit" name="Submit" value="Send==&gt;&gt;"></td>
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
