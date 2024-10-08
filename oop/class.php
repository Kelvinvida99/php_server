<?php
declare(strict_types=1);

$sale = new Sales(10.5, Date("Y-m-d"));
$sale = new Sales(10.5, Date("Y-m-d"));

Sales::reset();

$sale = new Sales(10.5, Date("Y-m-d"));

$onlineSale = new SalesOnline(10.5, Date("Y-m-d"));

echo $onlineSale->createInvoice();

$concept = new Concept("Cerveza", 10);
$sale->addConcept($concept);


class Sales{
    public float $total;
    public string $date;
    public static $count;
    public array $concepts;

    public function __construct(float | int $total, string $date) {
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

class SalesOnline extends Sales {
    public function __construct(float $total, string $date) {
        parent::__construct($total, $date);
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