<?php

namespace Acuerdos\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comentario
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Comentario
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
     * @ORM\Column(name="comentario", type="text")
     */
    private $comentario;

    /**
     * @ORM\ManyToOne(targetEntity="Persona", inversedBy="comentarios")
     * @ORM\JoinColumn(name="persona_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $persona;

    /**
     * @ORM\ManyToOne(targetEntity="Tema", inversedBy="comentarios")
     * @ORM\JoinColumn(name="tema_id", referencedColumnName="id", onDelete="CASCADE")
     **/
    private $tema;

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
     * Set comentario
     *
     * @param string $comentario
     * @return Comentario
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string 
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set persona
     *
     * @param \Acuerdos\GestionBundle\Entity\Persona $persona
     * @return Comentario
     */
    public function setPersona(\Acuerdos\GestionBundle\Entity\Persona $persona = null)
    {
        $this->persona = $persona;

        return $this;
    }

    /**
     * Get persona
     *
     * @return \Acuerdos\GestionBundle\Entity\Persona 
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * Set tema
     *
     * @param \Acuerdos\GestionBundle\Entity\Tema $tema
     * @return Comentario
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
        return $this->getComentario();
    }
}
