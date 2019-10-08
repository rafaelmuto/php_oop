<?php
class Instructor extends Person implements Employee {
    private $id;
    private $students = [];
    private $active;
    private $admissionDate;
    private $salary;
    private $position;

    function __construtor($id, $name, $birthday, $address, $cpf, $rg, $bloodType, $weight, $height, $salary) {
        $this->id = 'T' . date("YmdHis"); //id "unico"
        $this->active = true;
        $this->admissionDate = date("Y/m/d");
        $this->salary = $salary;
        $this->position = 'Instructor';

        parent::__construtor($name, $birthday, $address, $cpf, $rg, $bloodType, $weight, $height);
    }

    public function getId() {
        return $this->id;
    }

    public function addStudent(Student $student) {
        $this->students[$student->id] = $student;
        return true;
    }

    public function getStudents() {
        return $this->students;
    }

    public function removeStudent($id) {
        if (array_key_exists($id, $this->students)) {
            $studentToRemove = $this->students[$id];
            unset($studentToRemove, $this->students);
            return true;
        }
        return false;
    }

    public function getAdmissionDate() {
        return $this->admissionDate;
    }

    public function setSalary($value) {
        if ($value > 0) {
            $this->salary = $value;
        }
    }

    public function getSalary() {
        return $this->salary;
    }

    public function getPosition() {
        return $this->position;
    }

    public function setPosition($position) {
        if ($position != null || $position != '') {
            $this->position = $position;
        }
    }

}