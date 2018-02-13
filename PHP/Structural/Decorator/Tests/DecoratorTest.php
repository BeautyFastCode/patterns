<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\Decorator\Tests;

use PHP\Structural\Decorator\Base\Pizza;
use PHP\Structural\Decorator\Ingredient\JalapenoSauce;
use PHP\Structural\Decorator\Ingredient\Mushrooms;
use PHP\Structural\Decorator\Ingredient\Salami;
use PHP\Structural\Decorator\Ingredient\TomatoSauce;
use PHPUnit\Framework\TestCase;

/**
 * DecoratorTest, test cases for decorator design pattern.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class DecoratorTest extends TestCase
{
    /**
     * Tests the decorator design pattern.
     */
    public function testMain()
    {
        // todo: small, medium, big

        $pizza = new Pizza('new');
        $this->assertEquals(10.0, $pizza->getCost());

        $pizza = new TomatoSauce($pizza);
        $this->assertEquals(11.0, $pizza->getCost());

        // Pizza Funghi
        $funghi = new Pizza('Funghi');
        $funghi = new Mushrooms($funghi);
        $funghi = new TomatoSauce($funghi);

        $this->assertEquals(13.50, $funghi->getCost());

        // Pizza Rimini
        $rimini = new TomatoSauce(new Mushrooms(new Salami(new Pizza('Rimini'))));
        $this->assertEquals(18.0, $rimini->getCost());

        // Pizza Extra Hot
        $extraHot = new JalapenoSauce(new Mushrooms(new Salami(new Pizza('Extra Hot'))));
        $this->assertEquals(21.5, $extraHot->getCost());
    }
}
