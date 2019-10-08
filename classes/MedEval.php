<?php
class MedEval {
    private $personId;
    private $date;
    private $weight;
    private $heartRate;
    private $BMI;
    private $bodyFat;

    function __constructor($personId, $date) {
        $this->personId = $personId;
        $this->date = $date;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function setHeartRate($BPM) {
        $this->heartRate = $BPM;
    }

    public function setBMI($BMI) {
        $this->BMI = $BMI;
    }

    public function setBodyFat($bodyFat) {
        $this->bodyFat = $bodyFat;
    }

    public function getPersonId() {
        return $this->personId;
    }

    public function getDate() {
        return $this->date;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getHeartRate() {
        return $this->heartRate;
    }

    public function getBMI() {
        return $this->BMI;
    }

    public function getBodyFat() {
        return $this->bodyFat;
    }
}