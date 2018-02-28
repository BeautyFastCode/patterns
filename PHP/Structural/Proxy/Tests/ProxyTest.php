<?php

declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\Proxy\Tests;

use PHP\Structural\Proxy\Image;
use PHP\Structural\Proxy\ProxyImage;
use PHPUnit\Framework\TestCase;

/**
 * ProxyTest, test cases for the Proxy Design Pattern.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class ProxyTest extends TestCase
{
    /**
     * Tests without the proxy.
     */
    public function testWithoutProxy(): void
    {
        $image = new Image('big-cat.jpg');

        $this->assertEquals(
            'The big-cat.jpg image is shown on the screen.'
            , $image->show());

        return;
    }

    /**
     * Tests with the proxy.
     */
    public function testWithProxy(): void
    {
        $image = new ProxyImage('big-cat.jpg');

        $this->assertEquals(
            'Lazy Loading the big-cat.jpg ...'
            , $image->show());

        $this->assertEquals(
            'The big-cat.jpg image is shown on the screen.'
            , $image->show());

        return;
    }
}
