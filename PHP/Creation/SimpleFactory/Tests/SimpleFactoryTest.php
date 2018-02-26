<?php declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\SimpleFactory;

use PHP\Creation\SimpleFactory\Exception\CreatePizzaNotFoundException;
use PHP\Creation\SimpleFactory\Pizza\AmericanPizza;
use PHP\Creation\SimpleFactory\Pizza\HawaiiPizza;
use PHP\Creation\SimpleFactory\Pizza\ItalianPizza;
use PHPUnit\Framework\TestCase;

/**
 * SimpleFactoryTest, test cases for simple factory design pattern.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class SimpleFactoryTest extends TestCase
{
    /**
     * Tests the simple factory design pattern.
     */
    public function testMain(): void
    {
        $factory = new SimpleFactory();

        $pizza = $factory->orderPizza('American');

        $this->assertInstanceOf(AmericanPizza::class, $pizza);
        $this->assertEquals('American', $pizza->getName());
        $this->assertEquals(5.0, $pizza->getPrice());

        $pizza = $factory->orderPizza('Italian');

        $this->assertInstanceOf(ItalianPizza::class, $pizza);
        $this->assertEquals('Italian', $pizza->getName());
        $this->assertEquals(7.50, $pizza->getPrice());

        $pizza = $factory->orderPizza('Hawaii');

        $this->assertInstanceOf(HawaiiPizza::class, $pizza);
        $this->assertEquals('Hawaii', $pizza->getName());
        $this->assertEquals(15.50, $pizza->getPrice());

        return;
    }

    /**
     * Tests the Exception.
     */
    public function testNotFoundException(): void
    {
        $noRimini = 'I don\'t have \'Rimini\' type Pizza in an offer.';
        $factory = new SimpleFactory();

        $this->expectException(CreatePizzaNotFoundException::class);
        $this->expectExceptionMessage($noRimini);

        $factory->orderPizza('Rimini');

        return;
    }
}
