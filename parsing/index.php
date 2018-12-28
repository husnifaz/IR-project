<html>
<head>
	<title>Tokenisasi</title>
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
	
</style>
<body>


    <div class="container"> 
	<div class="jumbotron">
		<h3>TOKENISASI KALIMAT</h3>
			<form id="form1" name="form1" method="post" action="proses.php">
			<label>
				<input name="kalimat" class="form-control" type="text" id="kalimat" placeholder="Masukan Kalimatnya...." size="100" maxlength="100"/>
			</label>
			<p>
			<label>
				<input type="submit" class="btn btn-danger btn-lg" name="submit" id="submit" value="Proses" />
			</label>
			</p>
			</form>
	</div>
	</div>
</body>
</html>