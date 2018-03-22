<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Other\EAV\Tests;

use PHP\Other\EAV\Attribute;
use PHP\Other\EAV\Entity;
use PHP\Other\EAV\Value;
use PHPUnit\Framework\TestCase;

/**
 * Test cases for the Entity-Attribute-Value (EAV) design anti-pattern.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class EAVTest extends TestCase
{
    /**
     * Tests the Entity-Attribute-Value (EAV) design anti-pattern.
     */
    public function testMain(): void
    {
        /*
         * Business Card - is the Entity.
         *
         * background-color: #fff;
         * color: #000;
         * surname: Anderson
         * mobile: +31999999
         * mobile 2: +99000000000
         *
         * background-color, color, surname, mobile - are the Attributes.
         * #fff, #000, Anderson, +31999999, +99000000000 - are the Values.
         */

        $backgroundColor = new Attribute('background-color');
        $color = new Attribute('color');
        $surname = new Attribute('surname');
        $mobile = new Attribute('mobile');

        $white = new Value($backgroundColor, '#fff');
        $black = new Value($color, '#000');
        $anderson = new Value($surname, 'Anderson');

        $phoneNumber = new Value($mobile, '+31999999');
        $phoneNumber2 = new Value($mobile, '+99000000000');

        $entity = new Entity('Jon');

        $entity->addValue($white);
        $entity->addValue($black);
        $entity->addValue($anderson);
        $entity->addValue($phoneNumber);
        $entity->addValue($phoneNumber2);

        $this->assertEquals(
            [
                'Jon',
                [
                    'background-color',
                    '#fff',
                ],
                [
                    'color',
                    '#000',
                ],
                [
                    'surname',
                    'Anderson',
                ],
                [
                    'mobile',
                    '+31999999',
                ],
                [
                    'mobile',
                    '+99000000000',
                ],
            ],
            $entity->toArray()
        );

        return;
    }
}
