<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="GET" action="hasil_nilai.php">
   <h1>Form Nilai Siswa</h1> 
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="ddp">DDP</option>
        <option value="pemweb">Pemweb2</option>
        <option value="basis data">Basis Data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
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