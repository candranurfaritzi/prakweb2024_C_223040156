<?php

class ProdukObjectType
{
  public $judul, $penulis, $penerbit, $harga;

  public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

class CetakInfoProduk
{
  public function cetak(ProdukObjectType $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

$produk1 = new ProdukObjectType("Paman dari Dunia lain 2", "Hotondeshindeiru", "Phoenix Gramedia Indonesia", 65000);
$produk2 = new ProdukObjectType("30 Juz", "Akad", "Akad", 89100);

echo "Buku : " . $produk1->getLabel();
echo "<br/>";
echo "Buku : " . $produk2->getLabel();
echo "<br/>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
