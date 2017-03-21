<?php

namespace Acuerdos\GestionBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Procedencia
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Procedencia
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
     * @ORM\Column(name="procedencia", type="string", length=200)
     */
    private $procedencia;

    /**
     * @var string
     *
     * @ORM\Column(name="prefijo", type="string", length=5)
     */
    private $prefijo;

    /**
     * @var reuniones
     * @ORM\OneToMany(targetEntity="Reunion", mappedBy="procedencia", cascade={"persist"})
     */
    private $reuniones;

    public function __construct(){
        $this->reuniones = new ArrayCollection();
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
     * Set procedencia
     *
     * @param string $procedencia
     * @return Procedencia
     */
    public function setProcedencia($procedencia)
    {
        $this->procedencia = $procedencia;

        return $this;
    }

    /**
     * Get procedencia
     *
     * @return string 
     */
    public function getProcedencia()
    {
        return $this->procedencia;
    }

    /**
     * Set prefijo
     *
     * @param string $prefijo
     * @return Procedencia
     */
    public function setPrefijo($prefijo)
    {
        $this->prefijo = $prefijo;

        return $this;
    }

    /**
     * Get prefijo
     *
     * @return string 
     */
    public function getPrefijo()
    {
        return $this->prefijo;
    }

    /**
     * Add reuniones
     *
     * @param \Acuerdos\GestionBundle\Entity\Reunion $reuniones
     * @return Procedencia
     */
    public function addReunione(\Acuerdos\GestionBundle\Entity\Reunion $reuniones)
    {
        $this->reuniones[] = $reuniones;

        return $this;
    }

    /**
     * Remove reuniones
     *
     * @param \Acuerdos\GestionBundle\Entity\Reunion $reuniones
     */
    public function removeReunione(\Acuerdos\GestionBundle\Entity\Reunion $reuniones)
    {
        $this->reuniones->removeElement($reuniones);
    }

    /**
     * Get reuniones
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReuniones()
    {
        return $this->reuniones;
    }

    public function __toString(){
      return $this->getProcedencia();
    }
}
