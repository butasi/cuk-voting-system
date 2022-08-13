<html>
<?php
$conn = mysqli_connect('localhost', 'root', '','polling');
if (!$conn)
{
	echo 'Error '.mysqli_error($conn);
}

session_start();
//If your session isn't valid, it returns you to the login screen for protection
if(empty($_SESSION['member_id'])){
 header("location:access-denied.php");
}
?>
<html><head>
<link href="css/user_styles.css" rel="stylesheet" type="text/css" />
</head><body bgcolor="tan">
<center><img src = "images/logo.jpg" alt="site logo"width="100" height="102"></a></center><br>     
<center><b><font color = "white" size="6">Moi University Online  Voting System</font></b></center><br><br>
<div id="page">
<div id="header">
<h1>STUDENT HOME </h1>
<a href="student.php">Home</a> | <a href="vote.php">Current Polls</a> | <a href="manage-profile.php">Manage My Profile</a> | <a href="logout.php">Logout</a>
</div>
<div id="container">
<p> Click a link above to do some stuff.</p>
</div>
<div id="footer">
<div class="bottom_addr">©copy; 2018 Moi University Online  voting System. All Rights Reserved</div>
</div>
</div>
</body></html>