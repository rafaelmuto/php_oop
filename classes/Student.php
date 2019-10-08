<?php
class Student extends Person {
    private $id;
    private $trainningType;
    private $active;
    private $plan;
    private $bills = [];

    function __construtor($id, $trainningType, $name, $birthday, $address, $cpf, $rg, $bloodType, $weight, $height, $plan) {
        $this->id = 'A' . date("YmdHis");
        $this->trainningType = $trainningType;
        $this->active = true;
        $this->plan;

        parent::__construtor($name, $birthday, $address, $cpf, $rg, $bloodType, $weight, $height);
    }

    public function charge() {
        $value = $this->plan->getPrice();
        $expiratonDate = $this->plan->getChargeDate();

        $bill = new Bill($value, $expiratonDate);
        array_push($this->bills, $bill);
        $bill->charge($this);
    }

    public function getId() {
        return $this->id;
    }

    public function getTrainningType() {
        return $this->trainningType;
    }

    public function setTrainningType($type) {
        $this->trainningType = $type;
    }

    public function setPlan($name, $price, $subscription, $chargeDate) {
        $this->plan = new Plan($name, $price, $subscription, $chargeDate);
    }

    public function getPlan() {
        return $this->plan;
    }

}