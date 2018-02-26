<?php declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\AbstractFactory\Tests;

use PHP\Creation\AbstractFactory\Client;
use PHP\Creation\AbstractFactory\Exception\CreatePizzaNotFoundException;
use PHP\Creation\AbstractFactory\PizzaFactory\AmericanFactory;
use PHP\Creation\AbstractFactory\PizzaFactory\ItalianFactory;
use PHPUnit\Framework\TestCase;

/**
 * AbstractFactoryTest, test cases for factory method design pattern.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class AbstractFactoryTest extends TestCase
{
    /**
     * Tests the factory method design pattern.
     */
    public function testMain(): void
    {
        $americanFactory = new AmericanFactory();
        $italianFactory = new ItalianFactory();

        $pizza = $americanFactory->orderPizza('American');
        $this->assertEquals('American', $pizza->getName());
        $this->assertEquals('American: Thick Dough, Bacon, Garlic Sauce.', $pizza->listIngredients());

        $pizza = $americanFactory->orderPizza('Italian');
        $this->assertEquals('Italian', $pizza->getName());
        $this->assertEquals('Italian: Thick Dough, Pepperoni, Tomato Sauce.', $pizza->listIngredients());

        $pizza = $americanFactory->orderPizza('Hawaii');
        $this->assertEquals('Hawaii', $pizza->getName());
        $this->assertEquals('Hawaii: Thin Dough, Pineapple, Diablo Sauce.', $pizza->listIngredients());

        $pizza = $italianFactory->orderPizza('Margherita');
        $this->assertEquals('Margherita', $pizza->getName());
        $this->assertEquals('Margherita: Thick Dough, Tomato Sauce.', $pizza->listIngredients());

        $pizza = $italianFactory->orderPizza('Italian');
        $this->assertEquals('Italian', $pizza->getName());
        $this->assertEquals('Italian: Thick Dough, Pepperoni, Tomato Sauce.', $pizza->listIngredients());

        return;
    }

    /**
     * Tests the client
     */
    public function testClient(): void
    {
        $americanFactory = new AmericanFactory();
        $italianFactory = new ItalianFactory();

        $client = new Client($americanFactory);
        $this->assertEquals('Pizza \'Italian\' was very good!', $client->pizzaTasting('Italian'));

        $client = new Client($italianFactory);
        $this->assertEquals('Pizza \'Margherita\' was very good!', $client->pizzaTasting('Margherita'));

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
