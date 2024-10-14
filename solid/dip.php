<?php

interface ReportIterface {
    public function generate(string $content);
}

class PDFreport implements ReportIterface {
    public function generate(string $content){
        echo "Generando el reporte pdf: $content";
    }
}

class HTMLRport implements ReportIterface {
    public function generate(string $content){
        echo "Generando el reporte html: $content";
    }
}

class Estimate {
    private ReportIterface $report;

    public function __construct(ReportIterface $report){
        $this->report = $report;
    }

    public function generate(string $content){
        $this->report->generate($content);
    }
}

$newReport = new PDFreport();
$newEstimate = new Estimate($newReport);
$newEstimate->generate("hola");