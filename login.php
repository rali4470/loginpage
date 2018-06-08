<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ورود به آرتا</title>
<style type="text/css">
#button {
	color: #F00;
}
</style>
</head>

<body dir="rtl">
<center>
<form action="check.php" method="post">
<p align="center"><img src="images/login.png" width="1248" height="468" /></p>
<table width="265" border="1">
  <tr bgcolor="#00FF00">
    <td width="96"><label>نام کاربری:</label>&nbsp;</td>
    <td width="144"><label for="txtUser"></label>
    <input type="text" name="txtUser" id="txtUser" /></td>
  </tr>
  <tr bgcolor="#FF0000">
    <td><label>کلمه ی عبور:</label>&nbsp;</td>
    <td><label for="txtPass"></label>
    <input type="password" name="txtPass" id="txtPass" /></td>
  </tr>
  <tr>
    <td  align="center"colspan="2"><input type="submit" name="button" id="button" value="ورود به سیستم آموزشی آرتا" /></td>
   
  </tr>
</table>
</form>

</center>
 <?php
                if(!empty($_SESSION['err_login']))
                {
                    echo $_SESSION['err_login'];
                    unset($_SESSION['err_login']);
                }
            ?>

</body>
</html>
