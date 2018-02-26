<?php declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Command\Commands;

/**
 * UndoableCommandInterface.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
interface UndoableCommandInterface extends CommandInterface
{
    /**
     * This command can be undone.
     *
     * @return string
     */
    public function undo(): string;
}
