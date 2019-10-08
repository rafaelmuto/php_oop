<?php
class Pilates implements Course {
    private $courseName;
    private $weekDay;
    private $time;
    private $instructor;
    private $students = [];

    function __constructor($courseName, $weekDay, $time, Instructor $instructor){
        $this->couserName = $courseName;
        $this->weekDay = $weekDay;
        $this->time = $time;
        $this->instructor = $instructor;
    }

    public function setCourseName($courseName) {
        $this->courseName = $courseName;
    }

    public function setWeekDay($weekDay) {
        $this->weekDay = $weekDay;
    }

    public function setTime($time) {
        $this->time = $time;
    }

    public function setInstructor(Instructor $instructor) {
        $this->instructor = $instructor;
    }

    public function addStudent(Student $student) {
        $this->students[$student->id] = $student;
    }

    public function getCourseName($couserName) {
        return $this->couserName;
    }

    public function getWeekDay($weekDay) {
        return $this->weekDay;
    }

    public function getTime($time) {
        return $this->time;
    }

    public function getInstructor(Instructor $instructor) {
        return $this->instructor;
    }

    public function getStudents(Student $student) {
        return $this->students;
    }

    public function removeStudent($studentId) {
        if (in_array($this->students[$studentId], $this->stutends)) {
            $student_to_remove = $this->students[$studentId];
            unset($student_to_remove, $this->students);
            return true;
        }
        throw new Exception('could not remove ' . $studentId . ' in this course');
    }
}