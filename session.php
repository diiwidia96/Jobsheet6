<?php session_star(); ?>
<html>
<head>
<title>Contoh Pemakaian Session</title>
</head>
<body>
<?php
		if($_SESSION['counter']=="") {$_SESSION['counter']=0;}
			$_SESSION['counter']++;
			echo"<h1>Halaman ini dipanggil
			".$_SESSION['counter']."kali</h1>";
?>
</body>
</html>
