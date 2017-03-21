<?php

namespace Acuerdos\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Acuerdos\GestionBundle\Entity\Procedencia;

/**
 * Reunion
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Reunion
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
     * @ORM\Column(name="idReunion", type="string", nullable=false)
     */
    private $idReunion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaCreacion", type="datetime")
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaRealizacion", type="datetime")
     */
    private $fechaRealizacion;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar", type="string", length=100)
     */
    private $lugar;

//    /**
//     * @var integer
//     *
//     * @ORM\Column(name="nivel", type="integer")
//     */
//    private $nivel;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer")
     */
    private $tipo;

    /**
     * @ORM\ManyToOne(targetEntity="Procedencia", inversedBy="reuniones")
     * @ORM\JoinColumn(name="procedencia_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $procedencia;

    /**
     * @ORM\OneToMany(targetEntity="ReunionPersona", mappedBy="idReunion", cascade={"persist"})
     */
    private $rpReunion;

    /**
     * @ORM\OneToMany(targetEntity="Tema", mappedBy="reunion")
     */
    private $temas;

    /**
     * @ORM\OneToOne(targetEntity="Acta", mappedBy="reunion")
     **/
    private $acta;

    /**
     * @ORM\OneToMany(targetEntity="Acuerdo", mappedBy="reunion", cascade={"persist"})
     */
    private $acuerdos;

    public function __construct(){
        $this->rpReunion =new ArrayCollection();
        $this->temas = new ArrayCollection();
        $this->acuerdos = new ArrayCollection();
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
     * @return Reunion
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
     * Set fechaRealizacion
     *
     * @param \DateTime $fechaRealizacion
     * @return Reunion
     */
    public function setFechaRealizacion($fechaRealizacion)
    {
        $this->fechaRealizacion = $fechaRealizacion;

        return $this;
    }

    /**
     * Get fechaRealizacion
     *
     * @return \DateTime 
     */
    public function getFechaRealizacion()
    {
        return $this->fechaRealizacion;
    }

    /**
     * Set lugar
     *
     * @param string $lugar
     * @return Reunion
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;

        return $this;
    }

    /**
     * Get lugar
     *
     * @return string 
     */
    public function getLugar()
    {
        return $this->lugar;
    }

//    /**
//     * Set nivel
//     *
//     * @param integer $nivel
//     * @return Reunion
//     */
//    public function setNivel($nivel)
//    {
//        $this->nivel = $nivel;
//
//        return $this;
//    }

//    /**
//     * Get nivel
//     *
//     * @return integer
//     */
//    public function getNivel()
//    {
//        return $this->nivel;
//    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return Reunion
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set procedencia
     *
     * @param \Acuerdos\GestionBundle\Entity\Procedencia $procedencia
     * @return Reunion
     */
    public function setProcedencia(\Acuerdos\GestionBundle\Entity\Procedencia $procedencia = null)
    {
        $this->procedencia = $procedencia;

        return $this;
    }

    /**
     * Get procedencia
     *
     * @return \Acuerdos\GestionBundle\Entity\Procedencia 
     */
    public function getProcedencia()
    {
        return $this->procedencia;
    }

    /**
     * Add rpReunion
     *
     * @param \Acuerdos\GestionBundle\Entity\ReunionPersona $rpReunion
     * @return Reunion
     */
    public function addRpReunion(\Acuerdos\GestionBundle\Entity\ReunionPersona $rpReunion)
    {
        $this->rpReunion[] = $rpReunion;

        return $this;
    }

    /**
     * Remove rpReunion
     *
     * @param \Acuerdos\GestionBundle\Entity\ReunionPersona $rpReunion
     */
    public function removeRpReunion(\Acuerdos\GestionBundle\Entity\ReunionPersona $rpReunion)
    {
        $this->rpReunion->removeElement($rpReunion);
    }

    /**
     * Get rpReunion
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRpReunion()
    {
        return $this->rpReunion;
    }

    /**
     * Add temas
     *
     * @param \Acuerdos\GestionBundle\Entity\Tema $temas
     * @return Reunion
     */
    public function addTema(\Acuerdos\GestionBundle\Entity\Tema $temas)
    {
        $this->temas[] = $temas;

        return $this;
    }

    /**
     * Remove temas
     *
     * @param \Acuerdos\GestionBundle\Entity\Tema $temas
     */
    public function removeTema(\Acuerdos\GestionBundle\Entity\Tema $temas)
    {
        $this->temas->removeElement($temas);
    }

    /**
     * Get temas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTemas()
    {
        return $this->temas;
    }

    /**
     * Add acuerdos
     *
     * @param \Acuerdos\GestionBundle\Entity\Acuerdo $acuerdos
     * @return Reunion
     */
    public function addAcuerdo(\Acuerdos\GestionBundle\Entity\Acuerdo $acuerdos)
    {
        $this->acuerdos[] = $acuerdos;

        return $this;
    }

    /**
     * Remove acuerdos
     *
     * @param \Acuerdos\GestionBundle\Entity\Acuerdo $acuerdos
     */
    public function removeAcuerdo(\Acuerdos\GestionBundle\Entity\Acuerdo $acuerdos)
    {
        $this->acuerdos->removeElement($acuerdos);
    }

    /**
     * Get acuerdos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAcuerdos()
    {
        return $this->acuerdos;
    }/**
     * Set acta
     *
     * @param \Acuerdos\GestionBundle\Entity\Acta $acta
     * @return Reunion
     */
    public function setActa(\Acuerdos\GestionBundle\Entity\Acta $acta = null)
    {
        $this->acta = $acta;

        return $this;
    }

    /**
     * Get acta
     *
     * @return \Acuerdos\GestionBundle\Entity\Acta 
     */
    public function getActa()
    {
        return $this->acta;
    }

    /**
     * Set idReunion
     *
     * @param string $idReunion
     * @return Reunion
     */
    public function setIdReunion($idReunion)
    {
        $this->idReunion = $idReunion;

        return $this;
    }

    /**
     * Get idReunion
     *
     * @return string 
     */
    public function getIdReunion()
    {
        return $this->idReunion;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->getIdReunion();
    }
}
