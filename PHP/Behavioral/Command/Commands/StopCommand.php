<?php declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Command\Commands;

use PHP\Behavioral\Command\Android;

/**
 * StopCommand.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class StopCommand implements CommandInterface
{
    /**
     * Who executes the command.
     *
     * @var Android
     */
    private $android;

    /**
     * Class constructor.
     *
     * @param Android $android Who executes the command
     */
    public function __construct(Android $android)
    {
        $this->android = $android;
    }

    /**
     * {@inheritdoc}
     */
    public function execute(): string
    {
        return $this->android->stop();
    }
}
