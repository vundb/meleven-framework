<?php

namespace Vundb\MelevenFramework\Tests\Entity;

use PHPUnit\Framework\TestCase;
use Vundb\MelevenFramework\Entity\Asset;

/**
 * Class AssetTest
 *
 * @package Vundb\MelevenFramework\Tests
 */
class AssetTest extends TestCase
{
    /**
     * @covers \Vundb\MelevenFramework\Entity\Asset
     */
    public function testConstructor()
    {
        $asset = new Asset();

        $this->assertSame('', $asset->getId());
    }
}
