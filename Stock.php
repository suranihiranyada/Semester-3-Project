<?php

abstract class Stock {

    private $capacity;
    private static $amountAvailable;

    public function _construct($capacity) {
        $this->capacity = $capacity;
    }

    public function getAmountAvailable() {
        return $amountAvailable;
    }

    public function setAmountAvailable($amount) {
        $this->amountAvailable = $this->amountAvailable + $amount;
    }

    public function getCapacity() {
        return $capacity;
    }

    public function setCapacity($capacity) {
        $this->capacity = $capacity;
    }

}
