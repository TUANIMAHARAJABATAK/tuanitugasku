<?php
class Contoh{
    public static $angka = 1;

    public function halo(){
        return "Halo" . self::$angka++ . "kali. <br>";
    }
}

echo Contoh::$angka;
echo "<br>";

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "<hr>";

$obj2 = new Contoh;