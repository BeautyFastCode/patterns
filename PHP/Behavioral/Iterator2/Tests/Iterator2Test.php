<?php

declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Iterator2\Tests;

use PHP\Behavioral\Iterator2\Sheep;
use PHP\Behavioral\Iterator2\Herd;
use PHPUnit\Framework\TestCase;

/**
 * Test case for Iterator design pattern.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Iterator2Test extends TestCase
{
    /**
     * Main test for Iterator design pattern.
     */
    public function testMain(): void
    {
        $herd = new Herd();

        $herd->addSheep(new Sheep('foo'))
            ->addSheep(new Sheep('bee'))
            ->addSheep(new Sheep('goo'))
            ->removeSheep('bee')
            ->addSheep(new Sheep('coco'));

        $this->assertEquals(3, $herd->countSheeps());

        $sheepsNames = '';
        foreach ($herd as $sheep) {
            $sheepsNames = sprintf('%s%s ', $sheepsNames, $sheep->getName());
        }

        $this->assertEquals('foo goo coco ', $sheepsNames);

        return;
    }
}
