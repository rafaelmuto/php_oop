<?php
class Gym extends Building {
    private $name;
    private $students = [];
    private $instructors = [];

    function __constructor($name, $street, $number, $postalCode) {
        $this->name = $name;
        parent::__constructior($street, $number, $postalCode);
    }

    public function addStudent(Person $person) {
        $this->students[$person->id] = $person;
    }

    public function addInstructor(Person $person) {
        $this->instructors[$person->id] = $person;
    }

    public function getStudents() {
        return $this->students;
    }

    public function getInstructos() {
        return $this->instructors;
    }

    public function getStudent($id) {
        return $this->students[$id];
    }

    public function getInstructor($id) {
        return $this->instructors[$id];
    }

    public function removeStudent($id) {
        $studentToRemove = $this->students[$id];
        unset($studentToRemove, $this->students);
        return true;
    }

    public function removeInstructor($id) {
        $instructorToRemove = $this->instructor[$id];
        unset($instructorToRemove, $this->treinner);
        return true;
    }

}