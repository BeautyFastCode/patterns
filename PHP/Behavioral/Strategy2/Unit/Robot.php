<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Strategy2\Unit;

use PHP\Behavioral\Strategy2\Luck\LuckInterface;

/**
 * Robot
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Robot extends BaseUnit
{
    /**
     * How lucky the Robot is
     *
     * @var LuckInterface
     */
    private $luck;

    /**
     * @{inheritdoc}
     */
    public function speak(): string
    {
        return sprintf("%s says: I'm the %s\n", $this->getClassName(), $this->getName());
    }

    /**
     * Get the luck
     *
     * @return string
     */
    public function getLuck(): string
    {
        if ($this->luck instanceof LuckInterface && $this->luck !== null) {
            return sprintf("I'm lucky. I have %s luckness\n", $this->luck->random());
        } else {
            return sprintf("I don't have luck\n");
        }
    }

    /**
     * Set the luck
     *
     * @param LuckInterface $luck
     *
     * @return Robot
     */
    public function setLuck(LuckInterface $luck): Robot
    {
        $this->luck = $luck;

        return $this;
    }
}
