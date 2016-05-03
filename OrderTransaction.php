<?php

class OrderTransaction {

    private $orderTransNo;
    private $customerName;
    private $customerNo;
    private $amount;
    private $unitPrice = 0;
    private $totalPrice;
    private $date;

    public function _constructor($orderTransNo, $customerName, $customerNo, $amount, $date) {

        $this->orderTransNo = $orderTransNo;
        $this->customerName = $customerName;
        $this->customerNo = $customerNo;
        $this->amount = $amount;
        $this->date = $date;
    }

    public function createReceipt($receiptNo, $date, $typeOfProduct, $amount, $customerName) {
        
    }

    public function getCustomerName() {
        return $this->customerName;
    }

    public function getUnitPrice() {
        return $this->unitPrice;
    }

    public function setCustomerName($customerName) {
        $this->customerName = $customerName;
    }

    public function setUnitPrice($unitPrice) {
        $this->unitPrice = $unitPrice;
    }

    public function getOrderTransNo() {
        return $this->orderTransNo;
    }

    public function getCustomerNo() {
        return $this->customerNo;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function getTotalPrice() {
        $this->totalPrice = $amount * $unitPrice;
        return $this->totalPrice;
    }

}
