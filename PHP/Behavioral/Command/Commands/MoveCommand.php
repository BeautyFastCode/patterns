<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Command\Commands;

use PHP\Behavioral\Command\Android;

/**
 * MoveCommand
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class MoveCommand implements CommandInterface
{
    private $android;
    private $direction;

    public function __construct(Android $android, $direction)
    {
        $this->android = $android;
        $this->direction = $direction;
    }

    public function execute():string
    {
        return $this->android->move($this->direction);
    }
}
