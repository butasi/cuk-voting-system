<html>
<head>
<link href="css/user_styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js/user.js">
</script>
</head><body bgcolor="green">
<center><img src = "images/logo.jpg" alt="site logo" width="100"height ="120"></a></center><br>     
<center><b><font color = "white" size="6">CO-OPERATIVE UNIVERSITY OF KENYA ONLINE VOTING SYSTEM</font></b></center><br><br>
<div id="page">
<div id="header">
<h1>Student Registration </h1>
<div class="news"><marquee>New polls are up and running. But they will not be up forever! Just Register ,login and then go to Current Polls to vote for your favourate candidates. </marquee></div>
</div>
<div id="container">
<?php

$conn = mysqli_connect('localhost', 'root', '','polling');
if (!$conn)
{
	echo 'Error '.mysqli_error($conn);
}
//Process
if (isset($_POST['submit']))
{

$myFirstName = addslashes( $_POST['firstname'] ); //prevents types of SQL injection
$myLastName = addslashes( $_POST['lastname'] ); //prevents types of SQL injection
$myEmail = $_POST['email'];
$myPassword = $_POST['password'];

$newpass = md5($myPassword); //This will make your password encrypted into md5, a high security hash

$sql = mysqli_query( $conn,"INSERT INTO tbMembers(first_name, last_name, email, password) VALUES ('$myFirstName','$myLastName', '$myEmail', '$newpass')" )
        or die( mysqli_error($conn) );

die( "You have registered for an account.<br><br>Go to <a href=\"index.html\">Login</a>");
}
?>
<div>
<center> <h3> Register an account by filling in the needed information below </h3> </center> <br>
<form action="registeracc.php" method="post" onSubmit="return registerValidate(this)">
<table align="center"><tr>
  <td><tr><td>First Name:</td><td><input type='text' style='background-color:#63acda; font-weight:bold;' name='firstname' maxlength='15' value=''></td></tr>;
 <tr><td>Last Name:</td><td><input type='text' style='background-color:#63acda; font-weight:bold;' name='lastname' maxlength='15' value=''></td></tr>;
 <tr><td>Email Address:</td><td><input type='text' style='background-color:#63acda; font-weight:bold;' name='email' maxlength='100' value=''></td></tr>;
 <tr><td>Password:</td><td><input type='password' style='background-color:#63acda; font-weight:bold;' name='password' maxlength='15' value=''></td></tr>;
 <tr><td>Confirm Password:</td><td><input type='password' style='background-color:#63acda; font-weight:bold;' name='ConfirmPassword' maxlength='15' value=''></td></tr>;
 <tr><td>&nbsp;</td><td><input type='submit' name='submit' value='Register Account'/></td></tr>;
 <tr><td colspan = '2'><p>Already have an account? <a href='index.html'><b>Login Here</b></a></td></tr>;
 </tr></td></table>;
</form>
</div>

</div> 
<div id="footer">
<div class="bottom_addr">©copy; 2018 CO-OPERATIVE UNIVERSITY OF KENYA ONLINE VOTING SYSTEM. All Rights Reserved</div>
</div>
</div>
</body>
</html>
