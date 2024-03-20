<?php 
// definisikan variabel user
$nama = 'Rosalie Naurah';
$umur = 13;
$berat = 22.4;

echo "Nama: $nama";
echo '<br>';

echo 'Nama :   $nama';
echo '<br/>Umur : ' . $umur.' Tahun';
echo '<br/>Berat : '.$berat.' Kg';

echo "<br/>Hello $nama Apakabar";

echo "<br>";

// definisikan variabel system
echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
echo '<br/>Nama File '.$_SERVER["PHP_SELF"];

echo "<br>";

// definisikan variabel konstanta
// define: untuk memanggil variabel konstanta
define('PELAJARAN', 'matematika');

echo PELAJARAN;
?>

