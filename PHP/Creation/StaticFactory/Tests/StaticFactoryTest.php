<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\StaticFactory;

use PHP\Creation\StaticFactory\Exception\CreatePizzaNotFoundException;
use PHP\Creation\StaticFactory\Pizza\AmericanPizza;
use PHP\Creation\StaticFactory\Pizza\HawaiiPizza;
use PHP\Creation\StaticFactory\Pizza\ItalianPizza;
use PHPUnit\Framework\TestCase;

/**
 * StaticFactory, test cases for static factory design pattern.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class StaticFactoryTest extends TestCase
{
    /**
     * Tests the static factory design pattern.
     */
    public function testMain()
    {
        $pizza = StaticFactory::orderPizza('American');

        $this->assertInstanceOf(AmericanPizza::class, $pizza);
        $this->assertEquals('American', $pizza->getName());
        $this->assertEquals(5.0, $pizza->getPrice());

        $pizza = StaticFactory::orderPizza('Italian');

        $this->assertInstanceOf(ItalianPizza::class, $pizza);
        $this->assertEquals('Italian', $pizza->getName());
        $this->assertEquals(7.50, $pizza->getPrice());

        $pizza = StaticFactory::orderPizza('Hawaii');

        $this->assertInstanceOf(HawaiiPizza::class, $pizza);
        $this->assertEquals('Hawaii', $pizza->getName());
        $this->assertEquals(15.50, $pizza->getPrice());
    }

    /**
     * Tests the Exception.
     */
    public function testNotFoundException()
    {
        $noRimini = 'I don\'t have \'Rimini\' type Pizza in an offer.';

        $this->expectException(CreatePizzaNotFoundException::class);
        $this->expectExceptionMessage($noRimini);

        StaticFactory::orderPizza('Rimini');
    }
}
