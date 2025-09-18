<?php
class Kellaaeg {
    public $timezone = 'Europe/Tallinn';

    public function __construct() {
        echo "Kellaaja rakendus käivitatud: " . $this->timezone . "\n";
    }

    public function näita_kellaaeg() {
        // LIHTNE viis - kasuta date_default_timezone_set
        date_default_timezone_set($this->timezone);
        $vormindatud = $this->formateeri_kuupäev();
        echo "Praegu on: " . $vormindatud . " (" . $this->timezone . ")\n";
    }

    private function formateeri_kuupäev() {
        return date('d. F Y, H:i');
    }

    public function muuda_ajavöönd($uus_timezone) { 
        if (in_array($uus_timezone, timezone_identifiers_list())) {
            $this->timezone = $uus_timezone;
            echo "Ajavöönd muudetud: " . $this->timezone . "\n";
        } else {
            echo "Vale ajavöönd: " . $uus_timezone . "\n";
        }
    }
}

$kell = new Kellaaeg();
$kell->näita_kellaaeg();

$kell->muuda_ajavöönd('America/New_York'); 
$kell->näita_kellaaeg();

$kell->muuda_ajavöönd('Mingi/Jama');
?>