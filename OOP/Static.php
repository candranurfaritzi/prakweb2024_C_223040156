<?php

class ContohStatic
{
  public static $angka = 1;

  public static function halo()
  {
    return "Halo " . self::$angka++ . " kali.";
  }
}

echo ContohStatic::$angka;
echo "<br/>";
echo ContohStatic::halo();
echo "<br/><br/>";
echo ContohStatic::halo();
echo "<br/><br/>";

class Contoh
{
  public static $angka = 1;

  public function halo()
  {
    return "Halo " . self::$angka++ . " kali.\n";
  }
}


$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "<br/>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
