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
 * RotateCommand.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class RotateCommand implements UndoableCommandInterface
{
    /**
     * Who executes the command.
     *
     * @var Android
     */
    private $android;

    /**
     * Rotate direction.
     *
     * @var string
     */
    private $direction;

    /**
     * Class constructor.
     *
     * @param Android $android   Who executes the command
     * @param string  $direction Rotate direction
     */
    public function __construct(Android $android, $direction)
    {
        $this->android = $android;
        $this->direction = $direction;
    }

    /**
     * {@inheritdoc}
     */
    public function execute(): string
    {
        return $this->android->rotate($this->direction);
    }

    /**
     * {@inheritdoc}
     */
    public function undo(): string
    {
        $undoDirection = Direction::LEFT;

        if (Direction::LEFT === $this->direction) {
            $undoDirection = Direction::RIGHT;
        }

        return $this->android->rotate($undoDirection);
    }
}
