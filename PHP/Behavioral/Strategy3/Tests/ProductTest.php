<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Strategy3\Tests;

use DateTime;
use PHP\Behavioral\Strategy3\Product;
use PHPUnit\Framework\TestCase;

/**
 * ProductTest - test cases for Product class.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class ProductTest extends TestCase
{
    public function testCreateProduct()
    {
        $date = new DateTime('2019-03-16');
        $product = new Product(1, 'milky', 4.99, $date);

        $this->assertEquals(1, $product->getKey());
        $this->assertEquals('milky', $product->getName());
        $this->assertEquals(4.99, $product->getPrice());
        $this->assertEquals($date, $product->getDate());
    }
}
