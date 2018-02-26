<?php declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\Entity;

/**
 * System
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
interface System
{
    /**
     * Login to the system.
     *
     * @return void
     */
    public function login(): void;

    /**
     * Log out from the system.
     *
     * @return void
     */
    public function logout(): void;

    /**
     * Sets the sound volume.
     *
     * @param $volume int
     *
     * @return void
     */
    public function setVolume(int $volume): void;
}
