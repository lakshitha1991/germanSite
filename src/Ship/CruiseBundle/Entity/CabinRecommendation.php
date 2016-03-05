<?php

namespace Ship\CruiseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CabinRecommendation
 */
class CabinRecommendation
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $cabinRecommendation;

    /**
     * @var \Ship\CruiseBundle\Entity\CruiseLine
     */
    private $cruiseLine;

    /**
     * @var \Ship\CruiseBundle\Entity\Ship
     */
    private $ship;

    /**
     * @var \Ship\CruiseBundle\Entity\Route
     */
    private $route;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cabinRecommendation
     *
     * @param string $cabinRecommendation
     * @return CabinRecommendation
     */
    public function setCabinRecommendation($cabinRecommendation)
    {
        $this->cabinRecommendation = $cabinRecommendation;

        return $this;
    }

    /**
     * Get cabinRecommendation
     *
     * @return string 
     */
    public function getCabinRecommendation()
    {
        return $this->cabinRecommendation;
    }

    /**
     * Set cruiseLine
     *
     * @param \Ship\CruiseBundle\Entity\CruiseLine $cruiseLine
     * @return CabinRecommendation
     */
    public function setCruiseLine(\Ship\CruiseBundle\Entity\CruiseLine $cruiseLine = null)
    {
        $this->cruiseLine = $cruiseLine;

        return $this;
    }

    /**
     * Get cruiseLine
     *
     * @return \Ship\CruiseBundle\Entity\CruiseLine 
     */
    public function getCruiseLine()
    {
        return $this->cruiseLine;
    }

    /**
     * Set ship
     *
     * @param \Ship\CruiseBundle\Entity\Ship $ship
     * @return CabinRecommendation
     */
    public function setShip(\Ship\CruiseBundle\Entity\Ship $ship = null)
    {
        $this->ship = $ship;

        return $this;
    }

    /**
     * Get ship
     *
     * @return \Ship\CruiseBundle\Entity\Ship 
     */
    public function getShip()
    {
        return $this->ship;
    }

    /**
     * Set route
     *
     * @param \Ship\CruiseBundle\Entity\Route $route
     * @return CabinRecommendation
     */
    public function setRoute(\Ship\CruiseBundle\Entity\Route $route = null)
    {
        $this->route = $route;

        return $this;
    }

    /**
     * Get route
     *
     * @return \Ship\CruiseBundle\Entity\Route 
     */
    public function getRoute()
    {
        return $this->route;
    }
}
