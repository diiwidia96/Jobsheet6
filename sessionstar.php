<?php session_start();ob_start();?>
<html>
<head>
<title>Contoh Pemakaian Sssion</title>
</head>
<body>
<?php echo"<form action=\"$php_selt\"method=\"post\">";?>
<p>
<pre>
Silahkan Login :
	User : <input type="text"name="user"value="">
	sandi:<input type="password"name="sandi"value
	<input type="submit"name="login"value="Login">
</pre>
</p>
</body>
<?php
if($_POST['login'])
{
	$lgnuser="stekom";$lgnsandi="605";
	/* untuk sementara contoh nama user dan pass merupakan isi variabel
	$lgnuser dan $lgnsandi. untuk selanjutnya kita akan mencoba menggambil
	data yang tersimpan dalam tabel*/
	if(trim($_POST['user']==$lgnuser and trim($_POST['sandi'])==$lgnsandi)
	{	ob_end_clean();
		$_SESSION['user']=$_POST['user'];
		$_SESSION['sandi']=$_POST['sandi'];
		header("Location: menuinternal.php");
		exit();
	}
}
?>
</body>
</html>	