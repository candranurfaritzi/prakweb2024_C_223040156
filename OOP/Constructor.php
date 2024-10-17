<?php

class ProdukConstructor
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

$produk1 = new ProdukConstructor("Paman dari Dunia lain 2", "Hotondeshindeiru", "Phoenix Gramedia Indonesia", 65000);
$produk2 = new ProdukConstructor("30 Juz", "Akad", "Akad", 89100);

echo "Buku : " . $produk1->getLabel();
echo "\n";
echo "Buku : " . $produk2->getLabel();
echo "\n";
