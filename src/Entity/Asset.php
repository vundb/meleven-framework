<?php

namespace Vundb\MelevenFramework\Entity;

/**
 * Class Asset
 *
 * @package Vundb\MelevenFramework
 */
class Asset
{
    /**
     * @var string
     */
    private $id = '';

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}
