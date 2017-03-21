<?php

namespace Acuerdos\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReunionPersona
 *
 * @ORM\Table(name="reunion_persona", indexes={@ORM\Index(name="id_persona", columns={"id_persona"}), @ORM\Index(name="id_reunion", columns={"id_reunion"})})
 * @ORM\Entity(repositoryClass="ReunionPersonaRepository")
 */
class ReunionPersona
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=20, nullable=false)
     */
    private $tipo;

    /**
     * @var \Reunion
     *
     * @ORM\ManyToOne(targetEntity="Reunion", inversedBy="rpReunion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_reunion", referencedColumnName="id", onDelete="CASCADE" )
     * })
     */
    private $idReunion;

    /**
     * @var \Persona
     *
     * @ORM\ManyToOne(targetEntity="Persona", inversedBy="rpPersona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_persona", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $idPersona;

    /**
     * @ORM\Column(name="creada_por", type="integer" ,nullable=true)
     */
    private $creada_por;

    /**
     * estos datos de aqui hacia abajo se llenan al confeccionar el acta
     * @var Asistencia
     * @ORM\Column(name="asistencia", type="boolean" ,nullable=true)
     */
    private $asistencia;

    /**
     * @var causa
     * @ORM\Column(name="causa", type="string", length=100, nullable=true)
     */
    private $causa;

    /**
     * @var sustituto
     * @ORM\Column(name="sustituto", type="string", length=100, nullable=true)
     */
    private $sustituto;


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
     * Set tipo
     *
     * @param string $tipo
     * @return ReunionPersona
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set idReunion
     *
     * @param \Acuerdos\GestionBundle\Entity\Reunion $idReunion
     * @return ReunionPersona
     */
    public function setIdReunion(\Acuerdos\GestionBundle\Entity\Reunion $idReunion = null)
    {
        $this->idReunion = $idReunion;

        return $this;
    }

    /**
     * Get idReunion
     *
     * @return \Acuerdos\GestionBundle\Entity\Reunion 
     */
    public function getIdReunion()
    {
        return $this->idReunion;
    }

    /**
     * Set idPersona
     *
     * @param \Acuerdos\GestionBundle\Entity\Persona $idPersona
     * @return ReunionPersona
     */
    public function setIdPersona(\Acuerdos\GestionBundle\Entity\Persona $idPersona = null)
    {
        $this->idPersona = $idPersona;

        return $this;
    }

    /**
     * Get idPersona
     *
     * @return \Acuerdos\GestionBundle\Entity\Persona 
     */
    public function getIdPersona()
    {
        return $this->idPersona;
    }

    /**
     * Set asistencia
     *
     * @param boolean $asistencia
     * @return ReunionPersona
     */
    public function setAsistencia($asistencia)
    {
        $this->asistencia = $asistencia;

        return $this;
    }

    /**
     * Get asistencia
     *
     * @return boolean 
     */
    public function getAsistencia()
    {
        return $this->asistencia;
    }

    /**
     * Set causa
     *
     * @param string $causa
     * @return ReunionPersona
     */
    public function setCausa($causa)
    {
        $this->causa = $causa;

        return $this;
    }

    /**
     * Get causa
     *
     * @return string 
     */
    public function getCausa()
    {
        return $this->causa;
    }

    /**
     * Set sustituto
     *
     * @param string $sustituto
     * @return ReunionPersona
     */
    public function setSustituto($sustituto)
    {
        $this->sustituto = $sustituto;

        return $this;
    }

    /**
     * Get sustituto
     *
     * @return string 
     */
    public function getSustituto()
    {
        return $this->sustituto;
    }
}
