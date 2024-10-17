<?php

class Produk
{
  public $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0;

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

$produk3 = new Produk();
$produk3->judul = "Paman dari Dunia Lain";
$produk3->penulis = "Hotondeshindeiru";
$produk3->penerbit = "Phoniex Gramedia Indonesia";
$produk3->harga = 65000;

$produk4 = new Produk();
$produk4->judul = "30 Juz";
$produk4->penulis = "Akad";
$produk4->penerbit = "Akad";
$produk4->harga = 89100;

echo "Buku : " . $produk3->getLabel();
echo "<br/>";
echo "Buku : " . $produk4->getLabel();
