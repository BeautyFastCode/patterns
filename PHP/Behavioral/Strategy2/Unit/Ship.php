<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Strategy2\Unit;

/**
 * Ship.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Ship extends BaseUnit
{
    /**
     * {@inheritdoc}
     */
    public function speak(): string
    {
        return sprintf("%s says: I'm the %s\n", $this->getClassName(), $this->getName());
    }
}
