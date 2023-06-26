<?php
class mamalia
{
    public $jumlakaki;
    public $berekor;

    function menyusui()
    {
        return "Hewan menyusui";
    }

    function melahirkan()
    {
        return "Hewan Melahirkan";
    }
}

$subjekMamalia = new mamalia();
echo $subjekMamalia->melahirkan();
echo "<br>";
echo $subjekMamalia->menyusui();
echo $subjekMamalia->jumlahkaki =2;