<?php

namespace ProveedorBundle\Entity;

/**
 * Proveedor
 */
class Proveedor
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nombres;

    /**
     * @var string
     */
    private $apellidoP;

    /**
     * @var string
     */
    private $apellidoM;

    /**
     * @var string
     */
    private $rut;

    /**
     * @var string
     */
    private $razonSocial;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $fono;


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
     * Set nombres
     *
     * @param string $nombres
     *
     * @return Proveedor
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set apellidoP
     *
     * @param string $apellidoP
     *
     * @return Proveedor
     */
    public function setApellidoP($apellidoP)
    {
        $this->apellidoP = $apellidoP;

        return $this;
    }

    /**
     * Get apellidoP
     *
     * @return string
     */
    public function getApellidoP()
    {
        return $this->apellidoP;
    }

    /**
     * Set apellidoM
     *
     * @param string $apellidoM
     *
     * @return Proveedor
     */
    public function setApellidoM($apellidoM)
    {
        $this->apellidoM = $apellidoM;

        return $this;
    }

    /**
     * Get apellidoM
     *
     * @return string
     */
    public function getApellidoM()
    {
        return $this->apellidoM;
    }

    /**
     * Set rut
     *
     * @param string $rut
     *
     * @return Proveedor
     */
    public function setRut($rut)
    {
        $this->rut = $rut;

        return $this;
    }

    /**
     * Get rut
     *
     * @return string
     */
    public function getRut()
    {
        return $this->rut;
    }

    /**
     * Set razonSocial
     *
     * @param string $razonSocial
     *
     * @return Proveedor
     */
    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;

        return $this;
    }

    /**
     * Get razonSocial
     *
     * @return string
     */
    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Proveedor
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set fono
     *
     * @param string $fono
     *
     * @return Proveedor
     */
    public function setFono($fono)
    {
        $this->fono = $fono;

        return $this;
    }

    /**
     * Get fono
     *
     * @return string
     */
    public function getFono()
    {
        return $this->fono;
    }
}

