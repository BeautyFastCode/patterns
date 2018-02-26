<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Command\Commands;

use PHP\Behavioral\Command\Android;

/**
 * MoveCommand.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class MoveCommand implements CommandInterface
{
    /**
     * Who executes the command.
     *
     * @var Android
     */
    private $android;

    /**
     * Move direction.
     *
     * @var string
     */
    private $direction;

    /**
     * Class constructor.
     *
     * @param Android $android   Who executes the command
     * @param string  $direction Move direction
     */
    public function __construct(Android $android, string $direction)
    {
        $this->android = $android;
        $this->direction = $direction;
    }

    /**
     * {@inheritdoc}
     */
    public function execute(): string
    {
        return $this->android->move($this->direction);
    }
}
