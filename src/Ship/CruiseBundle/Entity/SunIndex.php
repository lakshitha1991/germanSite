<?php

namespace Ship\CruiseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SunIndex
 */
class SunIndex
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $sunindex;

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
     * Set sunindex
     *
     * @param string $sunindex
     * @return SunIndex
     */
    public function setSunindex($sunindex)
    {
        $this->sunindex = $sunindex;

        return $this;
    }

    /**
     * Get sunindex
     *
     * @return string 
     */
    public function getSunindex()
    {
        return $this->sunindex;
    }

    /**
     * Set cruiseLine
     *
     * @param \Ship\CruiseBundle\Entity\CruiseLine $cruiseLine
     * @return SunIndex
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
     * @return SunIndex
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
     * @return SunIndex
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
    /**
     * @var \Ship\CruiseBundle\Entity\CabinRecommendation
     */
    private $cabin;


    /**
     * Set cabin
     *
     * @param \Ship\CruiseBundle\Entity\CabinRecommendation $cabin
     * @return SunIndex
     */
    public function setCabin(\Ship\CruiseBundle\Entity\CabinRecommendation $cabin = null)
    {
        $this->cabin = $cabin;

        return $this;
    }

    /**
     * Get cabin
     *
     * @return \Ship\CruiseBundle\Entity\CabinRecommendation 
     */
    public function getCabin()
    {
        return $this->cabin;
    }
}
