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

include "IR.php";
// include "input.php";
// document yang sebagai percobaan


$D[0] = $doc1=$_POST['doc1'];
$D[1] = $doc2=$_POST['doc2'];
$D[2] = $doc3=$_POST['doc3'];

$ir = new IR();

echo "<p><b>Corpus:</b></p>";
//echo $D;
//echo "</br>";

$ir->create_index($D);
$ir->show_docs($D);
echo "<p><b>Inverted Index:</b></p>";
$ir->show_index();

$term = $queri=$_POST['queri'];  //kata asyik yang akan menjadi pusat perhitungan kita
$tf  = $ir->tf($term);
$ndw = $ir->ndw($term);
$idf = $ir->idf($term);
echo "<p>";
echo "Term Frequency of '$term' is $tf<br />";
echo "Number Of Documents with $term is $ndw<br />";
echo "Inverse Document Frequency of $term is $idf<br>";
echo "$tf/$ndw";
echo "</p><br><br>";  

echo "<a href='../index.php'>Kembali</a>";
?>