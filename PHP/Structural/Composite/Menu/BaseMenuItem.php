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
     * The label of menu item.
     *
     * @var string
     */
    private $label;

    /**
     * Class constructor
     *
     * @param string $label The label of menu item
     */
    public function __construct(string $label)
    {
        $this->label = $label;
    }

    /**
     * Returns the menu item as an array.
     *
     * @return array
     */
    public function renderItem(): array
    {
        return [PropertyType::LABEL => $this->label];
    }

    /**
     * Returns the label of menu item.
     *
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * Set the label on menu item.
     *
     * @param string $label
     * @return BaseMenuItem
     */
    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }
}
