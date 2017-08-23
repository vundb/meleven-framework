<?php

namespace Vundb\MelevenFramework\Tests\Repository;

use PHPUnit\Framework\TestCase;
use Vundb\MelevenFramework\Repository\AssetRepository;

/**
 * Class AssetRepositoryTest
 *
 * @package Vundb\MelevenFramework\Tests
 */
class AssetRepositoryTest extends TestCase
{
    /**
     * @covers \Vundb\MelevenFramework\Repository\AssetRepository
     */
    public function testConstructor()
    {
        $repository = new AssetRepository();

        $this->assertInstanceOf(AssetRepository::class, $repository);
    }

    /**
     * @covers \Vundb\MelevenFramework\Repository\AssetRepository
     */
    public function testList()
    {
        $repository = new AssetRepository();

        $result = $repository->list();

        $this->assertCount(0, $result);
    }
}
