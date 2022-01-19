<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<script>
function abc()
{
if(document.form1.t1.value=="" ||document.form1.t2.value=="" ||document.form1.t3.value=="" ||document.form1.t4.value=="" ||document.form1.t5.value=="" ||document.form1.t7.value=="" ||document.form1.t8.value=="" ||document.form1.t10.value=="" )
{
alert("Please enter All");
return(false);
}

if(document.form1.file.value=="")
{
alert("Please select The Photo");
return(false);
}



if(document.form1.t4.value.length<6)
{
alert("Pin should be exact 6 digits");
return(false);
}

if(document.form1.t5.value.length<10)
{
alert("Phone should be Min 10 digits");
return(false);
}
if(document.form1.t7.value.indexOf("@")==-1 || document.form1.t7.value.indexOf(".")==-1)
{
alert("Invalid Email");
return(false);
}

if(document.form1.t7.value.indexOf("@")==0)
{
alert("@ should not be the first character");
return(false);
}

if(document.form1.t7.value.indexOf(".")==0)
{
alert(".(dot) should not be the first character");
return(false);
}
}
</script>
<body>
<?php include("p2.php");  ?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="149" height="20">&nbsp;</td>
    <td width="988">&nbsp;</td>
    <td width="194">&nbsp;</td>
  </tr>
  <tr>
    <td height="328">&nbsp;</td>
    <td valign="top"><p><strong>Staff Registration</strong></p>
      <form action="staffreg2.php" method="post" onSubmit="return abc()" enctype="multipart/form-data" name="form1">
        <table width="439" border="0">
          <tr>
            <td width="191">Name</td>
            <td width="238"><input name="t1" type="text" id="t1" onKeyPress="return alphabets(event)"></td>
          </tr>
          <tr>
            <td>House Name </td>
            <td><input name="t2" type="text" id="t2"></td>
          </tr>
          <tr>
            <td>Place</td>
            <td><input name="t3" type="text" id="t3"  onKeyPress="return alphabets(event)"></td>
          </tr>
          <tr>
            <td>Pin</td>
            <td><input name="t4" type="text" id="t4"  onKeyPress="return numbers(event)" maxlength="6"></td>
          </tr>
          <tr>
            <td>Phone</td>
            <td><input name="t5" type="text" id="t5"  onKeyPress="return numbers(event)" maxlength="13"></td>
          </tr>
          <tr>
            <td>Gender</td>
            <td><input name="t6" type="radio" value="M" checked>
              Male 
              <input name="t6" type="radio" value="F">
              Female</td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input name="t7" type="text" id="t7"  onKeyPress="return email(event)"></td>
          </tr>
          <tr>
            <td>District</td>
            <td><input name="t8" type="text" id="t8"  onKeyPress="return alphabets(event)"></td>
          </tr>
          <tr>
            <td>State</td>
            <td><select name="t9" id="t9">
              <option>Kerala</option>
              <option>Tamilnadu</option>
              <option>Karnataka</option>
              <option>Andrapradesh</option>
              <option>UP</option>
              <option>MP</option>
              <option>Delhi</option>
              <option>Maharashtra</option>
              <option>Gujarath</option>
			  <option>Rajasthan</option>
              <option>Sikkim</option>
              <option>Missoram</option>
              <option>Panjab</option>
              <option>Hariyana</option>
              <option>Meghalaya</option>
              <option>Jammu &amp; Kasmir</option>
            </select></td>
          </tr>
          <tr>
            <td>Qualification</td>
            <td><input name="t10" type="text" id="t10"></td>
          </tr>
          <tr>
            <td>Staff Type </td>
            <td><input name="t11" type="radio" value="T">
              Teaching 
              <input name="t11" type="radio" value="O" checked>
              Office Statff </td>
          </tr>
          <tr>
            <td>Select Photo </td>
            <td><input type="file" name="file"></td>
          </tr>
          <tr>
            <td colspan="2"><input type="submit" name="Submit" value="Submit">
            <input type="reset" name="Submit2" value="Reset"></td>
          </tr>
        </table>
      </form>      <p>&nbsp; </p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="33">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
