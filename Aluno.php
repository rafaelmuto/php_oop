<?php
class Aluno {
    private $id;
    private $name;
    private $birthday;
    private $address;
    private $cpf;
    private $rg;
    private $bloodType;
    private $weight;
    private $height;
    private $trainningType;
    private $active;
    
    function __construtor($id,$name, $birthday, $address, $cpf, $rg, $bloodType, $weight, $height, $trainningType){
        $this->id = $id;
        $this->name = $name;
        $this->birthday = $birthday;
        $this->address = $address;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->bloodType = $bloodType;
        $this->weight = $weight;
        $this->height = $height;
        $this->trainningType = $trainningType;
        $this->active = true;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getBirthday(){
        return $this->birthday;
    }

    public function getAddress(){
        return $this->address;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function getRg(){
        return $this->rg;
    }

    public function getBloodType(){
        return $this->bloodType;
    }

    public function getWeight(){
        return $this->weight;
    }

    public function getHeight(){
        return $this->height;
    }

    public function getTrainningType(){
        return $this->trainningType;
    }

    public function setAddress($address){
        $this->address = $address;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function setWeight($weight){
       $this->weight = $weight;
    }

    public function setHeight($height){
        $this->height = $height;
    }

    public function setTrainningType($type){
        $this->trainningType = $type;
    }

    public function getBMI(){
        return $this->weight / $this->height * $this->height;
    }

}