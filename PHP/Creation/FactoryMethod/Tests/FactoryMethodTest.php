<?php declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\FactoryMethod\Tests;

use PHP\Creation\FactoryMethod\Exception\CreatePizzaNotFoundException;
use PHP\Creation\FactoryMethod\Factory\AmericanFactory;
use PHP\Creation\FactoryMethod\Factory\ItalianFactory;
use PHPUnit\Framework\TestCase;

/**
 * FactoryMethodTest, test cases for factory method design pattern.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class FactoryMethodTest extends TestCase
{
    /**
     * Test the factory method design pattern.
     */
    public function testMain(): void
    {
        $americanFactory = new AmericanFactory();
        $italianFactory = new ItalianFactory();

        $pizza = $americanFactory->orderPizza('American');
        $this->assertEquals('American', $pizza->getName());
        $this->assertEquals(5.0, $pizza->getPrice());

        $pizza = $americanFactory->orderPizza('Italian');
        $this->assertEquals('Italian', $pizza->getName());
        $this->assertEquals(10.00, $pizza->getPrice());

        $pizza = $americanFactory->orderPizza('Hawaii');
        $this->assertEquals('Hawaii', $pizza->getName());
        $this->assertEquals(15.50, $pizza->getPrice());

        $pizza = $italianFactory->orderPizza('Italian');
        $this->assertEquals('Italian', $pizza->getName());
        $this->assertEquals(7.50, $pizza->getPrice());

        return;
    }

    /**
     * Tests Exception in Italian Factory
     */
    public function testNotFoundHawaii(): void
    {
        $noHawaii = 'I don\'t have \'Hawaii\' type Pizza in an offer.';
        $italianFactory = new ItalianFactory();

        $this->expectException(CreatePizzaNotFoundException::class);
        $this->expectExceptionMessage($noHawaii);
        $italianFactory->orderPizza('Hawaii');

        return;
    }

    /**
     * Tests Exception in American Factory
     */
    public function testNotFoundRimini(): void
    {
        $noRimini = 'I don\'t have \'Rimini\' type Pizza in an offer.';
        $americanFactory = new AmericanFactory();

        $this->expectException(CreatePizzaNotFoundException::class);
        $this->expectExceptionMessage($noRimini);
        $americanFactory->orderPizza('Rimini');

        return;
    }
}
