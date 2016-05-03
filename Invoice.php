<?php

class Invoice {

    private $invoiceNo;
    private $supplierName;
    private $date;
    private $typeOfProduct;
    private $amount;
    private $unitPrice;
    private $totalPrice;

    function _constructor($invoiceNo, $supplierName, $date, $typeOfProduct, $amount) {
        $this->invoiceNo = $invoiceNo;
        $this->supplierName = $supplierName;
        $this->date = $date;
        $this->typeOfProduct = $typeOfProduct;
        $this->amount = $amount;
    }

    public function setUnitPrice($unitPrice) {
        $this->unitPrice = $unitPrice;
    }

    public function getInvoiceNo() {
        return $this->invoiceNo;
    }

    public function getSupplierName() {
        return $this->supplierName;
    }

    public function getDate() {
        return $this->date;
    }

    public function getTypeOfProduct() {
        return $this->typeOfProduct;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function getUnitPrice() {
        return $this->unitPrice;
    }

    public function getTotalPrice() {
        $this->totalPrice = ($this->amount) * ($this->unitPrice);
        return $this->totalPrice;
    }

}
