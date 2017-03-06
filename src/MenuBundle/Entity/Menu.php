<?php

namespace MenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menu
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MenuBundle\Repository\MenuRepository")
 */
class Menu
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="ruta", type="string", length=255)
     */
    private $ruta;

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
     * Set nombre
     *
     * @param string $nombre
     * @return Menu
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set ruta
     *
     * @param string $ruta
     * @return Menu
     */
    public function setRuta($ruta)
    {
        $this->ruta = $ruta;

        return $this;
    }

    /**
     * Get ruta
     *
     * @return string 
     */
    public function getRuta()
    {
        return $this->ruta;
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
