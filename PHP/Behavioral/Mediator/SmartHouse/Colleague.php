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
 * Colleagues works together but only knows the Mediator, not other colleagues.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
abstract class Colleague
{
    /**
     * The MediatorInterface.
     *
     * @var MediatorInterface
     */
    protected $mediatorInterface;

    /**
     * Set the MediatorInterface.
     *
     * @param MediatorInterface $mediatorInterface
     */
    public function setMediator(MediatorInterface $mediatorInterface): void
    {
        $this->mediatorInterface = $mediatorInterface;

        return;
    }

    /**
     * Returns the MediatorInterface.
     *
     * @return MediatorInterface
     */
    public function getMediator(): MediatorInterface
    {
        return $this->mediatorInterface;
    }
}
