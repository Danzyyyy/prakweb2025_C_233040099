<?php  

class Rumah {
// Properti
  public $warnaCat = "Putih";
  public $jmlKamar = 10;
  public $alamat = "Jl. Setiabudi";

// method
public function __construct($warnaCat, $jmlKamar) {
    // Konstruktor
    $this->warnaCat = $warnaCat;
    $this->jmlKamar = $jmlKamar;

  }

  public function kunciPintu() {
    return "Pintu sudah dikunci!";
  }

  public function gantiWarna($warnaCat) {
    $this->warnaCat = $warnaCat;
  }

}

function pasangListrik(Rumah $rumah) {
    return "Rumah warna " .
    $rumah->warnaCat . " dipasang listrik.";
}

$rumahAndi = new Rumah('Hijau', 4);
echo pasangListrik($rumahAndi);
echo "<br>";


// Rumah Saya
$rumahSaya = new Rumah('Biru', 5);
// $rumahSaya->gantiWarna("Biru");
echo "Rumah Saya: " . $rumahSaya->warnaCat;
echo "<br>";
echo "Jumlah Kamar Saya: " . $rumahSaya->jmlKamar;
echo "<br>";

// Rumah Tetangga
$rumahTetangga = new Rumah('Kuning', 8);
// $rumahTetangga->gantiWarna("Hijau");
echo "Rumah Tetangga: " . $rumahTetangga->warnaCat;
echo "<br>";
echo "Jumlah Kamar Tetangga: " . $rumahTetangga->jmlKamar;
echo "<br>";


?>