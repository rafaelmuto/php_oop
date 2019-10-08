<?php
interface Patrimony {
    public function getPatrimonyId();
    public function getPurchaseDate();
    public function getLastMaintenanceDate();
    public function doMaintenance($date);
}