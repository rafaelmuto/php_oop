<?php
class Equipment implements Patrimony {
    private $patrimonyId;
    private $purchaseDate;
    private $equipamentType;
    private $equipamentName;
    private $lastMaintenanceDate;

    function __constructor($patrimonyId, $purchaseDate, $equipamentType, $equipamentName) {
        $this->patrimonyId = $patrimonyId;
        $this->purchaseDate = $purchaseDate;
        $this->equipamentType = $equipamentType;
        $this->equipamentName = $equipamentName;
        $this->lastMaitenanceDate = $purchaseDate;
    }

    public function getPatrimonyId() {
        return $this->patrimonyId;
    }

    public function getPurchaseDate() {
        return $this->purchaseDate;
    }

    public function getLastMaintenanceDate() {
        return $this->lastMaintenanceDate;
    }

    public function doMaintenance($date) {
        $this->lastMaintenanceDate = $date;
    }

}