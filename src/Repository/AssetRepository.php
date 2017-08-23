<?php

namespace Vundb\MelevenFramework\Repository;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class AssetRepository
 *
 * @package Vundb\MelevenFramework
 */
class AssetRepository
{
    /**
     * @return ArrayCollection
     */
    public function list(): ArrayCollection
    {
        return new ArrayCollection();
    }
}
