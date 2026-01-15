<?php
class Customer {
    public $fName;
    public $lName;
    public $accounts;

    function __construct($fName, $lName, $accounts) {
        $this->fName = $fName;
        $this->lName = $lName;
        $this->accounts = $accounts;
    }

    function getFullName() {
        return $this->fName . " " . $this->lName;
    }
}
?>