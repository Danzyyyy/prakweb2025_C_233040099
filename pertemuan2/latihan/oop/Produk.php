<?php  

class Produk {

  // property
  public $judul, $penerbit, $harga;


  // constructor
  public function __construct($judul, $penerbit, $harga) 
  {
    $this->judul = $judul;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  // method
  public function getLabel() {
    return $this->judul . "| |" . $this->penerbit;
  }
}

class Komik extends Produk {

  // property
  public $jmlHalaman;

  // constructor
  public function __construct($judul, $penerbit, $harga, $jmlHalaman) 
  {
    parent::__construct($judul, $penerbit, $harga);
    $this->jmlHalaman = $jmlHalaman;
  }

  // method

  public function getLabel()
  {
    return $this->judul;
  }

  public function getInfoKomik() {
    echo "Label:" . parent::getLabel();
    echo "<br>";
    echo "Harga:" . $this->harga;
    echo "<br>";
    echo "Jumlah Halaman:" . $this->jmlHalaman;
    echo "<br>";
  }

}

$komik1 = new Komik("Naruto", "Shonen Jump", 30000, 100);
// $komik1->getInfoKomik();
echo $komik1->judul;


?>