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
 * GameEngine.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
abstract class GameEngine
{
    /**
     * Recipe for a game.
     *
     * @return array
     */
    final public function play(): array
    {
        $gameState = [];

        $gameState[] = $this->preload();
        $gameState[] = $this->create();
        $gameState[] = $this->loop();

        // Hook
        if (null !== $this->move()) {
            $gameState[] = $this->move();
        }

        $gameState[] = $this->end();

        return $gameState;
    }

    /**
     * The game loads assets.
     *
     * @return string
     */
    private function preload(): string
    {
        return sprintf('Loading the game assets');
    }

    /**
     * Implement this method, create some game content.
     *
     * @return string
     */
    abstract protected function create(): string;

    /**
     * Game works.
     *
     * @return string
     */
    private function loop(): string
    {
        return sprintf('Rendering');
    }

    /**
     * You can override this method if you want, it's optional.
     *
     * @return null|string
     */
    protected function move(): ?string
    {
        return null;
    }

    /**
     * End of this game.
     *
     * @return string
     */
    private function end(): string
    {
        return sprintf('You\'re dead, game over');
    }
}
