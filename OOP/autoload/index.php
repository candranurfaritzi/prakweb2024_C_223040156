<?php

require_once("App/init.php");

$produk1 = new Buku("Paman Dari Dunia Lain 2", "Hotondeshindeiru", "Phoenix Gramedia Indonesia", 65000, 230);
$produk2 = new Buku("30 Juz", "Akad", "Akad", 89100, 300);
$produk3 = new Buku("Dongeng Tentang Kebahagiaan", "Pater Rosei", "Yayasan Pustaka Obor Indonesia", 78300, 202);
$produk4 = new Buku("Sisi Tergelap Surga", "Brian Khrisna", "Gramedia Pustaka Utama ", 79200, 304);
$produk5 = new Buku("Tuhan Aku Lelah Aku Ingin Istirahat", "Yasmine", "Yayasan Pustaka Obor Indonesia", 78300, 202);
$produk6 = new Buku("Perahu Kertas", "Dewi Lestari", "Bentang Pustaka", 116100, 440);
$produk6 = new Buku("3726 MDPL", "Nurwing Sari", "Romancius", 89550, 280);
$produk7 = new Buku("Jodoh Bukan?", "Bintu Ismail", "Cloud Books", 89100, 354);
$produk8 = new Buku("Hei Intern", "Hamalem", "Gramedia Pustaka Utama", 89000, 336);
$produk9 = new Buku("Braga Antara", "Neria Kamila", "Bukune", 79200, 320);
$produk10 = new Buku("7 Our Family", "Kusdina Ain", "Rain Books", 89100, 308);


$cetakProduk = new CetakinfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
$cetakProduk->tambahProduk($produk3);
$cetakProduk->tambahProduk($produk4);
$cetakProduk->tambahProduk($produk5);
$cetakProduk->tambahProduk($produk6);
$cetakProduk->tambahProduk($produk7);
$cetakProduk->tambahProduk($produk8);
$cetakProduk->tambahProduk($produk9);
$cetakProduk->tambahProduk($produk10);

echo $cetakProduk->cetak();
