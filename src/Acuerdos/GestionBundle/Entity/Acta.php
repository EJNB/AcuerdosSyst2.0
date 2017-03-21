<?php

namespace Acuerdos\GestionBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Acta
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Acta
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
     * @var integer
     * @ORM\Column(name="numero", type="string", length=10)
     */
    private $numero;

    /**
     * este el numero del No acta + descripcion de la reunion
     * @ORM\Column(name="descripcion", type="string", length=60)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaInicio", type="time")
     */
    private $horaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaFin", type="time")
     */
    private $horaFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="aprobada", type="string", length=50)
     */
    private $aprobada;

    /**
     * @var string
     *
     * @ORM\Column(name="revisada", type="string", length=50)
     */
    private $revisada;

    /**
     * @ORM\OneToOne(targetEntity="Reunion", inversedBy="acta")
     * @ORM\JoinColumn(name="reunion_id", referencedColumnName="id", onDelete="CASCADE")
     **/
    private $reunion;
//
//    /**
//     * @ORM\
//     */

    /**
     * @ORM\OneToMany(targetEntity="Documento", mappedBy="acta")
     */
    private $documentos;

    public function __construct(){
        $this->documentos = new ArrayCollection();
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
     * Set horaInicio
     *
     * @param \DateTime $horaInicio
     * @return Acta
     */
    public function setHoraInicio($horaInicio)
    {
        $this->horaInicio = $horaInicio;

        return $this;
    }

    /**
     * Get horaInicio
     *
     * @return \DateTime 
     */
    public function getHoraInicio()
    {
        return $this->horaInicio;
    }

    /**
     * Set horaFin
     *
     * @param \DateTime $horaFin
     * @return Acta
     */
    public function setHoraFin($horaFin)
    {
        $this->horaFin = $horaFin;

        return $this;
    }

    /**
     * Get horaFin
     *
     * @return \DateTime 
     */
    public function getHoraFin()
    {
        return $this->horaFin;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Acta
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set aprobada
     *
     * @param string $aprobada
     * @return Acta
     */
    public function setAprobada($aprobada)
    {
        $this->aprobada = $aprobada;

        return $this;
    }

    /**
     * Get aprobada
     *
     * @return string 
     */
    public function getAprobada()
    {
        return $this->aprobada;
    }

    /**
     * Set revisada
     *
     * @param string $revisada
     * @return Acta
     */
    public function setRevisada($revisada)
    {
        $this->revisada = $revisada;

        return $this;
    }

    /**
     * Get revisada
     *
     * @return string 
     */
    public function getRevisada()
    {
        return $this->revisada;
    }

    /**
     * Set reunion
     *
     * @param \Acuerdos\GestionBundle\Entity\Reunion $reunion
     * @return Acta
     */
    public function setReunion(\Acuerdos\GestionBundle\Entity\Reunion $reunion = null)
    {
        $this->reunion = $reunion;

        return $this;
    }

    /**
     * Get reunion
     *
     * @return \Acuerdos\GestionBundle\Entity\Reunion 
     */
    public function getReunion()
    {
        return $this->reunion;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     * @return Acta
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Acta
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Add documentos
     *
     * @param \Acuerdos\GestionBundle\Entity\Documento $documentos
     * @return Acta
     */
    public function addDocumento(\Acuerdos\GestionBundle\Entity\Documento $documentos)
    {
        $this->documentos[] = $documentos;

        return $this;
    }

    /**
     * Remove documentos
     *
     * @param \Acuerdos\GestionBundle\Entity\Documento $documentos
     */
    public function removeDocumento(\Acuerdos\GestionBundle\Entity\Documento $documentos)
    {
        $this->documentos->removeElement($documentos);
    }

    /**
     * Get documentos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDocumentos()
    {
        return $this->documentos;
    }
}
