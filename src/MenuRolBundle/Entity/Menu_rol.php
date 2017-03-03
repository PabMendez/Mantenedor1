<?php

namespace MenuRolBundle\Entity;

/**
 * Menu_rol
 */
class Menu_rol
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var bool
     */
    private $menuId;

    /**
     * @var bool
     */
    private $rolId;


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
     * Set menuId
     *
     * @param boolean $menuId
     *
     * @return Menu_rol
     */
    public function setMenuId($menuId)
    {
        $this->menuId = $menuId;

        return $this;
    }

    /**
     * Get menuId
     *
     * @return bool
     */
    public function getMenuId()
    {
        return $this->menuId;
    }

    /**
     * Set rolId
     *
     * @param boolean $rolId
     *
     * @return Menu_rol
     */
    public function setRolId($rolId)
    {
        $this->rolId = $rolId;

        return $this;
    }

    /**
     * Get rolId
     *
     * @return bool
     */
    public function getRolId()
    {
        return $this->rolId;
    }
}

