<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Mediator\SmartHouse;

/**
 * Clock.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Clock extends Colleague
{
    /**
     * State of clock.
     *
     * @var bool
     */
    private $enable;

    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->enable = false;
    }

    /**
     * Turn on the clock.
     */
    public function turnOn()
    {
        $this->enable = true;
        $this->getMediator()->change($this);
    }

    /**
     * Turn off the clock.
     */
    public function turnOff()
    {
        $this->enable = false;
        $this->getMediator()->change($this);
    }

    /**
     * Set the state of the clock.
     *
     * @param bool $enable
     */
    public function setEnable(bool $enable)
    {
        $this->enable = $enable;
    }

    /**
     * Returns the state of the clock.
     *
     * @return bool
     */
    public function isEnable(): bool
    {
        return $this->enable;
    }
}
