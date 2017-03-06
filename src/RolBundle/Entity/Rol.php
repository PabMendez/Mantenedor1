<?php

namespace RolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rol
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="RolBundle\Repository\RolRepository")
 */
class Rol
{
    
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue
    */
    protected $id;
    
    /** @ORM\Column(type="string", length=100) */
    protected $nombre; 
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="listar", type="boolean")
     */
    private $listar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="agregar", type="boolean")
     */
    private $agregar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="editar", type="boolean")
     */
    private $editar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="eliminar", type="boolean")
     */
    private $eliminar;
    
 
 
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }
    
    public function getNombre()
    {
        return $this->nombre;
    }    
    /**
     * Set listar
     *
     * @param boolean $listar
     * @return Menu
     */
    public function setListar($listar)
    {
        $this->listar = $listar;

        return $this;
    }

    /**
     * Get listar
     *
     * @return boolean 
     */
    public function getListar()
    {
        return $this->listar;
    }

    /**
     * Set agregar
     *
     * @param boolean $agregar
     * @return Menu
     */
    public function setAgregar($agregar)
    {
        $this->agregar = $agregar;

        return $this;
    }

    /**
     * Get agregar
     *
     * @return boolean 
     */
    public function getAgregar()
    {
        return $this->agregar;
    }

    /**
     * Set editar
     *
     * @param boolean $editar
     * @return Menu
     */
    public function setEditar($editar)
    {
        $this->editar = $editar;

        return $this;
    }

    /**
     * Get editar
     *
     * @return boolean 
     */
    public function getEditar()
    {
        return $this->editar;
    }

    /**
     * Set eliminar
     *
     * @param boolean $eliminar
     * @return Menu
     */
    public function setEliminar($eliminar)
    {
        $this->eliminar = $eliminar;

        return $this;
    }

    /**
     * Get eliminar
     *
     * @return boolean 
     */
    public function getEliminar()
    {
        return $this->eliminar;
    }
    
   
    public function __toString() {
        return $this->getNombre();
    }

}
