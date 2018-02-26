<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Command;

use PHP\Behavioral\Command\Commands\CommandInterface;
use PHP\Behavioral\Command\Commands\UndoableCommandInterface;

/**
 * The player `invoke` commands for the android.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Player
{
    /**
     * The command that the player invoke.
     *
     * @var CommandInterface
     */
    private $command;

    /**
     * Invoke the command.
     *
     * @return string
     */
    public function execute(): string
    {
        return $this->command->execute();
    }

    /**
     * Undo the command.
     *
     * @return string
     */
    public function undo(): string
    {
        if ($this->command instanceof UndoableCommandInterface) {
            return $this->command->undo();
        }

        return sprintf('This command cannot be undone.');
    }

    /**
     * Sets the command.
     *
     * @param CommandInterface $command
     */
    public function setCommand(CommandInterface $command): void
    {
        $this->command = $command;

        return;
    }
}
