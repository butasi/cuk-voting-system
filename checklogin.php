<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CO-OPERATIVE UNIVERSITY OF KENYA ONLINE VOTING SYSTEM Access Denied</title>
<link href="css/user_styles.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="tan">
<center><img src = "images/logo.jpg" alt="site logo" width="100" height="102"></a></center><br>     
<center><b><font color = "white" size="6">CO-OPERATIVE UNIVERSITY OF KENYA ONLINE VOTING SYSTEM</font></b></center><br><br>
<body>
<div id="page">
<div id="header">
<h1>Invalid Credentials Provided </h1>
<p align="center">&nbsp;</p>
</div>
<div id="container">
<?php
ini_set ("display_errors", "1");
error_reporting(E_ALL);

ob_start();
session_start();
$db_name="polling"; // Database name
$tbl_name="tbMembers"; // Table name

// This will connect you to your database
$conn = mysqli_connect('localhost', 'root', '','polling');
if (!$conn)
{
	echo 'Error '.mysqli_error($conn);
}

// Defining your login details into variables
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];
$encrypted_mypassword=md5($mypassword); //MD5 Hash for security
// MySQL injection protections
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($conn,$myusername);
$mypassword = mysqli_real_escape_string($conn,$mypassword);

$sql="SELECT * FROM $tbl_name WHERE email='$myusername' and password='$encrypted_mypassword'" or die(mysqli_error($conn));
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));

// Checking table row
$count=mysqli_num_rows($result);
// If username and password is a match, the count will be 1

if($count==1){
// If everything checks out, you will now be forwarded to student.php
$user = mysqli_fetch_assoc($result);
$_SESSION['member_id'] = $user['member_id'];
header("location:student.php");
}
//If the username or password is wrong, you will receive this message below.
else {
echo "Wrong Username or Password<br><br>Return to <a href=\"index.html\">login</a>";
}

ob_end_flush();

?> 
</div>
<div id="footer"> 
  <div class="bottom_addr">©copy; 2018 CO-OPERATIVE UNIVERSITY OF KENYA ONLINE VOTING SYSTEM. All Rights Reserved</div>
</div>
</div>
</body>
</html>