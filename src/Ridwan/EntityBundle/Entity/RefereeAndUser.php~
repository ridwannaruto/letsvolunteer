<?php

namespace Ridwan\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefereeAndUser
 */
class RefereeAndUser
{
    /**
     * @var string
     */
    private $relationship;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Ridwan\EntityBundle\Entity\Referees
     */
    private $referee;

    /**
     * @var \Ridwan\EntityBundle\Entity\VolunteerPersonal
     */
    private $user;


    /**
     * Set relationship
     *
     * @param string $relationship
     * @return RefereeAndUser
     */
    public function setRelationship($relationship)
    {
        $this->relationship = $relationship;

        return $this;
    }

    /**
     * Get relationship
     *
     * @return string 
     */
    public function getRelationship()
    {
        return $this->relationship;
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
     * Set referee
     *
     * @param \Ridwan\EntityBundle\Entity\Referees $referee
     * @return RefereeAndUser
     */
    public function setReferee(\Ridwan\EntityBundle\Entity\Referees $referee = null)
    {
        $this->referee = $referee;

        return $this;
    }

    /**
     * Get referee
     *
     * @return \Ridwan\EntityBundle\Entity\Referees 
     */
    public function getReferee()
    {
        return $this->referee;
    }

    /**
     * Set user
     *
     * @param \Ridwan\EntityBundle\Entity\VolunteerPersonal $user
     * @return RefereeAndUser
     */
    public function setUser(\Ridwan\EntityBundle\Entity\VolunteerPersonal $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Ridwan\EntityBundle\Entity\VolunteerPersonal 
     */
    public function getUser()
    {
        return $this->user;
    }
}
