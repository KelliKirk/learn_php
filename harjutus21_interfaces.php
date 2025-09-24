<?php
interface Printable {
    public function print();
}

interface Exportable {
    public function export($format);
}

class Dokument implements Printable, Exportable {
    private $pealkiri;
    private $sisu;

    public function __construct($pealkiri, $sisu){
        $this->pealkiri = $pealkiri;
        $this->sisu = $sisu;
    }

    public function print(){
        return "User " . $this->pealkiri . "containing " . $this->sisu . "has been printed. ";
    }

        // Faili formaadi vahetus
     public function export($format) {
        switch($format) {
            case 'pdf':
                return "[PDF] " . $this->pealkiri . "\n" . "=" . str_repeat("=", strlen($this->pealkiri)) . "\n" . $this->sisu;
                
            case 'html':
                return "<h1>" . $this->pealkiri . "</h1><p>" . $this->sisu . "</p>";
                
            case 'txt':
                return $this->pealkiri . "\n\n" . $this->sisu;
                
            default:
                return "Tundmatu formaat: " . $format;
        }
    }
}

class Pilt implements Printable {
    private $failinimi;

    public function __construct($failinimi){
        $this->failinimi = $failinimi;
    }

    public function print(){
        return "Pilt '" . $this->failinimi . "' on prinditud.";
    }
}

$dokument = new Dokument("Suvaline dokument", "Dokumendi sisu bla bla bla");
$pilt = new Pilt("pilt.jpg");

echo   $dokument->print . "\n\n";

echo "PDF export:\n" . $dokument->export('pdf') . "\n\n";
echo "HTML export:\n" . $dokument->export('html') . "\n\n";
echo "TXT export:\n" . $dokument->export('txt') . "\n\n";

echo   $pilt->print() . "\n";

?>