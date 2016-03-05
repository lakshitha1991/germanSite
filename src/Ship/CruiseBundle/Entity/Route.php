<?php

namespace Ship\CruiseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Route
 */
class Route
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $route;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $sunIndex;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $cabin;

    /**
     * @var \Ship\CruiseBundle\Entity\CruiseLine
     */
    private $cruiseLine;

    /**
     * @var \Ship\CruiseBundle\Entity\Ship
     */
    private $ship;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sunIndex = new \Doctrine\Common\Collections\ArrayCollection();
        $this->cabin = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set route
     *
     * @param string $route
     * @return Route
     */
    public function setRoute($route)
    {
        $this->route = $route;

        return $this;
    }

    /**
     * Get route
     *
     * @return string 
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Add sunIndex
     *
     * @param \Ship\CruiseBundle\Entity\SunIndex $sunIndex
     * @return Route
     */
    public function addSunIndex(\Ship\CruiseBundle\Entity\SunIndex $sunIndex)
    {
        $this->sunIndex[] = $sunIndex;

        return $this;
    }

    /**
     * Remove sunIndex
     *
     * @param \Ship\CruiseBundle\Entity\SunIndex $sunIndex
     */
    public function removeSunIndex(\Ship\CruiseBundle\Entity\SunIndex $sunIndex)
    {
        $this->sunIndex->removeElement($sunIndex);
    }

    /**
     * Get sunIndex
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSunIndex()
    {
        return $this->sunIndex;
    }

    /**
     * Add cabin
     *
     * @param \Ship\CruiseBundle\Entity\CabinRecommendation $cabin
     * @return Route
     */
    public function addCabin(\Ship\CruiseBundle\Entity\CabinRecommendation $cabin)
    {
        $this->cabin[] = $cabin;

        return $this;
    }

    /**
     * Remove cabin
     *
     * @param \Ship\CruiseBundle\Entity\CabinRecommendation $cabin
     */
    public function removeCabin(\Ship\CruiseBundle\Entity\CabinRecommendation $cabin)
    {
        $this->cabin->removeElement($cabin);
    }

    /**
     * Get cabin
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCabin()
    {
        return $this->cabin;
    }

    /**
     * Set cruiseLine
     *
     * @param \Ship\CruiseBundle\Entity\CruiseLine $cruiseLine
     * @return Route
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
     * @return Route
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
}
