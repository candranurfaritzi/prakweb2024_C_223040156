<?php

define("NAMA", "Candranf");
echo NAMA;

echo "\n";

const UMUR = 20;
echo UMUR;

echo "\n";

class Coba
{
  const NAME = "Candra";
  public $kelas = __CLASS__;
}

echo Coba::NAME;

echo "\n";

$obj = new Coba();
echo $obj->kelas;

echo "\n";

function func()
{
  return __FUNCTION__;
}

echo func();
