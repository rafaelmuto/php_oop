<?php
class Bill {
    public $status;
    public $value;
    public $more = 1.1;
    public $expiratonDate;

    public function __constructor($value, $expiratonDate) {
        $this->status = true;
        $this->value = $value;
        $this->more = $more;
        $this->expiratonDate = $expiratonDate;
    }

    public function charge(Student $student) {
        // enviar cobrança...
        // dados da cobranca no obj Student passado
    }

    public function applyMore() {
        $this->value *= $this->more;
    }

    public function pay($payment) {
        if ($this->value - $payment <= 0) {
            $this->status = false;
        } else {
            $this->value -= $payment;
        }
    }

    //getter & setters
    public function getStatus() {
        return $this->status;
    }

    public function getValue() {
        return $this->value;
    }

    public function getMore() {
        return $this->more;
    }

    public function getExpirationDate() {
        return $this->exprirationDate;
    }

    public function setStatus($newStatus) {
        $this->status = $newStatus;
    }

    public function setValue($value) {
        $this->value = $value;
    }

    public function setMore($more) {
        $this->more = $more;
    }

    public function setExpirationDate($date) {
        $this->expirationDate = $date;
    }

}
