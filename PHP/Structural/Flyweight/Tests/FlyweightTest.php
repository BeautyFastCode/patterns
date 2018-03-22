<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Flyweight\Tests;

use PHP\Structural\Flyweight\TreeFactory;
use PHPUnit\Framework\TestCase;

/**
 * Test case for Flyweight Design Pattern.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class FlyweightTest extends TestCase
{
    /**
     * Tests rendering trees without any optimization.
     */
    public function testHeavyTrees(): void
    {
        $treeFactory = new TreeFactory();

        for ($i = 0; $i < 100; ++$i) {
            $tree = $treeFactory->getHeavyTree(rand(0, 3), rand(0, 3));

            /*
             * Renders 100 green trees
             */
            $tree->render('Green');
        }

        $this->assertEquals(100, $treeFactory->count());

        return;
    }

    /**
     * Tests rendering trees with optimization.
     */
    public function testFlyweightTrees(): void
    {
        $treeFactory = new TreeFactory();

        for ($i = 0; $i < 100; ++$i) {
            $tree = $treeFactory->getFlyweightTree(rand(0, 3), rand(0, 3));

            /*
             * Renders 100 green trees, but only 16 are stored in memory.
             */
            $tree->render('Green');
        }

        $this->assertEquals(16, $treeFactory->count());

        return;
    }
}
