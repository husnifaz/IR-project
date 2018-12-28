<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<style type="text/css">
	
	body{
		text-align: center;
		font-family: serif;
		font-size: 18px;
		background-color: #fdff66;
	}
	table{
		margin-top: 20pt;
		margin-left: 42%;
		font-family: serif;
		font-size: 18px;
	}
</style>
<?php
	if (isset($_POST['kalimat'])){
		$kalimat=$_POST['kalimat'];
	}
?>
	<div id="head">
		<h1>HASIL DARI TOKENISASI</h1>
		<h3>Kalimatnya adalah : </h3>
		<p style="font-size: 24px; font-style: italic; "><?php echo $kalimat ?></p>
	</div>
<?php
$hasil1=strlen($kalimat); //mengetahui panjang suatu string

$count=count(explode(" ", $kalimat)); //explode=memecah string menjadi array
$hasil2=explode(" ", $kalimat);
//$hasil2=strlend($kalimat2);

echo "Jumlah karakter  :".$hasil1;
echo "<br>";
echo "Jumlah Kata : " .$count;
echo "<br>";
?>

<table>
	<tr>
		<td>
		<?php for ($i=0; $i <count($hasil2) ; $i++) { 
	$a=$i+1;
	echo "Kata ke $a adalah : \t\t\t".$hasil2[$i]."<br/>";
}
?>
</td>
</tr>
</table>

<?php
echo "</br>";
echo "Sesudah diubah : ";

//penghilangan tanda baca
$str = str_replace(',', ' ', $kalimat);
$str = str_replace('.', ' ', $str);
$str = str_replace('?', ' ', $str);
$str = str_replace('!', ' ', $str);
$str = str_replace('/', ' ', $str);
$str = str_replace('$', ' ', $str);
echo "</br>";
$string = strtolower($str);
//echo "$string";
echo "</br>";

//penghilangan stopword
$stopwords = array("ketika","akan","where","dan","atau","kemudian","dhi","apakah");

foreach ($stopwords as &	$word) {
	$word = '/\b' .preg_quote($word,'/') .'\b/';
}
$replace=preg_replace($stopwords, '', $string);

echo "Setelah di hilangkan tanda bacanya : </br> <b>$string</b>";
echo "</br>";
echo "</br>";
echo "Setelah menghilangkan stopword : </br> <b>$replace</b>";

echo "<br><br><a href='../index.php'>Kembali</a>";
?>