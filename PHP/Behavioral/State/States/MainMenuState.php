<?php

declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\State\States;

/**
 * MainMenuState
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class MainMenuState implements StateInterface
{
    /**
     * {@inheritdoc}
     */
    public function update(int $elapsedTime): void
    {
        // Nothing to update

        return;
    }

    /**
     * {@inheritdoc}
     */
    public function render(): string
    {
       return sprintf('Displays Main Menu');
    }

    /**
     * {@inheritdoc}
     */
    public function enter(): string
    {
        return sprintf('You go to the Main Menu');
    }

    /**
     * {@inheritdoc}
     */
    public function exit(): string
    {
        return sprintf('You are leaving the Main Menu');
    }
}
