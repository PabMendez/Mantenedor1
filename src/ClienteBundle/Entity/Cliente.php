<?php

namespace ClienteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ClienteBundle\Repository\ClienteRepository")
 */
class Cliente
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
     * @ORM\Column(name="nombres", type="string", length=50)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidoP", type="string", length=50)
     */
    private $apellidoP;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidoM", type="string", length=50)
     */
    private $apellidoM;

    /**
     * @var string
     *
     * @ORM\Column(name="rut", type="string", length=12)
     */
    private $rut;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=50)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="fono", type="integer")
     */
    private $fono;


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
     * Set nombres
     *
     * @param string $nombres
     * @return Cliente
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
     * @return Cliente
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
     * @return Cliente
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
     * @return Cliente
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
     * Set direccion
     *
     * @param string $direccion
     * @return Cliente
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Cliente
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
     * @param integer $fono
     * @return Cliente
     */
    public function setFono($fono)
    {
        $this->fono = $fono;

        return $this;
    }

    /**
     * Get fono
     *
     * @return integer 
     */
    public function getFono()
    {
        return $this->fono;
    }
    public function __toString() {
        return $this->getNombres();
    }

}
