<?php
class Academia {
    private $name;
    private $address;
    private $numberOfStudents;
    private $nuberOfTreinners;
    private $students = [];
    private $treinners = [];

    function __constructor($name, $address){
        $this->name = $name;
        $this->address = $address;
    }

    public function addStudent($id) {
        $this->numberOfStudents += 1;
        array_push($this->students, $id);
    }

    public function addTreinner() {
        $this->numberOfTreinners += 1;
        array_push($this->treinners, $id);
    }

    public function removeStudent($id){
        unset($id, $this->students);
        return true;
    }

    public function removeTreinner($id){
        unset($id, $this->treinner);
        return true;
    }

}