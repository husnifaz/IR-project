<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="../stemming/css/bootstrap.min.css">
<style type="text/css">

	body{
		background-image: url(../images/back.png);
	}
	
	.jumbotron{
		margin-top: 10%;
		text-align: center;
		width: 80%;
		margin-left: 10%;
		background-color:#F3FF60; 
	}
	#tombol-proses{
		margin-top: 2%;
	}
	#footer{
		margin-bottom: 20%;
		color: #fff;
	}
	.form-control{
		text-align: center;
	}
	input{
		text-align: center;
	}
	
</style>
<body>
<div class="container"> 
	<div class="jumbotron">
		<h3>Term Frequency</h3>
	<form action="latihan.php" method="POST">
		Dokumen 1 : <input type="text" name="doc1"/><br><br>
		Dokumen 2 : <input type="text" name="doc2"/><br><br>
		Dokumen 3 : <input type="text" name="doc3"/><br><br><br>
		Query : <input type="text" name="queri"><br><br>
		<input type="submit" name="kirim" class="btn btn-danger btn-lg" value="Kirim"/>
	</form>
</div>
</div>
</body>
</html>

<?php 

if (isset($_POST['doc1'])) {
	$doc1=$_POST['doc1'];
	echo $_POST['doc1'];
}
else if (isset($_POST['doc2'])) {
	$doc2=$_POST['doc2'];
	echo $_POST['doc2'];
}
else if (isset($_POST['doc3'])) {
	$doc3=$_POST['doc3'];
	echo $_POST['doc3'];
}
else if (isset($_POST['queri'])) {
	$queri=$_POST['queri'];
	echo $_POST['queri'];
}

 ?>