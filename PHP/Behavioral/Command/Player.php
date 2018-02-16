<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Command;

use PHP\Behavioral\Command\Commands\CommandInterface;

/**
 * The player `invoke` commands for the android.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Player
{
    /**
     * @var CommandInterface
     */
    private $command;

    public function execute(): string
    {
        return $this->command->execute();
    }

    /**
     * @param CommandInterface $command
     */
    public function setCommand(CommandInterface $command)
    {
        $this->command = $command;
    }
}
