<?php
$prodi = [
    "SI" => "Sistem Informasi",
    "TI" => "Teknik Informatika",
    "BD" => "Bisnis Digital"
];

$skills = [
    "HTML" => 10,
    "CSS" => 10,
    "Javascript" => 20,
    "RWD Bootstrap" => 20,
    "PHP" => 30,
    "Python" => 30,
    "Java" => 50,
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $jk = $_POST["jk"];
    $prodi = $_POST["prodi"];
    $skills = $_POST["skills"];
    $email = $_POST["email"];

    $nilai_skills = [
        "HTML" => 10,
        "CSS" => 10,
        "Javascript" => 20,
        "RWD Bootstrap" => 20,
        "PHP" => 30,
        "Python" => 30,
        "Java" => 50,
    ];

    $skors_skill = 0;
    foreach ($skills as $value) {
        $skors_skill += $nilai_skills[$value];
    }

    if ($skors_skill <= 0) {
        $predikat = "Tidak Memadai";
    } elseif ($skors_skill <= 40) {
        $predikat = "Kurang";
    } elseif ($skors_skill >= 41 && $skors_skill <= 60) {
        $predikat = "Cukup";
    } elseif ($skors_skill >= 61 && $skors_skill <= 100) {
        $predikat = "Baik";
    } elseif ($skors_skill >= 101) {
        $predikat = "Sangat Baik";
    } else {
        $predikat = "Tidak Terdefinisikan";
    }

   
    echo "NIM: $nim";
    echo "<br>Nama Lengkap: $nama";
    echo "<br>Jenis Kelamin: $jk";
    echo "<br>Program Studi: $prodi";
    echo "<br>Skills: " . implode(", ", $skills);
    echo "<br>Email: $email";
    echo "<br>Skor Skill: $skors_skill";
    echo "<br>Kategori Skill: $predikat";
    exit; 
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <fieldset class="mx-5 border p-4">
        <legend>Form Registrasi </legend>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label>
                <div class="col-8">
                    <input id="nim" name="nim" type="text" class="form-control" required="required">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-Laki" required="required">
                        <label for="jk_0" class="custom-control-label">Laki-Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan" required="required">
                        <label for="jk_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="prodi" class="col-4 col-form-label">Program Studi</label>
                <div class="col-8">
                    <select id="prodi" name="prodi" class="custom-select" required="required">
                        <?php foreach($prodi as $key => $value):?>
                            <option value="<?php echo $key ?>"><?php echo $value?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Skill Web &amp; Programing</label>
                <div class="col-8">
                <?php foreach($skills as $key => $value):?>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skills[]" id="skills_<?php echo $key ?>" type="checkbox" class="custom-control-input" value="<?php echo $key ?>">
                            <label for="skills_<?php echo $key ?>" class="custom-control-label"><?php echo $key ?></label>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
           
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-envelope"></i>
                            </div>
                        </div>
                        <input id="email" name="email" type="text" required="required" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </fieldset>
            
        </form>
    </fieldset>
</body>

</html>
