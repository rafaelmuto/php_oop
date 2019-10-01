<?php
class Student extends Person {
    private $id;
    private $trainningType;
    private $active;
    
    function __construtor($id, $trainningType, $name, $birthday, $address, $cpf, $rg, $bloodType, $weight, $height){
        $this->id = 'A' + date("YmdHis");
        $this->trainningType = $trainningType;
        $this->active = true;

        parent::__construtor($name, $birthday, $address, $cpf, $rg, $bloodType, $weight, $height);
    }

    public function getId(){
        return $this->id;
    }

    public function getTrainningType(){
        return $this->trainningType;
    }

    public function setTrainningType($type){
        $this->trainningType = $type;
    }



}