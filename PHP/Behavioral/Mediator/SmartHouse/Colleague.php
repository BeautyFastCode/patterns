<?php

declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Mediator\SmartHouse;
use PHP\Behavioral\Mediator\MediatorInterface;

/**
 * Colleague
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
abstract class Colleague
{
    /**
     * @var MediatorInterface
     */
    protected $mediatorInterface;

    /**
     * @param MediatorInterface $mediatorInterface
     */
    public function setMediator(MediatorInterface $mediatorInterface)
    {
        $this->mediatorInterface = $mediatorInterface;
    }
}
