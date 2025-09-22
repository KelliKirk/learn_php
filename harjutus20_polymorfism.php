<?php
abstract class Transport {
    protected $nimi;

    public function __construct($nimi){
        $this->nimi = $nimi;
    }

    abstract public function liigu();
    abstract public function peatu();
    abstract public function getKiirus();
}

class Auto extends Transport {

    private $kiirus;

    public function liigu(){
        $this->kiirus = 90;
        return $this->nimi . " sõidab " . $this->kiirus . " km/h";
    }

    public function peatu(){
        $this->kiirus = 0;
        return $this->nimi . "pidurdab ja peatub.";
    }

    public function getKiirus(){
        return $this->kiirus;
    }
}

class Jalgratas extends Transport {

    private $kiirus;

    public function liigu(){
        $this->kiirus = 10;
        return $this->nimi . " sõidab " . $this->kiirus . " km/h";
    }

    public function peatu(){
        $this->kiirus = 0;
        return $this->nimi . "pidurdab ja peatub.";
    }

    public function getKiirus(){
        return $this->kiirus;
    }
}

class Buss extends Transport {

    private $kiirus;

    public function liigu(){
        $this->kiirus = 80;
        return $this->nimi . " sõidab " . $this->kiirus . " km/h";
    }

    public function peatu(){
        $this->kiirus = 0;
        return $this->nimi . "pidurdab ja peatub.";
    }

    public function getKiirus(){
        return $this->kiirus;
    }
}

$sõidukid = array(
    new Auto("Skoda"),
    new Jalgratas("Trek"),
    new Buss("Volvo")
);

function testTransport($sõidukid){
    foreach ($sõidukid as $sõiduk){
        echo $sõiduk->liigu() . "\n";
    }
}

testTransport($sõidukid);

?>