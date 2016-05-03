<?php

class Supplytransaction {

    private $supplyTransNo;
    private $supplierName;
    private $supplierNo;
    private $amount;
    private $unitPrice;
    private $totalPrice;

    public function __construct($supplyTransNo) {
        $this->supplyTransNo = $supplyTransNo;
    }

    public function createInvoice($invoiceNo, $supplierName, $date, $typeOfProduct, $amount) {
        
    }

    public function getSupplyTransNo() {
        return $this->supplyTransNo;
    }

    public function setSupplyTransNo($supplyTransNo) {
        $this->supplyTransNo = $supplyTransNo;
    }

}
