<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Custom myShirt</title>
  <link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8" />
  <style type="text/css">
   <!--
   body,td,th {
	color: #000;
   }
   body {
	background-color: #CF9;
	background-image: url(images/backg.jpg);
	background-repeat: no-repeat;
   }
   -->
  </style>
 </head>
 <body>
  <div id="wrapper">
   <div id="header"><div id="logo"><h1>Custom myShirt</h1></div></div>
   <div id="copyright">
    <form id='register' action='registerdb.php' method='post' accept-charset='UTF-8'>
     <fieldset >
      <legend>**Register Form**</legend>
      <br />
      <table width="500" border="0" align="left">
       <tr>
        <td width="136" align="left">First Name<font color="red">*</font></td>
        <td width="10">:</td>
        <td width="145" align="left"><input type='text' name='fname' id='fname' maxlength="50" /></td>
       </tr>
       <tr>
        <td width="136" align="left">Last Name<font color="red">*</font></td>
        <td width="10">:</td>
        <td width="145" align="left"><input type='text' name='lname' id='lname' maxlength="50" /></td>
       </tr>
       <tr>
        <td align="left">Email Address<font color="red">*</font></td>
        <td>:</td>
        <td align="left"><input type='text' name='email' id='email' maxlength="50" /></td>
       </tr>
       <tr>
        <td align="left">Password<font color="red">*</font></td>
        <td>:</td>
        <td align="left"><input type='password' name='password' id='password' maxlength="50" /></td>
       </tr>
       <tr>
        <td align="left">Address 1<font color="red">*</font></td>
        <td>:</td>
        <td align="left"><input type="text" name="add1" id="add1" size="50"/></td>
       </tr>
       <tr>
        <td align="left">Address 2<font color="red">*</font></td>
        <td>:</td>
        <td align="left"><input type="text" name="add2" id="add2" size="50" /></td>
       </tr>
       <tr>
        <td align="left">Postcode<font color="red">*</font></td>
        <td>:</td>
        <td align="left"><input type="text" name="postcode" id="postcode" /></td>
       </tr>
       <tr>
        <td align="left">Home Phone<font color="red">*</font></td>
        <td>:</td>
        <td align="left"><input type="text" name="phone" id="phone" /></td>
       </tr>
       <tr>
        <td align="left">Office Phone<font color="red">*</font></td>
        <td>:</td>
        <td align="left"><input type="text" name="office" id="office" /></td>
       </tr>
      </table>
      <br />
      <p>&nbsp;  </p>
      <p>&nbsp;</p>
      <p>&nbsp;  </p>
      <p>&nbsp;  </p>
      <p>&nbsp;  </p>
      <p>&nbsp;  </p>
      <p>&nbsp;  </p>
      <p>&nbsp;  </p>
      <p>&nbsp;  </p>
      <p>&nbsp;  </p>
      <p>&nbsp;  </p>
      <div><br />
       <input type="submit" name="reset" id="reset" value="Reset" />
       <input type='submit' name='registerme' value='Submit' />
      </div>
      <p>&nbsp;  </p>
     </fieldset>
    </form>
    <p>Copyright &copy; 2012. Bancho Group Sdn.Bhd</p>
   </div>
  </div>
 </body>
</html>