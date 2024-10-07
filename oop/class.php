<?php
declare(strict_types=1);

$sale = new Sales(10.5, Date("Y-m-d"));
$sale = new Sales(10.5, Date("Y-m-d"));

echo Sales::$count;

Sales::reset();

$sale = new Sales(10.5, Date("Y-m-d"));

echo Sales::$count;

$concept = new Concept("Cerveza", 10);
$sale->addConcept($concept);
print_r($sale->concepts);

class Sales{
    public float $total;
    public string $date;
    public static $count;
    public array $concepts;

    public function __construct(float $total, string $date) {
        $this->total = $total;
        $this->date = $date;
        $this->concepts = [];
        self::$count++;
    }

    public function createInvoice() {
        echo $this->total;
    }
    
    public static function reset() {
        self::$count = 0;
    }

    public function addConcept(Concept $concept) {
        $this->concepts[] = $concept;
    }

    public function __destruct() {
        echo "sea eliminado el objeto";
    }
}

class Concept {
    public string $description;
    public float $total;

    public function __construct(string $description, float $total) {
        $this->description = $description;
        $this->total = $total;
    }
}