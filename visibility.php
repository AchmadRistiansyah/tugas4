<?php
class produk{
  public $namaBarang, $merk;
  protected $diskon;
  private $harga;

  public function getCetak(){
    return "$this->namaBarang  (Rp $this->harga)";
  }
  public function __construct($namaBarang="nama barang", $harga=0, $ukuranLayar="ukuran layar", $kapasitas="kapasitas"){
    $this->namaBarang = $namaBarang;
    $this->harga=$harga;
    $this->jumlah=$jumlah;
    $this->ukuran=$ukuran;
  }

    public function cetakInfo(){
        $str="{$this->namaBarang}, {$this->getCetak()}";
        return $str;
    }
    public function getHarga(){
        return $this->harga-($this->harga*$this->diskon/100);
    }
}

class laptop extends produk{
    public $jumlah;
    public function __construct($namaBarang, $harga, $jumlah){
        parent::__construct($namaBarang, $harga);
        $this->jumlah=$jumlah;
    }
    public function cetakInfo(){
        $str="Komik: ".parent::getCetak()." | Jumlah: {$this->jumlah}";
        return $str;
    }
        public function setDiskon($diskon){
        return $this->diskon=$diskon;
    }
}

class flashdisk extends produk{
    public $kapasitas;
    public function __construct($namaBarang, $merk, $harga, $kapasitas){
        parent::__construct($namaBarang, $merk, $harga);
        $this->kapasitas=$kapasitas;
    }
    public function cetakInfo(){
        $str="Aksesoris:  ".parent::getCetak()." | Kapasitas: {$this->kapasitas}";
        return $str;
    }
}

$produk1 = new laptop("Idepad 310","Lenovo",7000000,"14 inci");
$produk2 = new flashdisk("Flasdisk","Sandisk",100000,"8 Gb");


echo $produk1->cetakInfo();
echo "<br>";
echo $produk2->cetakInfo();
echo "<br>";
$produk1->setDiskon(50);
echo $produk1->getHarga();
