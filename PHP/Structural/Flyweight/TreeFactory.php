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
 * TreeFactory
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class TreeFactory
{
    /**
     * The forest of the trees.
     *
     * @var Tree[]
     */
    private $forest;

    /**
     * Class constructor
     */
    public function __construct()
    {
        $this->forest = [];
    }

    /**
     * Creates trees without any optimization.
     *
     * @param int $positionX The X position of the tree
     * @param int $positionY The Y position of the tree
     *
     * @return Tree
     */
    public function getHeavyTree(int $positionX, int $positionY): Tree
    {
        $this->forest[] = new Tree($positionX, $positionY);

        return end($this->forest);
    }

    /**
     * Creates trees with optimization.
     *
     * @param int $positionX The X position of the tree
     * @param int $positionY The Y position of the tree
     *
     * @return Tree
     */
    public function getFlyweightTree(int $positionX, int $positionY): Tree
    {
        foreach ($this->forest as $tree) {

            if ($tree->getPosition() === [
                    $positionX,
                    $positionY,
                ]
            ) {
                /*
                 * Don't create the same trees.
                 */
                return end($this->forest);
            }
        }
        return $this->getHeavyTree($positionX, $positionY);
    }

    /**
     * How many trees are in the forest?
     *
     * @return int|void
     */
    public function count(): int
    {
        return count($this->forest);
    }
}
