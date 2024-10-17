<?php

class ProdukInheritance
{
  public $judul, $penulis, $penerbit, $harga, $jmlHalaman;

  public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
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

class Buku extends ProdukInheritance
{
  public function getInfoProduk()
  {
    $str = "Buku : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

$produk1 = new ProdukInheritance("Paman dari Dunia lain 2", "Hotondeshindeiru", "Phoenix Gramedia Indonesia", 65000, 230);
$produk2 = new ProdukInheritance("30 Juz", "Akad", "Akad", 89100, 300);

echo $produk1->getInfoProduk();
echo "<br/>";
echo $produk2->getInfoProduk();
