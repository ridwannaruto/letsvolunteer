<?php

namespace Proxies\__CG__\Ridwan\EntityBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Profile extends \Ridwan\EntityBundle\Entity\Profile implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Profile' . "\0" . 'intro', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Profile' . "\0" . 'reason', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Profile' . "\0" . 'experience', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Profile' . "\0" . 'health', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Profile' . "\0" . 'drivingLicense', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Profile' . "\0" . 'arrested', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Profile' . "\0" . 'aggregatedrating', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Profile' . "\0" . 'totalweight', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Profile' . "\0" . 'id', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Profile' . "\0" . 'user');
        }

        return array('__isInitialized__', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Profile' . "\0" . 'intro', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Profile' . "\0" . 'reason', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Profile' . "\0" . 'experience', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Profile' . "\0" . 'health', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Profile' . "\0" . 'drivingLicense', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Profile' . "\0" . 'arrested', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Profile' . "\0" . 'aggregatedrating', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Profile' . "\0" . 'totalweight', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Profile' . "\0" . 'id', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Profile' . "\0" . 'user');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Profile $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setIntro($intro)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIntro', array($intro));

        return parent::setIntro($intro);
    }

    /**
     * {@inheritDoc}
     */
    public function getIntro()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIntro', array());

        return parent::getIntro();
    }

    /**
     * {@inheritDoc}
     */
    public function setReason($reason)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReason', array($reason));

        return parent::setReason($reason);
    }

    /**
     * {@inheritDoc}
     */
    public function getReason()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReason', array());

        return parent::getReason();
    }

    /**
     * {@inheritDoc}
     */
    public function setExperience($experience)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExperience', array($experience));

        return parent::setExperience($experience);
    }

    /**
     * {@inheritDoc}
     */
    public function getExperience()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExperience', array());

        return parent::getExperience();
    }

    /**
     * {@inheritDoc}
     */
    public function setHealth($health)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHealth', array($health));

        return parent::setHealth($health);
    }

    /**
     * {@inheritDoc}
     */
    public function getHealth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHealth', array());

        return parent::getHealth();
    }

    /**
     * {@inheritDoc}
     */
    public function setDrivingLicense($drivingLicense)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDrivingLicense', array($drivingLicense));

        return parent::setDrivingLicense($drivingLicense);
    }

    /**
     * {@inheritDoc}
     */
    public function getDrivingLicense()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDrivingLicense', array());

        return parent::getDrivingLicense();
    }

    /**
     * {@inheritDoc}
     */
    public function setArrested($arrested)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArrested', array($arrested));

        return parent::setArrested($arrested);
    }

    /**
     * {@inheritDoc}
     */
    public function getArrested()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArrested', array());

        return parent::getArrested();
    }

    /**
     * {@inheritDoc}
     */
    public function setAggregatedrating($aggregatedrating)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAggregatedrating', array($aggregatedrating));

        return parent::setAggregatedrating($aggregatedrating);
    }

    /**
     * {@inheritDoc}
     */
    public function getAggregatedrating()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAggregatedrating', array());

        return parent::getAggregatedrating();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotalweight($totalweight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotalweight', array($totalweight));

        return parent::setTotalweight($totalweight);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalweight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalweight', array());

        return parent::getTotalweight();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\Ridwan\EntityBundle\Entity\VolunteerPersonal $user = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', array($user));

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', array());

        return parent::getUser();
    }

}
