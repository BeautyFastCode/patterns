<?php

declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\Composite\Menu;

/**
 * BaseMenuItem
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
abstract class BaseMenuItem
{
    /**
     * @var string
     */
    private $label;

    public function __construct(string $label)
    {
        $this->label = $label;
    }

    public function addItem(BaseMenuItem $menuItem): BaseMenuItem
    {
        return $this;
    }

    public function removeItem(BaseMenuItem $menuItem): BaseMenuItem
    {
        return $this;
    }

    public function getChildItem(int $childItem): BaseMenuItem
    {
        return $this;
    }

    public function getNumChildItems(): int
    {
        return 1;
    }

    public function render(): array
    {
        return [];
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     *
     * @return BaseMenuItem
     */
    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }
}
