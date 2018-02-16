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
use PHP\Behavioral\Command\Commands\StopCommand;
use PHP\Behavioral\Command\Commands\RotateCommand;
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
        $this->assertEquals('Android moves left.', $player->execute());

        $player->setCommand(new MoveCommand($android, 'top'));
        $this->assertEquals('Android moves top.', $player->execute());

        $player->setCommand(new StopCommand($android));
        $this->assertEquals('Android stops.', $player->execute());
    }

    /**
     * Test undoable command
     */
    public function testUndo()
    {
        $player = new Player();
        $android = new Android();

        $player->setCommand(new RotateCommand($android, 'left'));
        $this->assertEquals('Android rotates left.', $player->execute());
        $this->assertEquals('Android rotates right.', $player->undo());

        $player->setCommand(new MoveCommand($android, 'down'));
        $this->assertEquals('Android moves down.', $player->execute());
        $this->assertEquals('This command cannot be undone.', $player->undo());
    }
}
