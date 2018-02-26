<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Strategy2\Luck;

/**
 * BigLuck.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class BigLuck implements LuckInterface
{
    /**
     * {@inheritdoc}
     */
    public function random(): int
    {
        return rand(1000, 10000);
    }
}
