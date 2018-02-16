<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Command;

/**
 * Android is the `receiver` of commands.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Android
{
    public function move($direction): string
    {
        return sprintf('Android moving %s.', $direction);
    }

    public function stop(): string
    {
        return sprintf('Android stops.');
    }

    public function rotate($direction): string
    {
        return sprintf('Android rotating %s.', $direction);
    }

    public function shot(): string
    {
        return sprintf('Android shots.');
    }
}
