<?php
class bola
{
    public $phi;
    public $jariJari;
    


    function __construct($ph,$jj)
    {
        $this->phi=$ph;
        $this->jariJari=$jj;
    }

    function luas()
        {
            $hasil = 4 * 3.14 * $this->jariJari * $this->jariJari;
            return $hasil;
        }
    
    function volume()
        {
            $hasil = 4/3 * 3.14 * ($this->jariJari * $this->jariJari *$this->jariJari);
            return $hasil;
        }

}

$objek = new bola(36,12);
echo $objek->luas();
echo "<br/>";
echo $objek->volume();