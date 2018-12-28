<!DOCTYPE html>
<html>
<head>
	<title>Stemming Kata</title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
		<h3><b>STEMMING KATA DASAR</b> </h3>
			<form method="post" action="proses1.php">
			<input type="text" class="form-control" placeholder="Masukan Kata" name="katadasar" id="katadasar" align="center"></input>

			<div id="tombol-proses">
				<button type="submit" class="btn btn-primary btn-lg" name="submit" id="submit">Proses Kata</button>
			</div>
			</form>
	</div>
			<footer id="footer">
				<p class="footer-text" align="center">&copy; 2017 Muhammad Husni Farid</p>
			</footer>
</div>
</body>
</html>