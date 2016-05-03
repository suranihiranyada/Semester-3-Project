<?php

class Report {

    private $name;
    private $noOfDays;
    private $overTime;
    private $EPF;
    private $ETF;
    private $totalSalary;

    public function __construct($name, $days, $overTime, $epf, $etf) {
        $this->name = $name;
        $this->noOfDays = $days;
        $this->overTime = $overTime;
        $this->EPF = $epf;
        $this->ETF = $etf;
    }

    public function calculateSalary() {
        
    }

    public function printReport() {
        
    }

}
