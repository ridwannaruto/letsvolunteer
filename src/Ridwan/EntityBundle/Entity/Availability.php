<?php

namespace Ridwan\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Availability
 */
class Availability
{
    /**
     * @var text
     */
    private $days;

    /**
     * @var text
     */
    private $duration;

    /**
     * @var text
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
     * @param text $days
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
     * @return text
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * Set duration
     *
     * @param text $duration
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
     * @return text
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set preferredtime
     *
     * @param text $preferredtime
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
     * @return text
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
