<?php

namespace Acuerdos\GestionBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Area
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Area
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="area", type="string", length=255, unique=true)
     */
    private $area;

    /**
     * @var Personas
     * @ORM\OneToMany(targetEntity="Persona", mappedBy="area")
     */
    private $personas;

    public function __construct(){
        $this->personas = new ArrayCollection();
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
     * Set area
     *
     * @param string $area
     * @return Area
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return string 
     */
    public function getArea()
    {
        return $this->area;
    }

    public function __toString(){
        return $this->getArea();
    }

    /**
     * Add personas
     *
     * @param \Acuerdos\GestionBundle\Entity\Persona $personas
     * @return Area
     */
    public function addPersona(\Acuerdos\GestionBundle\Entity\Persona $personas)
    {
        $this->personas[] = $personas;

        return $this;
    }

    /**
     * Remove personas
     *
     * @param \Acuerdos\GestionBundle\Entity\Persona $personas
     */
    public function removePersona(\Acuerdos\GestionBundle\Entity\Persona $personas)
    {
        $this->personas->removeElement($personas);
    }

    /**
     * Get personas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPersonas()
    {
        return $this->personas;
    }
}
