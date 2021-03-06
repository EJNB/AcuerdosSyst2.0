<?php

namespace Proxies\__CG__\Acuerdos\GestionBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Persona extends \Acuerdos\GestionBundle\Entity\Persona implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Persona' . "\0" . 'id', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Persona' . "\0" . 'username', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Persona' . "\0" . 'password', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Persona' . "\0" . 'descripcion', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Persona' . "\0" . 'cargo', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Persona' . "\0" . 'email', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Persona' . "\0" . 'isActive', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Persona' . "\0" . 'area', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Persona' . "\0" . 'rpPersona', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Persona' . "\0" . 'comentarios', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Persona' . "\0" . 'acuerdos', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Persona' . "\0" . 'roles');
        }

        return array('__isInitialized__', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Persona' . "\0" . 'id', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Persona' . "\0" . 'username', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Persona' . "\0" . 'password', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Persona' . "\0" . 'descripcion', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Persona' . "\0" . 'cargo', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Persona' . "\0" . 'email', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Persona' . "\0" . 'isActive', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Persona' . "\0" . 'area', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Persona' . "\0" . 'rpPersona', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Persona' . "\0" . 'comentarios', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Persona' . "\0" . 'acuerdos', '' . "\0" . 'Acuerdos\\GestionBundle\\Entity\\Persona' . "\0" . 'roles');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Persona $proxy) {
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
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', array($nombre));

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', array());

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setCargo($cargo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCargo', array($cargo));

        return parent::setCargo($cargo);
    }

    /**
     * {@inheritDoc}
     */
    public function getCargo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCargo', array());

        return parent::getCargo();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setArea(\Acuerdos\GestionBundle\Entity\Area $area = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArea', array($area));

        return parent::setArea($area);
    }

    /**
     * {@inheritDoc}
     */
    public function getArea()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArea', array());

        return parent::getArea();
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
    public function setDescripcion($descripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcion', array($descripcion));

        return parent::setDescripcion($descripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcion', array());

        return parent::getDescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function addComentario(\Acuerdos\GestionBundle\Entity\Comentario $comentarios)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addComentario', array($comentarios));

        return parent::addComentario($comentarios);
    }

    /**
     * {@inheritDoc}
     */
    public function removeComentario(\Acuerdos\GestionBundle\Entity\Comentario $comentarios)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeComentario', array($comentarios));

        return parent::removeComentario($comentarios);
    }

    /**
     * {@inheritDoc}
     */
    public function getComentarios()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComentarios', array());

        return parent::getComentarios();
    }

    /**
     * {@inheritDoc}
     */
    public function addRpPersona(\Acuerdos\GestionBundle\Entity\ReunionPersona $rpPersona)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRpPersona', array($rpPersona));

        return parent::addRpPersona($rpPersona);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRpPersona(\Acuerdos\GestionBundle\Entity\ReunionPersona $rpPersona)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRpPersona', array($rpPersona));

        return parent::removeRpPersona($rpPersona);
    }

    /**
     * {@inheritDoc}
     */
    public function getRpPersona()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRpPersona', array());

        return parent::getRpPersona();
    }

    /**
     * {@inheritDoc}
     */
    public function addTema(\Acuerdos\GestionBundle\Entity\Persona $temas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTema', array($temas));

        return parent::addTema($temas);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTema(\Acuerdos\GestionBundle\Entity\Persona $temas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTema', array($temas));

        return parent::removeTema($temas);
    }

    /**
     * {@inheritDoc}
     */
    public function getTemas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTemas', array());

        return parent::getTemas();
    }

    /**
     * {@inheritDoc}
     */
    public function addAcuerdo(\Acuerdos\GestionBundle\Entity\Acuerdo $acuerdos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAcuerdo', array($acuerdos));

        return parent::addAcuerdo($acuerdos);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAcuerdo(\Acuerdos\GestionBundle\Entity\Acuerdo $acuerdos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAcuerdo', array($acuerdos));

        return parent::removeAcuerdo($acuerdos);
    }

    /**
     * {@inheritDoc}
     */
    public function getAcuerdos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAcuerdos', array());

        return parent::getAcuerdos();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', array());

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', array());

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', array());

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', array());

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', array());

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function serialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'serialize', array());

        return parent::serialize();
    }

    /**
     * {@inheritDoc}
     */
    public function unserialize($serialized)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'unserialize', array($serialized));

        return parent::unserialize($serialized);
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', array($username));

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', array($password));

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonExpired', array());

        return parent::isAccountNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonLocked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonLocked', array());

        return parent::isAccountNonLocked();
    }

    /**
     * {@inheritDoc}
     */
    public function isCredentialsNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCredentialsNonExpired', array());

        return parent::isCredentialsNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEnabled', array());

        return parent::isEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsActive($isActive)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsActive', array($isActive));

        return parent::setIsActive($isActive);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsActive', array());

        return parent::getIsActive();
    }

    /**
     * {@inheritDoc}
     */
    public function addRole(\Acuerdos\SeguridadBundle\Entity\Role $roles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRole', array($roles));

        return parent::addRole($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRole(\Acuerdos\SeguridadBundle\Entity\Role $roles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRole', array($roles));

        return parent::removeRole($roles);
    }

}
