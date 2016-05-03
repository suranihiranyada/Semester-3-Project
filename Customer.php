<?php

class Customer {

    private $name;
    private $nameOfShop;
    private $teleNo;
    private $orderTransactions = array();
    private $customerNo;

    function __construct($name, $telNo) {
        $this->name = $name;
        $this->teleNo = $telNo;
    }

    public function getName() {
        return $name;
    }

    public function getTelNo() {
        return $telNo;
    }
	
	public function getShopName() {
        return $nameOfShop;
    }

    public function setTelNo($telNo) {
        $this->teleNo = $telNo;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setShopName($name) {
        $this->nameOfShop = $name;
    }

}
