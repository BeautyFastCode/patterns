<?php

declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\Flyweight;

/**
 * Tree
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Tree
{
    /**
     * The X position of the tree.
     *
     * @var int
     */
    private $positionX;

    /**
     * The Y position of the tree.
     *
     * @var int
     */
    private $positionY;

    /**
     * Class constructor
     *
     * @param int $positionX The X position of the tree
     * @param int $positionY The Y position of the tree
     */
    public function __construct(int $positionX, int $positionY)
    {
        $this->positionX = $positionX;
        $this->positionY = $positionY;
    }

    /**
     * Display the tree on the screen.
     *
     * @param string $color The color of the tree
     *
     * @return string
     */
    public function render(string $color): string
    {
        return sprintf(
            'The $s Tree is showing on position: %s, %s.',
            $color,
            $this->positionX,
            $this->positionY);
    }

    /**
     * Returns the position of the tree.
     *
     * @return array
     */
    public function getPosition(): array
    {
        return [
            $this->positionX,
            $this->positionY,
        ];
    }
}
