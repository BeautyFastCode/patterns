<?php

declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Mediator\SmartHouse;

/**
 * Clock
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Clock extends Colleague
{
    /**
     * @var bool
     */
    private $enable;

    /**
     * Class constructor
     */
    public function __construct()
    {
        $this->turnOff();
    }

    /**
     *
     */
    public function turnOn()
    {
        $this->enable = true;
    }

    /**
     *
     */
    public function turnOff()
    {
        $this->enable = false;
    }

    /**
     * @return boolean
     */
    public function isEnable(): bool
    {
        return $this->enable;
    }
}
