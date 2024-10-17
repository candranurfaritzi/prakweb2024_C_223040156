<?php

class ProdukInheritanceProblem
{
  public $judul, $penulis, $penerbit, $harga, $jmlHalaman, $tipe;

  public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $tipe = "Tipe")
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->tipe = $tipe;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoLengkap()
  {
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    if ($this->tipe == "Komik") {
      $str .= " - {$this->jmlHalaman} Halaman.";
    }

    return $str;
  }
}

class CetakInfoProduk
{
  public function cetak(ProdukInheritanceProblem $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

$produk1 = new ProdukInheritanceProblem("Paman dari Dunia lain 2", "Hotondeshindeiru", "Phoenix Gramedia Indonesia", 65000, 230);
$produk2 = new ProdukInheritanceProblem("30 Juz", "Akad", "Akad", 89100, 300);

echo $produk1->getInfoLengkap();
echo "<br/>";
echo $produk2->getInfoLengkap();
