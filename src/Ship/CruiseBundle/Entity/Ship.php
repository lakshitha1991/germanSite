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
}
