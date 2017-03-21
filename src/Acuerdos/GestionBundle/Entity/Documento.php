<?php

namespace Acuerdos\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Documento
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Documento
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;

    /**
     * @ORM\ManyToOne(targetEntity="Acta", inversedBy="documentos")
     * @ORM\JoinColumn(name="acta_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $acta;


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
     * Set name
     *
     * @param string $name
     * @return Documento
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Documento
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set acta
     *
     * @param \Acuerdos\GestionBundle\Entity\Acta $acta
     * @return Documento
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
}
