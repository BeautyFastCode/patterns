<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Iterator2;

use Iterator;

/**
 * Herd.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Herd implements Iterator
{
    /**
     * The herd of sheeps.
     *
     * @var array
     */
    private $herd;

    /**
     * Pointer to current sheep.
     *
     * @var int
     */
    private $currentSheep;

    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->herd = [];
        $this->currentSheep = 0;
    }

    /**
     * Adds sheep to the herd.
     *
     * @param Sheep $sheep
     *
     * @return Herd
     */
    public function addSheep(Sheep $sheep): self
    {
        $this->herd[] = $sheep;

        return $this;
    }

    /**
     * Remove sheep from the herd.
     *
     * @param string $sheepName The name of the sheep to be removed
     *
     * @return Herd
     */
    public function removeSheep(string $sheepName): self
    {
        foreach ($this->herd as $key => $sheep) {
            /** @var Sheep $sheep */
            if ($sheep->getName() === $sheepName) {
                unset($this->herd[$key]);
            }
        }

        /*
         * Re-indexing the array
         */
        $this->herd = array_values($this->herd);

        return $this;
    }

    /**
     * Counts sheep in the herd.
     *
     * @return int
     */
    public function countSheeps(): int
    {
        return count($this->herd);
    }

    /**
     * {@inheritdoc}
     */
    public function current(): Sheep
    {
        return $this->herd[$this->currentSheep];
    }

    /**
     * {@inheritdoc}
     */
    public function next(): void
    {
        ++$this->currentSheep;

        return;
    }

    /**
     * {@inheritdoc}
     */
    public function key(): int
    {
        return $this->currentSheep;
    }

    /**
     * {@inheritdoc}
     */
    public function valid(): bool
    {
        return isset($this->herd[$this->currentSheep]);
    }

    /**
     * {@inheritdoc}
     */
    public function rewind(): void
    {
        $this->currentSheep = 0;

        return;
    }
}
