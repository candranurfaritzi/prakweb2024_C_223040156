<?php

class ProdukVisibility
{
  public $judul, $penulis, $penerbit;

  protected $diskon = 0;
  private $harga;

  public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getHarga()
  {
    return $this->harga - ($this->harga * $this->diskon / 100);
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk()
  {
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    return $str;
  }
}

class Buku extends ProdukVisibility
{
  public $jmlHalaman;

  public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->jmlHalaman = $jmlHalaman;
  }

  public function setDiskon($diskon)
  {
    $this->diskon = $diskon;
  }

  public function getInfoProduk()
  {
    $str = "Buku : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

class CetakInfoProduk
{
  public function cetak(ProdukVisibility $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

$produk1 = new Buku("One Piece", "Oiichiro Oda", "Weekly Shonen Jump", 30000, 100);
$produk2 = new Buku("Uncharted", "Neil Druckmann", "Sony Computer", 25000, 50);

echo $produk1->getInfoProduk();
echo "<br/>";
echo $produk2->getInfoProduk();
echo "<br/><br/>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
