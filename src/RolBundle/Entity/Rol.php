<?php

namespace RolBundle\Entity;

/**
 * Rol
 */
class Rol
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var bool
     */
    private $listar;

    /**
     * @var bool
     */
    private $agregar;

    /**
     * @var bool
     */
    private $editar;

    /**
     * @var bool
     */
    private $eliminar;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Rol
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
     * Set listar
     *
     * @param boolean $listar
     *
     * @return Rol
     */
    public function setListar($listar)
    {
        $this->listar = $listar;

        return $this;
    }

    /**
     * Get listar
     *
     * @return bool
     */
    public function getListar()
    {
        return $this->listar;
    }

    /**
     * Set agregar
     *
     * @param boolean $agregar
     *
     * @return Rol
     */
    public function setAgregar($agregar)
    {
        $this->agregar = $agregar;

        return $this;
    }

    /**
     * Get agregar
     *
     * @return bool
     */
    public function getAgregar()
    {
        return $this->agregar;
    }

    /**
     * Set editar
     *
     * @param boolean $editar
     *
     * @return Rol
     */
    public function setEditar($editar)
    {
        $this->editar = $editar;

        return $this;
    }

    /**
     * Get editar
     *
     * @return bool
     */
    public function getEditar()
    {
        return $this->editar;
    }

    /**
     * Set eliminar
     *
     * @param boolean $eliminar
     *
     * @return Rol
     */
    public function setEliminar($eliminar)
    {
        $this->eliminar = $eliminar;

        return $this;
    }

    /**
     * Get eliminar
     *
     * @return bool
     */
    public function getEliminar()
    {
        return $this->eliminar;
    }
}

