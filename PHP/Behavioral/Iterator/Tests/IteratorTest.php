<?php

declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Iterator\Tests;

use PHP\Behavioral\Iterator\Sheep;
use PHP\Behavioral\Iterator\Herd;
use PHPUnit\Framework\TestCase;

/**
 * Test case for Iterator design pattern.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class IteratorTest extends TestCase
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
        while ($herd->hasNext()) {
            $sheep = $herd->next();
            $sheepsNames = sprintf('%s%s ', $sheepsNames, $sheep->getName());
        }

        $this->assertEquals('foo goo coco ', $sheepsNames);

        return;
    }
}
