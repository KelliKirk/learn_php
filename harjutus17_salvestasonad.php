<?php
class Sonadesalvestaja {
    private $failinimi = 'sonad.txt';
    private $sonad = array();

    public function __construct(){
        $this->sonad = $this->getSonad();
        echo "Sõnade salvestaja on käivitatud\n";
    }

    public function getSonad(){
        if(file_exists($this->failinimi)){
            echo "Loen failist:"  . $this->failinimi . "\n";
            $json = file_get_contents($this->failinimi);
            return json_decode($json, true) ?: array('kass', 'koer', 'lind',);
        } else {
            echo "Fail puudub, kasutan vaikimisi sõnu\n";
            return array('kass', 'koer', 'lind');

        } 
    }

    public function lisa_sona($sona){
        $this->sonad[] = $sona;
        $this->salvesta_faili();
        echo "Lisatud: " . $sona . "\n";
    }

    public function naita_sonad(){
        echo "Sõnad: " . implode(', ', $this->sonad) . "\n";
    }

    public function kustuta_sona($sona){
        $asukoht = array_search($sona, $this->sonad);
        if ($asukoht !== false){
            unset($this->sonad[$asukoht]);
            $this->sonad = array_values($this->sonad);
            $this->salvesta_faili();
            echo "Sõna '$sona' on kustutatud\n";
        } else {
            echo "Sõna '$sona' ei leitud\n";
        }
    }

    private function salvesta_faili(){
        file_put_contents($this->failinimi, json_encode($this->sonad));
        echo "Salvestatud faili\n";
    }

    
        
}

// Testing
    $salvestaja = new Sonadesalvestaja();
    $salvestaja->naita_sonad();
    $salvestaja->lisa_sona('hobune');
    $salvestaja->naita_sonad();
?>