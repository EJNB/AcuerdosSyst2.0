<?php

namespace Acuerdos\GestionBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Acuerdo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Acuerdo
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
     * @ORM\Column(name="id_acuerdo", type="string", length=10, nullable=false)
     */
    private $idAcuerdo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creacion", type="date", nullable=false)
     */
    private $fechaCreacion;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_cumplimiento_indicada", type="date", nullable=false)
     */
    private $fechaCumplimientoIndicada;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=20)
     */
    private $estado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_cumplimiento_real", type="date", nullable=true)
     */
    private $fechaCumplimientoReal;
    /**
     * @ORM\ManyToOne(targetEntity="Reunion", inversedBy="acuerdos")
     * @ORM\JoinColumn(name="reunion_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $reunion;

    /**
     * @ORM\ManyToMany(targetEntity="Persona", inversedBy="acuerdos")
     * @ORM\JoinTable(name="acuerdo_persona")
     **/
    private $personas;


//    /**
//     * @ORM\OneToMany(targetEntity="AcuerdoPersona", mappedBy="idAcuerdo", cascade={"persist"})
//     */
//    private $apAcuerdo;

    /**
     * @ORM\ManyToOne(targetEntity="Tema", inversedBy="acuerdos")
     * @ORM\JoinColumn(name="tema_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $tema;

    /**
     * Acuerdo constructor
     */
    public function __construct()
    {
        $this->personas = new ArrayCollection();
//        $this->apAcuerdo = new ArrayCollection();
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
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return Acuerdo
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime 
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Acuerdo
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
     * Set fechaCumplimientoIndicada
     *
     * @param \DateTime $fechaCumplimientoIndicada
     * @return Acuerdo
     */
    public function setFechaCumplimientoIndicada($fechaCumplimientoIndicada)
    {
        $this->fechaCumplimientoIndicada = $fechaCumplimientoIndicada;

        return $this;
    }

    /**
     * Get fechaCumplimientoIndicada
     *
     * @return \DateTime 
     */
    public function getFechaCumplimientoIndicada()
    {
        return $this->fechaCumplimientoIndicada;
    }

    /**
     * Set fechaCumplimientoReal
     *
     * @param \DateTime $fechaCumplimientoReal
     * @return Acuerdo
     */
    public function setFechaCumplimientoReal($fechaCumplimientoReal)
    {
        $this->fechaCumplimientoReal = $fechaCumplimientoReal;

        return $this;
    }

    /**
     * Get fechaCumplimientoReal
     *
     * @return \DateTime 
     */
    public function getFechaCumplimientoReal()
    {
        return $this->fechaCumplimientoReal;
    }

//    /**
//     * Set accionesSeguimiento
//     *
//     * @param string $accionesSeguimiento
//     * @return Acuerdo
//     */
//    public function setAccionesSeguimiento($accionesSeguimiento)
//    {
//        $this->accionesSeguimiento = $accionesSeguimiento;
//
//        return $this;
//    }
//
//    /**
//     * Get accionesSeguimiento
//     *
//     * @return string
//     */
//    public function getAccionesSeguimiento()
//    {
//        return $this->accionesSeguimiento;
//    }

//    /**
//     * Set observaciones
//     *
//     * @param string $observaciones
//     * @return Acuerdo
//     */
//    public function setObservaciones($observaciones)
//    {
//        $this->observaciones = $observaciones;
//
//        return $this;
//    }
//
//    /**
//     * Get observaciones
//     *
//     * @return string
//     */
//    public function getObservaciones()
//    {
//        return $this->observaciones;
//    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Acuerdo
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }
//
//    /**
//     * Get apAcuerdo
//     *
//     * @return \Doctrine\Common\Collections\Collection
//     */
//    public function getApAcuerdo()
//    {
//        return $this->apAcuerdo;
//    }

    /**
     * Set reunion
     *
     * @param \Acuerdos\GestionBundle\Entity\Reunion $reunion
     * @return Acuerdo
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

//    /**
//     * Add apAcuerdo
//     *
//     * @param \Acuerdos\GestionBundle\Entity\AcuerdoPersona $apAcuerdo
//     * @return Acuerdo
//     */
//    public function addApAcuerdo(\Acuerdos\GestionBundle\Entity\AcuerdoPersona $apAcuerdo)
//    {
//        $this->apAcuerdo[] = $apAcuerdo;
//
//        return $this;
//    }
//
//    /**
//     * Remove apAcuerdo
//     *
//     * @param \Acuerdos\GestionBundle\Entity\AcuerdoPersona $apAcuerdo
//     */
//    public function removeApAcuerdo(\Acuerdos\GestionBundle\Entity\AcuerdoPersona $apAcuerdo)
//    {
//        $this->apAcuerdo->removeElement($apAcuerdo);
//    }

    /**
     * Set idAcuerdo
     *
     * @param string $idAcuerdo
     * @return Acuerdo
     */
    public function setIdAcuerdo($idAcuerdo)
    {
        $this->idAcuerdo = $idAcuerdo;

        return $this;
    }

    /**
     * Get idAcuerdo
     *
     * @return string 
     */
    public function getIdAcuerdo()
    {
        return $this->idAcuerdo;
    }

    /**
     * Set tema
     *
     * @param \Acuerdos\GestionBundle\Entity\Tema $tema
     * @return Acuerdo
     */
    public function setTema(\Acuerdos\GestionBundle\Entity\Tema $tema = null)
    {
        $this->tema = $tema;

        return $this;
    }

    /**
     * Get tema
     *
     * @return \Acuerdos\GestionBundle\Entity\Tema 
     */
    public function getTema()
    {
        return $this->tema;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->getIdAcuerdo();
    }

    /**
     * Add personas
     *
     * @param \Acuerdos\GestionBundle\Entity\Persona $personas
     * @return Acuerdo
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
