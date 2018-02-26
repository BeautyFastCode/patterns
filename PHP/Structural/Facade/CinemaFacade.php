<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\Facade;

use PHP\Structural\Entity\Browser;
use PHP\Structural\Entity\Laptop;
use PHP\Structural\Entity\System;

/**
 * CinemaFacade.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class CinemaFacade
{
    /**
     * @var System
     */
    private $system;

    /**
     * @var Laptop
     */
    private $laptop;

    /**
     * @var Browser
     */
    private $browser;

    /**
     * Class constructor.
     *
     * @param System  $system
     * @param Laptop  $laptop
     * @param Browser $browser
     */
    public function __construct(System $system, Laptop $laptop, Browser $browser)
    {
        $this->system = $system;
        $this->laptop = $laptop;
        $this->browser = $browser;
    }

    /**
     * Start watch the movie.
     *
     * @param $title string The title of the movie
     */
    public function startWatchMovie(string $title): void
    {
        $this->laptop->on();
        $this->system->login();
        $this->browser->start();
        $this->browser->searchMovie($title);
        $this->browser->pressPlay();
        $this->system->setVolume(7);

        return;
    }

    /**
     * Stop watch the movie.
     */
    public function stopWatchMovie(): void
    {
        $this->browser->pressStop();
        $this->browser->close();
        $this->system->logout();
        $this->laptop->off();

        return;
    }
}
