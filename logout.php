<html><head>
<link href="css/user_styles.css" rel="stylesheet" type="text/css" />
</head><body bgcolor="tan">
<center><img src = "images/logo.jpg" alt="site logo" width="100" height="102"></a></center><br>     
<center><b><font color = "white" size="6">Moi University Online Voting System</font></b></center><br><br>
<div id="page">
<div id="header">
<h1>Logged Out Successfully </h1>
<p align="center">&nbsp;</p>
</div>
<?
session_start();
session_destroy();
?>
You have been successfully logged out.<br><br><br>
Return to <a href="index.html">Login</a>
<div id="footer">
<div class="bottom_addr">©copy; 2017 Moi University Online voting System. All Rights Reserved</div>
</div>
</div>
</body></html>