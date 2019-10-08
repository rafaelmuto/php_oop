<?php
abstract class Person {
    private $name;
    private $birthday;
    private $sex;
    private $address;
    private $cpf;
    private $rg;
    private $bloodType;
    private $weight;
    private $height;

    function __constructor($name, $birthday, $sex, $address, $cpf, $rg, $bloodType, $weight, $height) {
        $this->name = $name;
        $this->birthday = $birthday;
        $this->sex = $sex;
        $this->address = $address;
        $this->cpf = $cpd;
        $this->rg = $rg;
        $this->bloodType = $bloodType;
        $this->weight = $weight;
        $this->height = $height;
    }

    public function getName() {
        return $this->name;
    }

    public function getBirthday() {
        return $this->birthday;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getRg() {
        return $this->rg;
    }

    public function getBloodType() {
        return $this->bloodType;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getHeight() {
        return $this->height;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function getBMI() {
        return $this->weight / $this->height * $this->height;
    }
}