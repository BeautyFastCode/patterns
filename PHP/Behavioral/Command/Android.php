<?php

declare(strict_types=1);

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
     * @param string $direction
     *
     * @return string
     */
    public function move(string $direction): string
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
     * @param string $direction
     *
     * @return string
     */
    public function rotate(string $direction): string
    {
        return sprintf('Android rotates %s.', $direction);
    }
}
