<?php session_start(); ob_start();
if(!session_is_registered(user)and(!session_is_registered(sandi)))
{ ob_end_clean();
	header("Location:login.php");
	exit();
}
?>
<html>
<head>
<title>Contoh Menu Internal</title>
</head>
<body>
<b>Selamat Datang Di Pengolahan data internal</b>
<br><br>
	echo"User Anda: ".$_SESSION['user']."<br>";
	echo"Sandi Anda: ".$_SESSION['sandi']."<br><br>";
	echo"<form action="\$php_selt\"method=\"post\">
	<input type="\submit\"name=\"logout\"value=\"Keluar\">
	</form>";
</body>
</html>
<?php
if($_POST['logout'])
{	session_destory();
	ob_end_clean();
	header("Location:login.php");
	exit();
	}
	?>