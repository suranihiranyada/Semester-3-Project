<?php

class Cheque {

    private $chequeNo;
    private $bank;
    private $branch;
    private $date;
    private $amount;
    private $returnStatus;
    private $settledStatus;

    public function __construct($chequeNo, $bank, $branch, $date, $amount) {

        $this->chequeNo = $chequeNo;
        $this->bank = $bank;
        $this->branch = $branch;
        $this->date = $date;
        $this->amount = $amount;
        $this->returnStatus = FALSE;
        $this->settledStatus = FALSE;
    }

    public function getChequeNo() {
        return $this->chequeNo;
    }

    public function getBank() {
        return $this->bank;
    }

    public function getDate() {
        return $this->date;
    }

    public function getAmount() {
        return $this->amount;
    }
	
	public function getBranch() {
        return $this->branch;
    }

    public function getReturnStatus() {
        return $this->returnStatus;
    }

    public function setReturnStatus() {
        $this->returnStatus = TRUE;
    }

    public function getSettledStatus() {
        return $this->settledStatus;
    }

    public function setSettledStatus() {
        $this->settledStatus = TRUE;
    }

}
