<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="text" placeholder="Masukan NIM Anda" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="text1" name="text1" placeholder="Masukan Nama Lengkap Anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="radio_0" type="radio" class="custom-control-input" value="laki-laki"> 
        <label for="jk_0" class="custom-control-label">Laki-laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="radio_1" type="radio" class="custom-control-input" value="perempuan"> 
        <label for="jk_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="select" name="select" class="custom-select">
        <option value="teknik informatika">Teknik Informatika</option>
        <option value="sistem informasi">Sistem Informasi</option>
        <option value="bisnis digital">Bisnis Digital</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="checkbox_0" type="checkbox" class="custom-control-input" value="html"> 
        <label for="skill_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="checkbox_1" type="checkbox" class="custom-control-input" value="css"> 
        <label for="skill_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="checkbox_2" type="checkbox" class="custom-control-input" value="javascript"> 
        <label for="skill_2" class="custom-control-label">JavaScript</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="checkbox_3" type="checkbox" class="custom-control-input" value="rwd bootstrap"> 
        <label for="skill_3" class="custom-control-label">RWD Bootstrap</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="checkbox_4" type="checkbox" class="custom-control-input" value="python"> 
        <label for="skill_4" class="custom-control-label">Python</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="checkbox_5" type="checkbox" class="custom-control-input" value="php"> 
        <label for="skill_5" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="checkbox_6" type="checkbox" class="custom-control-input" value="java"> 
        <label for="skill_6" class="custom-control-label">Java</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Skor Skill</label> 
    <div class="col-8">
      <input id="text2" name="text2" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="text4" name="text4" placeholder="Masukan Email Anda" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>



<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$skill = $_POST['skill'];
// print_r($hobi); //lihat pesan array

$ss = $_POST['ss'];
$email = $_POST['email'];
//mencari status LULUS & GAGAL
function status($ss){
    if ($ss>=75 && $ss<=95){
        return "BAIK";
    }
    else{
        return "KURANG BAIK";
    }
}    
$status = status($ss);


//cetak
echo "<h2>Informasi yang Anda Kirim:</h2>";
echo "NIM : $nim <br>";
echo "Nama: $nama <br>";
echo "Jenis Kelamin: $jk <br>";
echo "Skill: ";
foreach ($skill as $value) {
    echo "$value, ";
}
echo "<br>";
echo "Skor Skill: $ss <br>";
echo "Email: $email <br>";
echo "Status: $status";

?>