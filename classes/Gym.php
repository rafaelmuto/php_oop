<?php
class Gym extends Building {
    private $name;
    private $students = [];
    private $instructors = [];
    private $equipments = [];

    function __constructor($name, $street, $number, $postalCode) {
        $this->name = $name;
        parent::__constructior($street, $number, $postalCode);
    }

    public function addStudent(Student $student) {
        if (!in_array($student, $this->students)) {
            $this->students[$student->id] = $student;
        }
        throw new Exception($student->id . ' already exists');
    }

    public function addInstructor(Instructor $instructor) {
        if (!in_array($instructor, $this->instructors)) {
            $this->instructors[$instructor->id] = $instructor;
        }
        throw new Exception($instructor->id . ' alreday exists');
    }

    public function addEquipment(Equipment $equipment) {
        if (!in_array($equipment, $this->equipments)) {
            $this->equipments[$equipment->patrimonyId] = $equipment;
            return true;
        }
        throw new Exception('equipment ' . $equipment->patrimonyId . ' already added');
    }

    public function getStudents() {
        return $this->students;
    }

    public function getInstructos() {
        return $this->instructors;
    }

    public function getStudent($id) {
        if (array_key_exists($id, $this->students)) {
            return $this->students[$id];
        }
        throw new Exception('could not get student ' . $id);
    }

    public function getInstructor($id) {
        if (array_key_exists($id, $this->instructors)) {
            return $this->instructors[$id];
        }
        throw new Exception('could not get instructor ' . $id);
    }

    public function removeStudent($id) {
        if (array_key_exists($id, $this->students)) {
            $studentToRemove = $this->students[$id];
            unset($studentToRemove, $this->students);
            return true;
        }
        throw new Exception('could not remove student ' . $id);
    }

    public function removeInstructor($id) {
        if (array_key_exists($id, $this->instructors)) {
            $instructorToRemove = $this->instructor[$id];
            unset($instructorToRemove, $this->treinner);
            return true;
        }
        throw new Exception('could not remove instructor ' . $id);
    }

}