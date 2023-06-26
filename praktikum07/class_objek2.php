<?php
class buah
{
    public $namaBuah;
    public $warnaKulit;
    public $taste;
    public $aroma;

    function __construct($nama, $warna, $taste, $aroma)
    {
        $this->namaBuah = $nama;
        $this->warnaKulit = $warna;
        $this->taste = $taste;
        $this->aroma = $aroma;
    }

    function tumbuh()
    {
        return "buah $this->namaBuah itu tumbuh !";
    }

    function busuk()
    {
        return "buah $this->namaBuah itu busuk !";
    }

}

$objek = new Buah("Sirsak", "Merah", "Manis", "Busuk");
echo $objek->tumbuh();
echo "<br>";
echo $objek->busuk();

//$objekBuah = new buah();
//echo $objekBuah->namaBuah = "jeruk";
//echo "<br>";
//echo $objekBuah->warnaKulit = "oranye";
//echo "<br>";
//echo $objekBuah->rasa = "kecut";
//echo "<br>";
//echo $objekBuah->aroma = "segar";
//echo "<br>";
//echo $objekBuah->tumbuh();
//echo $objekBuah->busuk();