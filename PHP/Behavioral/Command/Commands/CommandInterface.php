<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Command\Commands;

/**
 * CommandInterface.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
interface CommandInterface
{
    /**
     * Execute a command.
     *
     * @return string The response
     */
    public function execute(): string;
}
