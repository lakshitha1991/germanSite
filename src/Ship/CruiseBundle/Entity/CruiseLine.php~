<?php

namespace Ship\CruiseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CruiseLine
 */
class CruiseLine
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $cruiseLine;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ship;

    /**
     * @var \Doctrine\Common\Collections\Collection
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
     * Constructor
     */
    public function __construct()
    {
        $this->ship = new \Doctrine\Common\Collections\ArrayCollection();
        $this->route = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set cruiseLine
     *
     * @param string $cruiseLine
     * @return CruiseLine
     */
    public function setCruiseLine($cruiseLine)
    {
        $this->cruiseLine = $cruiseLine;

        return $this;
    }

    /**
     * Get cruiseLine
     *
     * @return string 
     */
    public function getCruiseLine()
    {
        return $this->cruiseLine;
    }

    /**
     * Add ship
     *
     * @param \Ship\CruiseBundle\Entity\Ship $ship
     * @return CruiseLine
     */
    public function addShip(\Ship\CruiseBundle\Entity\Ship $ship)
    {
        $this->ship[] = $ship;

        return $this;
    }

    /**
     * Remove ship
     *
     * @param \Ship\CruiseBundle\Entity\Ship $ship
     */
    public function removeShip(\Ship\CruiseBundle\Entity\Ship $ship)
    {
        $this->ship->removeElement($ship);
    }

    /**
     * Get ship
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getShip()
    {
        return $this->ship;
    }

    /**
     * Add route
     *
     * @param \Ship\CruiseBundle\Entity\Route $route
     * @return CruiseLine
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
     * Add sunIndex
     *
     * @param \Ship\CruiseBundle\Entity\SunIndex $sunIndex
     * @return CruiseLine
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
     * @return CruiseLine
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
}
