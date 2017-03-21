<?php
// src/Acme/Bundle/UserBundle/Entity/Role.php
namespace Acuerdos\SeguridadBundle\Entity;
use Symfony\Component\Security\Core\Role\RoleInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Table(name="role")
 * @ORM\Entity()
 */
class Role implements RoleInterface
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(name="name", type="string", length=30)
     */
    private $name;
    /**
     * @ORM\Column(name="role", type="string", length=20, unique=true)
     */
    private $role;
    /**
     * @ORM\ManyToMany(targetEntity="Acuerdos\GestionBundle\Entity\Persona", mappedBy="roles")
     */
    private $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getRole()
    {
        // TODO: Implement getRole() method.
        return $this->role;
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
     * Set name
     *
     * @param string $name
     * @return Role
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
     * Set role
     *
     * @param string $role
     * @return Role
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Add users
     *
     * @param \Acuerdos\SeguridadBundle\Entity\Persona $users
     * @return Role
     */
    public function addUser(\Acuerdos\SeguridadBundle\Entity\Persona $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \Acuerdos\SeguridadBundle\Entity\Persona $users
     */
    public function removeUser(\Acuerdos\SeguridadBundle\Entity\Persona $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->getName();
    }
}
