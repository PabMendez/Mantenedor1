<?php

namespace MenuRolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use MenuBundle\Entity\Menu;
use RolBundle\Entity\Rol;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Menu_rol
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MenuRolBundle\Repository\Menu_rolRepository")
 */
class Menu_rol
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
     * 
     * @ORM\ManyToOne(targetEntity="MenuBundle\Entity\Menu", inversedBy="menu_rol", cascade={"persist"})
     * @ORM\JoinColumn(name="menu_id", referencedColumnName="id", onDelete="restrict")
     */
    private $menu;

    /**
     *
     * @ORM\ManyToOne(targetEntity="RolBundle\Entity\Rol", inversedBy="menu_rol", cascade={"persist"})
     * @ORM\JoinColumn(name="rol_id", referencedColumnName="id", onDelete="restrict")
     */
    private $rol;
    
    public function __construct()
    {
        $this->menu = new ArrayCollection();
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
     * Get Menu
     *
     * @return MenuBundle\Entity\Menu
     */

    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * Get Rol
     *
     * @return RolBundle\Entity\Rol
     */
    public function getRol()
    {
        return $this->rol;
    }
    function setId($id) {
        $this->id = $id;
    }
    
    function setMenu($menu) {
        $this->menu = $menu;
    }

    function setRol($rol) {
        $this->rol = $rol;
    }

        public function __toString() {
        return $this->getNombre();
    }

}
