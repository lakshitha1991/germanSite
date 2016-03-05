<?php

namespace Ship\CruiseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ship
 */
class Ship
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $ship;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $route;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $cabin;

    /**
     * @var \Ship\CruiseBundle\Entity\CruiseLine
     */
    private $cruiseLine;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->route = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set ship
     *
     * @param string $ship
     * @return Ship
     */
    public function setShip($ship)
    {
        $this->ship = $ship;

        return $this;
    }

    /**
     * Get ship
     *
     * @return string 
     */
    public function getShip()
    {
        return $this->ship;
    }

    /**
     * Add route
     *
     * @param \Ship\CruiseBundle\Entity\Route $route
     * @return Ship
     */
    public function addRoute(\Ship\CruiseBundle\Entity\Route $route)
    {
        $this->route[] = $route;

        return $this;
    }

    /**
     * Remove route
     *
     * @param \Ship\CruiseBundle\Entity\Route $route
     */
    public function removeRoute(\Ship\CruiseBundle\Entity\Route $route)
    {
        $this->route->removeElement($route);
    }

    /**
     * Get route
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Add cabin
     *
     * @param \Ship\CruiseBundle\Entity\CabinRecommendation $cabin
     * @return Ship
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
     * @return Ship
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
}
