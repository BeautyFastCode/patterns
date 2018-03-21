<?php

declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Other\EAV;

/**
 * Attribute
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Attribute
{
    /**
     * The values of the attribute.
     *
     * @var Value[]
     */
    private $values;

    /**
     * The name of the attribute.
     *
     * @var string
     */
    private $name;

    /**
     * Class constructor
     *
     * @param string $name The name of the attribute
     */
    public function __construct(string $name)
    {
        $this->values = [];
        $this->name = $name;
    }

    /**
     * Add value to the attribute.
     *
     * @param Value $value
     */
    public function addValue(Value $value): void
    {
        $this->values[] = $value;

        return;
    }

    /**
     * Returns the attribute name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
