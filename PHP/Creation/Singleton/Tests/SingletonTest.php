<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\Singleton;

use PHPUnit\Framework\TestCase;

/**
 * SingletonTest, test cases for singleton design anti-pattern ;)
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class SingletonTest extends TestCase
{
    /**
     * Tests the singleton design anti-pattern.
     */
    public function testMain()
    {
        $instanceA = Singleton::getInstance();
        $instanceB = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $instanceA);
        $this->assertSame($instanceA, $instanceB);
    }
}
