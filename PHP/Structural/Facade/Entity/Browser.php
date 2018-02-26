<?php declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\Entity;

/**
 * Browser
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
interface Browser
{
    /**
     * Turn on browser.
     *
     * @return void
     */
    public function start(): void;

    /**
     * Turn off browser.
     *
     * @return void
     */
    public function close(): void;

    /**
     * Search for the movie.
     *
     * @param $title string The title of the movie
     *
     * @return void
     */
    public function searchMovie($title): void;

    /**
     * Returns the title of the movie.
     *
     * @return string
     */
    public function getTitle(): string;

    /**
     * Pres play in the browser.
     *
     * @return void
     */
    public function pressPlay(): void;

    /**
     * Press stop in the browser.
     *
     * @return void
     */
    public function pressStop(): void;
}
