<?php
class PersegiPanjang {
    public $panjang, $lebar;

    public function __construct($lebar, $panjang) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function rumusKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
    
    public function rumusLuas() {
        return $this->panjang * $this->lebar;
    }
}


$persegiPanjang = new PersegiPanjang(5, 3);
echo "Keliling: " . $persegiPanjang->rumusKeliling() . "<br>";
echo "Luas: " . $persegiPanjang->rumusLuas();
?>
