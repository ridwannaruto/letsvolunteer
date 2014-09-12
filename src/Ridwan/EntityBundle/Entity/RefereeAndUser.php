<?php

namespace Ridwan\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * RefereeAndUser
 */
class RefereeAndUser
{
    /**
     * @var String
     */
    private $referees;

    /**
     * @var integer
     */
    private $id;



    /**
     * @var \Ridwan\EntityBundle\Entity\Authentication
     */
    private $user;


    public function __construct()
    {
        $this->referees = new ArrayCollection();
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
     * Get referees
     *
     * @return string
     */
    public function getReferees()
    {
        return $this->referees;
    }




    /**
     * Set user
     *
     * @param \Ridwan\EntityBundle\Entity\Authentication $user
     * @return RefereeAndUser
     */
    public function setUser(\Ridwan\EntityBundle\Entity\Authentication $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Ridwan\EntityBundle\Entity\Authentication
     */
    public function getUser()
    {
        return $this->user;
    }
}
