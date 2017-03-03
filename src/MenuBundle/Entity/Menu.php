<?php

namespace MenuBundle\Entity;

/**
 * Menu
 */
class Menu
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
     * @var string
     */
    private $ruta;

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
     *
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
     *
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
     * @return bool
     */
    public function getEliminar()
    {
        return $this->eliminar;
    }
}

