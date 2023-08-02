<?php
include("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Result</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body><br>

<div align="center">
<span class="head"><b><i>Student ResultPlatform</i></b></span>
<hr class="hr" />
<br>
<br>
<span class="subhead">Get your Result</span>
<br>
<br>
<br>
<form method="post" action="viewResult.php">
<table border="0" cellpadding="5" cellspacing="5" class="design">
<tr><td colspan="2" align="center" class="msg"><?php echo $msg;?></td></tr>
<tr><td class="labels">Please enter your Roll No.:</td><td><input type="text" required="required" name="roll" class="fields" size="15" placeholder="Enter Roll No." /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Get Result" class="fields" /></td></tr>
</table>
</form>
<br />
<br />
<a href="register.php" class="link">Student Register</a><br><br>
<a href="faculty.php" class="link">Faculty Login</a><br><br>
<a href="registerFaculty.php" class="link">Faculty Registration</a><br><br>
</div>
</body>
</html>