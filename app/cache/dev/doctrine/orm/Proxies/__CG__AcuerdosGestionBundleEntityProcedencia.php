<?php

namespace Proxies\__CG__\Acuerdos\GestionBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Procedencia extends \Acuerdos\GestionBundle\Entity\Procedencia implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Procedencia' . "\0" . 'id', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Procedencia' . "\0" . 'procedencia', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Procedencia' . "\0" . 'prefijo', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Procedencia' . "\0" . 'reuniones');
        }

        return array('__isInitialized__', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Procedencia' . "\0" . 'id', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Procedencia' . "\0" . 'procedencia', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Procedencia' . "\0" . 'prefijo', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Procedencia' . "\0" . 'reuniones');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Procedencia $proxy) {
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
    public function setProcedencia($procedencia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProcedencia', array($procedencia));

        return parent::setProcedencia($procedencia);
    }

    /**
     * {@inheritDoc}
     */
    public function getProcedencia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProcedencia', array());

        return parent::getProcedencia();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrefijo($prefijo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrefijo', array($prefijo));

        return parent::setPrefijo($prefijo);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrefijo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrefijo', array());

        return parent::getPrefijo();
    }

    /**
     * {@inheritDoc}
     */
    public function addReunione(\Acuerdos\GestionBundle\Entity\Reunion $reuniones)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addReunione', array($reuniones));

        return parent::addReunione($reuniones);
    }

    /**
     * {@inheritDoc}
     */
    public function removeReunione(\Acuerdos\GestionBundle\Entity\Reunion $reuniones)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeReunione', array($reuniones));

        return parent::removeReunione($reuniones);
    }

    /**
     * {@inheritDoc}
     */
    public function getReuniones()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReuniones', array());

        return parent::getReuniones();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}
