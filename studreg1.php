<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<script>
function abc()
{
if(document.form1.t1.value=="" ||document.form1.t2.value=="" ||document.form1.t3.value=="" ||document.form1.t4.value=="" ||document.form1.t5.value=="" ||document.form1.t7.value=="" ||document.form1.t8.value=="" ||document.form1.t9.value=="" ||document.form1.t10.value=="")
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

if(document.form1.t8.value.length<12)
{
alert("Adhar should be exact 12 digits");
return(false);
}
}
</script>
<body>
<?php include("p3.php"); ?>
<table width="1305" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="111" height="30">&nbsp;</td>
    <td width="1113">&nbsp;</td>
    <td width="81">&nbsp;</td>
  </tr>
  <tr>
    <td height="350">&nbsp;</td>
    <td valign="top"><p><strong>Student Registration</strong></p>
      <form action="studreg2.php" method="post" onSubmit="return abc()" enctype="multipart/form-data" name="form1">
        <table width="782" border="0">
          <tr>
            <td width="153">Name</td>
            <td width="205"><input name="t1" type="text" id="t1" onKeyPress="return alphabets(event)"></td>
            <td width="123">House Name </td>
            <td width="235"><input name="t2" type="text" id="t2"></td>
          </tr>
          <tr>
            <td>Place</td>
            <td><input name="t3" type="text" id="t3"  onKeyPress="return alphabets(event)"></td>
            <td>Pin</td>
            <td><input name="t4" type="text" id="t4"  onKeyPress="return numbers(event)" maxlength="6"></td>
          </tr>
          <tr>
            <td>Phone</td>
            <td><input name="t5" type="text" id="t5"  onKeyPress="return numbers(event)" maxlength="13"></td>
            <td>Gender</td>
            <td><input name="t6" type="radio" value="M">
              Male 
              <input name="t6" type="radio" value="F" checked>
              Female</td>
          </tr>
          <tr>
            <td>Date of Birth </td><?php
			$cdate=date("Y")."-".date("m")."-".date("d");
			?>
            <td><input name="t7" type="date" id="t7" max="<?php echo $cdate; ?>"></td>
            <td>Adhar No. </td>
            <td><input name="t8" type="text" id="t8" maxlength="12" onKeyPress="return numbers(event)"></td>
          </tr>
          <tr>
            <td>Parent Name </td>
            <td><input name="t9" type="text" id="t9"></td>
            <td>Occupation</td>
            <td><input name="t10" type="text" id="t10"></td>
          </tr>
          <tr>
            <td>Select Class</td>
            <td><select name="t11" id="t11">
              <option>LKG</option>
              <option>UKG</option>
              <option>First</option>
              <option>Second</option>
              <option>Third</option>
              <option>Fourth</option>
              <option>Fisth</option>
              <option>Sixth</option>
              <option>Seventh</option>
              <option>Eighth</option>
              <option>Nineth</option>
              <option>Tenth</option>
              <option>Plus +1</option>
              <option>Plus One</option>
              <option>Plus Two</option>
            </select></td>
            <td>Photo            </td>
            <td><input type="file" name="file"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td colspan="2"><input type="submit" name="Submit" value="Submit">
            <input type="reset" name="Submit2" value="Reset"></td>
          </tr>
        </table>
      </form>      <p>&nbsp;</p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="43">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
