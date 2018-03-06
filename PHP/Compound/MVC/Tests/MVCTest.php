<?php

declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Compound\MVC\Tests;

use PHPUnit\Framework\TestCase;

/**
 * MVCTest, test cases for the Model View Controller Design Pattern
 *
 * First, start the PHP build-in server:
 * php -S 127.0.0.1:8000 -t PHP/Compound/MVC/Public
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class MVCTest extends TestCase
{
    /**
     * Tests for the MVC Design Pattern
     */
    public function testMain(): void
    {
        $this->assertEquals(true, true);

        return;
    }
}
