<?php

namespace Acuerdos\GestionBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Tema
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Tema
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
     * @ORM\Column(name="tema", type="string", length=255)
     */
    private $tema;

    /**
     * @var string
     *
     * @ORM\Column(name="clasificacion", type="string", length=255)
     */
    private $clasificacion;

    /**
     * var string
     * @ORM\Column(type="text", nullable=true)
     */
    private $descripcion;

    /**
     * @ORM\ManyToOne(targetEntity="Reunion", inversedBy="temas")
     * @ORM\JoinColumn(name="reunion_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $reunion;

    /**
     * @ORM\OneToMany(targetEntity="Comentario", mappedBy="tema")
     */
    private $comentarios;

    /**
     * @ORM\OneToMany(targetEntity="Acuerdo", mappedBy="tema")
     */
    private $acuerdos;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    public function __construct()
    {
        $this->comentarios = new ArrayCollection();
        $this->acuerdos = new ArrayCollection();
    }

    /**
     * Set tema
     *
     * @param string $tema
     * @return Tema
     */
    public function setTema($tema)
    {
        $this->tema = $tema;

        return $this;
    }

    /**
     * Get tema
     *
     * @return string 
     */
    public function getTema()
    {
        return $this->tema;
    }

    /**
     * Set clasificacion
     *
     * @param string $clasificacion
     * @return Tema
     */
    public function setClasificacion($clasificacion)
    {
        $this->clasificacion = $clasificacion;

        return $this;
    }

    /**
     * Get clasificacion
     *
     * @return string 
     */
    public function getClasificacion()
    {
        return $this->clasificacion;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Tema
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
     * Set reunion
     *
     * @param \Acuerdos\GestionBundle\Entity\Reunion $reunion
     * @return Tema
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
     * Add comentarios
     *
     * @param \Acuerdos\GestionBundle\Entity\Comentario $comentarios
     * @return Tema
     */
    public function addComentario(\Acuerdos\GestionBundle\Entity\Comentario $comentarios)
    {
        $this->comentarios[] = $comentarios;

        return $this;
    }

    /**
     * Remove comentarios
     *
     * @param \Acuerdos\GestionBundle\Entity\Comentario $comentarios
     */
    public function removeComentario(\Acuerdos\GestionBundle\Entity\Comentario $comentarios)
    {
        $this->comentarios->removeElement($comentarios);
    }

    /**
     * Get comentarios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    /**
     * Add acuerdos
     *
     * @param \Acuerdos\GestionBundle\Entity\Acuerdo $acuerdos
     * @return Tema
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
    }
}
