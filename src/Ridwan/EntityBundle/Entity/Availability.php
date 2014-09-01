<?php

namespace Ridwan\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Availability
 */
class Availability
{
    /**
     * @var string
     */
    private $days;

    /**
     * @var string
     */
    private $duration;

    /**
     * @var string
     */
    private $preferredtime;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Ridwan\EntityBundle\Entity\Volunteerpersonal
     */
    private $user;


    /**
     * Set days
     *
     * @param string $days
     * @return Availability
     */
    public function setDays($days)
    {
        $this->days = $days;

        return $this;
    }

    /**
     * Get days
     *
     * @return string 
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * Set duration
     *
     * @param string $duration
     * @return Availability
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return string 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set preferredtime
     *
     * @param string $preferredtime
     * @return Availability
     */
    public function setPreferredtime($preferredtime)
    {
        $this->preferredtime = $preferredtime;

        return $this;
    }

    /**
     * Get preferredtime
     *
     * @return string 
     */
    public function getPreferredtime()
    {
        return $this->preferredtime;
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
     * Set user
     *
     * @param \Ridwan\EntityBundle\Entity\Volunteerpersonal $user
     * @return Availability
     */
    public function setUser(\Ridwan\EntityBundle\Entity\Volunteerpersonal $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Ridwan\EntityBundle\Entity\Volunteerpersonal 
     */
    public function getUser()
    {
        return $this->user;
    }
}
