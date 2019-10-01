<?php
class Instructor extends Person {
    private $id;
    private $name;
    private $birthday;
    private $address;
    private $cpf;
    private $rg;
    private $bloodType;
    private $weight;
    private $height;
    private $students = [];

    function __construtor($id, $name, $birthday, $address, $cpf, $rg, $bloodType, $weight, $height){
        $this->id = 'T' + date("YmdHis");
        $this->name = $name;
        $this->birthday = $birthday;
        $this->address = $address;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->bloodType = $bloodType;
        $this->weight = $weight;
        $this->height = $height;
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

    public function addStudent($id){
        array_push($this->students, $id);
        return true;
    }

    public function getStudents(){
        return $this->students;
    }

    public function removeStudent(Student $student){
        unset($student, $this->students);
        return true;
    }
    
}