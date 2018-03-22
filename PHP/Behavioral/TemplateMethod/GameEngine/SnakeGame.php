<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\TemplateMethod\GameEngine;

/**
 * SnakeGame.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class SnakeGame extends GameEngine
{
    /**
     * {@inheritdoc}
     */
    protected function create(): string
    {
        return sprintf('Creating the Snake sprite');
    }

    /**
     * {@inheritdoc}
     */
    protected function move(): ?string
    {
        return sprintf('The Snake run away');
    }
}
