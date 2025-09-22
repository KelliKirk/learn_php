<?php
class Inimene {
    protected $nimi;
    protected $vanus;

    public function __construct($nimi, $vanus){
        $this->nimi = $nimi;
        $this->vanus = $vanus;
    }

    public function tutvustus(){
        return "Minu nimi on " . $this->nimi  . "ja ma olen" . $this->vanus  . "aastane.";
    }

    public function kõnni(){
        return $this->nimi .  "kõnnib.";
    }
}


class Õpilane extends Inimene {
    private $kool;

    public function __construct($nimi, $vanus, $kool) {
        parent::__construct($nimi, $vanus); 
        $this->kool = $kool;
    }

    public function õpi() {
        return $this->nimi . " õpib koolis " . $this->kool; 
    }
}


$õpilane = new Õpilane("Kelli", 32, "VOCO");
echo $õpilane->tutvustus();
echo $õpilane->õpi();
echo $õpilane->kõnni();


?>