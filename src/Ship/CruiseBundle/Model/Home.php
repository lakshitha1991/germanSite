<?php

namespace Ship\CruiseBundle\Model;

/**
 * Description of Home
 *
 * @author Emily
 */
class Home {
    
    private $cruiseLine;    
    private $ship;    
    private $route;
    
    public function getCruiseLine() {
        return $this->cruiseLine;
    }

    public function setCruiseLine($cruiseLine) {
        $this->cruiseLine = $cruiseLine;
        return $this;
    }

    public function getShip() {
        return $this->ship;
    }

    public function setShip($ship) {
        $this->ship = $ship;
        return $this;
    }
    
    public function getRoute() {
        return $this->route;
    }

    public function setRoute($route) {
        $this->route = $route;
        return $this;
    }
}
