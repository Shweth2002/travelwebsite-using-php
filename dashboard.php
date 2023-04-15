<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        .home{
	position: relative;
	width: 100%;
	height: 100vh;
	background: url(img/pic.jpg);
	background-size: cover;
	background-position: center;
	display: grid;
	grid-template-columns: repeat(1, 1fr);
	align-items: center;
}
</style>

</head>
<body class="home" id="home" style="background:url('img/pic.jpg'); background-repeat:no-repeat;background-size: cover; background-position: center;">
    <h1 style="color:white;">TRAVEL WEBSITE</h2>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>LOGIN SUCCESSFULL</p>
        <p><a href="index.html">Click here</a></p>
    </div>
</body>
</html>
