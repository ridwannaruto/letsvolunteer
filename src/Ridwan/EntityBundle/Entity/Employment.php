<?php

namespace Ridwan\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employment
 */
class Employment
{
    /**
     * @var string
     */
    private $occupation;

    /**
     * @var string
     */
    private $organizationtype;

    /**
     * @var string
     */
    private $organization;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Ridwan\EntityBundle\Entity\Volunteerpersonal
     */
    private $user;


    /**
     * Set occupation
     *
     * @param string $occupation
     * @return Employment
     */
    public function setOccupation($occupation)
    {
        $this->occupation = $occupation;

        return $this;
    }

    /**
     * Get occupation
     *
     * @return string 
     */
    public function getOccupation()
    {
        return $this->occupation;
    }

    /**
     * Set organizationtype
     *
     * @param string $organizationtype
     * @return Employment
     */
    public function setOrganizationtype($organizationtype)
    {
        $this->organizationtype = $organizationtype;

        return $this;
    }

    /**
     * Get organizationtype
     *
     * @return string 
     */
    public function getOrganizationtype()
    {
        return $this->organizationtype;
    }

    /**
     * Set organization
     *
     * @param string $organization
     * @return Employment
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * Get organization
     *
     * @return string 
     */
    public function getOrganization()
    {
        return $this->organization;
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
     * @return Employment
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
