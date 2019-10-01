<?php
class Academia {
    private $name;
    private $address;
    private $numberOfStudents;
    private $nuberOfInstructors;
    private $students = [];
    private $instructors = [];

    function __constructor($name, $address){
        $this->name = $name;
        $this->address = $address;
    }

    public function addStudent(Person $person) {
        $this->numberOfStudents += 1;
        array_push($this->students, $person);
    }

    public function addInstructor(Person $person) {
        $this->numberOfTreinners += 1;
        array_push($this->treinners, $person);
    }

    public function getStudents(){
        return $this->students;
    }

    public function getInstructos(){
        return $this->instructors;
    }

    // return por filter via $id
    public function getStudent($id){
        
    }

    public function getInstructor($id){

    }

    //remover por filter dos arrays...
    public function removeStudent(Person $person){
        unset($person, $this->students);
        return true;
    }

    public function removeInstructor(Person $person){
        unset($person, $this->treinner);
        return true;
    }

}