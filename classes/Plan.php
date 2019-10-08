<?php
class Plan {
    private $planName;
    private $price;
    private $subscriptionPrice;
    private $chargeDate;

    public function __constructor($name, $price, $subscription, $chargeDate) {
        $this->planName = $name;
        $this->price = $price;
        $this->subscription = $subscription;
        $this->chargeDate = $chargeDate;
    }

    public function getPlanName() {
        return $this->planName;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getSubscriptionPrice() {
        return $this->subscriptionPrice;
    }

    public function getChargeDate() {
        return $this->chargeDate;
    }

}
