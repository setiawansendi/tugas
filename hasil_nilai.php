<?php
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];

//buat total nilai (uts+uas+tugas/3)
$total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3; 

//Buat perhitungan IF untuk mencari grade
if ($total_nilai >=85){
    $grade = "A";
}

elseif ($total_nilai >=70){
    $grade = "B";
}

elseif ($total_nilai >=56){
    $grade = "C";
}

elseif ($total_nilai >=30){
    $grade = "D";
}

else {
    $grade = "E";
}

//Buat perhitungan switchcase untuk mencari predikat
switch ($grade){
    case "A" :
        $predikat = "sangat memuaskan";
        break;
    case "B" :
        $predikat = "memuaskan";
        break;
    case "C" :
        $predikat = "cukup";
        break;
    case "D" :
        $predikat = "kurang";
        break;
    case "E" :
        $predikat = "kurang";
        break;                            
    default:
        $predikat = "Tidak Ada";
        break;
}

//penetuan lulus
    if ($total_nilai >=70){
        $status = "LULUS";
    }

    else {
        $status = "GAGAL";
    }


//cetak hasil
echo 'nama : ' . $nama . '<br>';
echo 'Matkul : ' . $matkul . '<br>';
echo 'Nilai UTS : ' . $nilai_uts . '<br>';
echo 'Nilai UAS : ' . $nilai_uas . '<br>';
echo 'Nilai Tugas : ' . $nilai_tugas . '<br>';
echo 'Total Nilai : ' .  $total_nilai . '<br>';
echo 'Grade : ' .  $grade . '<br>';
echo 'Predikat : ' . $predikat . '<br>';
echo 'Status : ' . $status . '<br>';

?>