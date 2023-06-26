<?php
class balok
{
    public $panjangBalok;
    public $lebarBalok;
    public $tinggiBalok;
    
    function __construct($panjang, $lebar, $tinggi) 
    {
        $this->panjangBalok = $panjang;
        $this->lebarBalok = $lebar;
        $this->tinggiBalok = $tinggi;
    }

    function menghitungVolume() 
    {
        $hasil = $this->panjangBalok * $this->lebarBalok * $this->tinggiBalok;
        return $hasil;
    }

    function menghitungLuas()
    {
        $hasil = 2 * ($this->panjangBalok + $this->lebarBalok + $this->tinggiBalok);
        return $hasil;
    }

}
$objek = new balok(7, 8 , 9);
echo $objek->menghitungVolume();
echo "<br>";
echo $objek->menghitungLuas();