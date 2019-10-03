<?php
class Instructor extends Person {
    private $id;
    private $students = [];
    private $active;

    function __construtor($id, $name, $birthday, $address, $cpf, $rg, $bloodType, $weight, $height){
        $this->id = 'T' + date("YmdHis");
        $this->active = true;

        parent::__construtor($name, $birthday, $address, $cpf, $rg, $bloodType, $weight, $height);
    }

    public function getId(){
        return $this->id;
    }

    public function addStudent(Student $student){
        $this->students[$student->id] = $student;
        return true;
    }

    public function getStudents(){
        return $this->students;
    }

    public function removeStudent($id){
        $studentToRemove = $this->student[$id];
        unset($studentToRemove, $this->students);
        return true;
    }
    
}