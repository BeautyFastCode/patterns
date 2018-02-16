<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Command\Tests;

use PHP\Behavioral\Command\Android;
use PHP\Behavioral\Command\Commands\MoveCommand;
use PHP\Behavioral\Command\Player;
use PHPUnit\Framework\TestCase;

/**
 * Tests case for Command design pattern.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class CommandTest extends TestCase
{
    /**
     * Main test for Command design pattern.
     */
    public function testMain()
    {
        $player = new Player();
        $android = new Android();

        $player->setCommand(new MoveCommand($android, 'left'));

        $this->assertEquals('Android moving left.', $player->execute());
    }
}
/*
 *
 *
 * Invoker - player
 * Receiver - android
 * Command - move, rotate, shot, undo - execute
 *
 *
 *
 */
