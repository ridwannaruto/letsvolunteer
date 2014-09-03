<?php

namespace Ridwan\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefereeAndUser
 */
class RefereeAndUser
{
    /**
     * @var \Ridwan\EntityBundle\Entity\Referees
     */
    private $referee2;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Ridwan\EntityBundle\Entity\Referees
     */
    private $referee1;

    /**
     * @var \Ridwan\EntityBundle\Entity\Authentication
     */
    private $user;



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
     * Set referee1
     *
     * @param \Ridwan\EntityBundle\Entity\Referees $referee1
     * @return RefereeAndUser
     */
    public function setReferee1(\Ridwan\EntityBundle\Entity\Referees $referee1 = null)
    {
        $this->referee1 = $referee1;

        return $this;
    }

    /**
     * Get referee1
     *
     * @return \Ridwan\EntityBundle\Entity\Referees 
     */
    public function getReferee1()
    {
        return $this->referee1;
    }

    /**
     * Set referee2
     *
     * @param \Ridwan\EntityBundle\Entity\Referees $referee2
     * @return RefereeAndUser
     */
    public function setReferee2(\Ridwan\EntityBundle\Entity\Referees $referee2 = null)
    {
        $this->referee2 = $referee2;

        return $this;
    }

    /**
     * Get referee2
     *
     * @return \Ridwan\EntityBundle\Entity\Referees
     */
    public function getReferee2()
    {
        return $this->referee2;
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
