<link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
	body{
		background-color: #F3FF60;
	}
	#tombol-back{
		text-align: center;
		margin-top: 10%;
	}

</style>
<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
<?php 
require_once('Algoritma_stemming.php');
 ?>
<?php 

if (isset($_POST['katadasar'])) {
	$teksAsli = $_POST['katadasar'];
?>


<h2>Berikut Hasil Dari Stemming Kata</h2>
<div id="tabel-hasil">
<table>
	<tr>
		<td>
			<p class="kata-awalan">Kata Asal</p>
		</td>
		<td>:</td>
		<td>
			<p class="kata-hasil"><strong><?php echo $teksAsli ?></strong></p>
		</td>
	</tr>
<?php
	echo "</br>";
	$length = strlen($teksAsli);
	//echo $length;
	$pattern = '[A-Za-z]';
	$kata = '';
	if (eregi($pattern, $teksAsli)) {
		$kata = $teksAsli;
		$stemming=NAZIEF($kata); //memasukan kata ke fungsi algoritma
		$kata = '';
	}
}
?>

	<tr>
		<td>
			<p class="kata-awalan">Kata Hasil Stemming</p>
		</td>
		<td>:</td>
		<td>
			<p class="kata-hasil"><strong><?php echo $stemming ?></strong></p>
		</td>
	</tr>
	
</table>
			
</div>
	<div id="tombol-back">
		<a href="../index.php">Kembali</a>
	</div>
	<footer id="footer">
					<p class="footer-text">&copy; 2017 Muhammad Husni Farid</p>
</footer>