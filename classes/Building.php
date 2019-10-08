<?php
abstract class Building {
    private $street;
    private $number;
    private $postalCode;

    function __constructor($street, $number, $postalCode) {
        $this->adress = $adress;
        $this->number = $number;
        $this->postalCode = $postalCode;
    }

    public function setStreet($street) {
        $this->street = $street;
    }

    public function setNumber($number) {
        $this->number = $number;
    }

    public function setPostalCode($postalCode) {
        $this->postalCode = $postalCode;
    }

    public function getStreet() {
        return $this->street;
    }

    public function getNumber() {
        return $this->number;
    }

    public function getPostalCode() {
        return $this->postalCode;
    }
}