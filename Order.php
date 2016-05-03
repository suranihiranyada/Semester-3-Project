<?php

class Order {

    private $orderNo;
    private $nameOfItem;
    private $amount;
    private $customerName;
    private $customerNo;

    public function _constructor($orderNo) {
        $this->orderNo = $orderNo;
    }

    public function createOrderTransaction($orderTransNo, $customerName, $customerNo, $amount, $date) {
        
    }

    public function getNameOfItem() {
        return $this->nameOfItem;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function setNameOfItem($nameOfItem) {
        $this->nameOfItem = $nameOfItem;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
    }

}
