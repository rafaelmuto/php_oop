<?php
interface Course {
    public function setCourseName($couserName);
    public function setWeekDay($weekDay);
    public function setTime($time);
    public function setInstructor(Instructor $instructor);
    public function addStudent(Student $student);
    public function getCourseName($couserName);
    public function getWeekDay($weekDay);
    public function getTime($time);
    public function getInstructor(Instructor $instructor);
    public function getStudents(Student $student);
    public function removeStudent($studentId);
}