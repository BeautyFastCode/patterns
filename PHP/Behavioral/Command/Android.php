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
    /**
     * @param $direction
     *
     * @return string
     */
    public function move($direction): string
    {
        return sprintf('Android moves %s.', $direction);
    }

    /**
     * @return string
     */
    public function stop(): string
    {
        return sprintf('Android stops.');
    }

    /**
     * @param $direction
     *
     * @return string
     */
    public function rotate($direction): string
    {
        return sprintf('Android rotates %s.', $direction);
    }
}
