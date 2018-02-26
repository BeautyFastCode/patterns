<?php declare(strict_types=1);

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
    public function testMain(): void
    {
        $pizza = new Pizza('Pizza');

        $this->assertEquals(10.0, $pizza->calculateCost());
        $this->assertEquals(1, $pizza->amountIngredients());
        $this->assertEquals('Pizza', $pizza->listIngredients());

        $pizza = new TomatoSauce($pizza);
        $this->assertEquals(11.0, $pizza->calculateCost());
        $this->assertEquals(2, $pizza->amountIngredients());
        $this->assertEquals('Pizza, TomatoSauce', $pizza->listIngredients());

        // Pizza Funghi
        $funghi = new Pizza('Funghi');
        $funghi = new Mushrooms($funghi);
        $funghi = new TomatoSauce($funghi);

        $this->assertEquals(13.50, $funghi->calculateCost());
        $this->assertEquals(3, $funghi->amountIngredients());
        $this->assertEquals('Funghi, Mushrooms, TomatoSauce', $funghi->listIngredients());

        // Pizza Rimini
        $rimini = new TomatoSauce(new Mushrooms(new Salami(new Pizza('Rimini'))));

        $this->assertEquals(4, $rimini->amountIngredients());
        $this->assertEquals(18.0, $rimini->calculateCost());
        $this->assertEquals('Rimini, Salami, Mushrooms, TomatoSauce', $rimini->listIngredients());

        // Pizza Extra Hot
        $extraHot = new JalapenoSauce(new Mushrooms(new Salami(new Pizza('Extra Hot'))));

        $this->assertEquals(21.5, $extraHot->calculateCost());
        $this->assertEquals(4, $extraHot->amountIngredients());
        $this->assertEquals(
            'Extra Hot, Salami, Mushrooms, Jalapeno Sauce',
            $extraHot->listIngredients()
        );

        return;
    }
}
