<?php
abstract class Instrument {
    protected $nimi;
    protected $hind;

    public function __construct($nimi, $hind) {
        $this->nimi = $nimi;
        $this->hind = $hind;
    }

    public function getNimi() {
        return $this->nimi;
    }

    public function getHind() {
        return $this->hind;
    }

    abstract public function mängi();
    abstract public function häälesta();
}

class Kitarr extends Instrument {
    public function __construct($nimi, $hind) {  
        parent::__construct($nimi, $hind);
    }

    public function mängi() {
        return "Mängime " . $this->nimi . " kitarri, mis maksab " . $this->hind . " eurot";
    }

    public function häälesta() {
        return "Kitarr on hääles.";  
    }
}

class Klaver extends Instrument {
    public function __construct($nimi, $hind) {  
        parent::__construct($nimi, $hind);
    }

    public function mängi() {
        return "Mängime " . $this->nimi . " klaverit, mis maksab " . $this->hind . " eurot";
    }

    public function häälesta() {
        return "Klaver on hääles.";  
    }
}

$kitarr = new Kitarr("Gibson", 43);
$klaver = new Klaver("Estonia", 100);

echo $kitarr->mängi() . "\n";      
echo $klaver->mängi() . "\n";
echo $kitarr->häälesta() . "\n";
echo $klaver->häälesta() . "\n";
?>