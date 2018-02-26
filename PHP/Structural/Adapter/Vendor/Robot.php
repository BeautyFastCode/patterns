<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\Adapter\Vendor;

/**
 * Robot - this is the adapted class, some vendor code from outside.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Robot implements RobotInterface
{
    /**
     * {@inheritdoc}
     */
    public function canWalk(): array
    {
        return [
            self::class,
            'walk',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function canSpeak(): string
    {
        return sprintf('i\'M tHe RoBoT.');
    }
}
