<?php
class Account {
    public $number;
    public $type;
    public $balance;

    function __construct($number, $type, $balance) {
        $this->number = $number;
        $this->type = $type;
        $this->balance = $balance;
    }
}
?>