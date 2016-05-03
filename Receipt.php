<?php

class Receipt {

    private $receiptNo;
    private $customerName;
    private $date;
    private $typeOfProduct;
    private $amount;
    private $unitPrice;
    private $totalPrice;

    public function _constructor($receiptNo, $date, $typeOfProduct, $amount, $customerName) {
        $this->customerName = $customerName;
        $this->receiptNo = $receiptNo;
        $this->date = $date;
        $this->typeOfProduct = $typeOfProduct;
        $this->amount = $amount;
    }

    public function setCustomerName($customerName) {
        $this->customerName = $customerName;
    }

    public function setTypeOfProduct($typeOfProduct) {
        $this->typeOfProduct = $typeOfProduct;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
    }

    public function setUnitPrice($unitPrice) {
        $this->unitPrice = $unitPrice;
    }

    public function getReceiptNo() {
        return $this->receiptNo;
    }

    public function getCustomerName() {
        return $this->customerName;
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
        $this->totalPrice = $this->unitPrice * $this->amount;
        return $this->totalPrice;
    }

}
