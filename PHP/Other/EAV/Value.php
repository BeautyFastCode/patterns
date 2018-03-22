<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Other\EAV;

/**
 * Value.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Value
{
    /**
     * The attribute of the value.
     *
     * @var Attribute
     */
    private $attribute;

    /**
     * The name of the value.
     *
     * @var string
     */
    private $name;

    /**
     * Class constructor.
     *
     * @param Attribute $attribute The attribute of the value
     * @param string    $name      The name of the value
     */
    public function __construct(Attribute $attribute, string $name)
    {
        $this->attribute = $attribute;
        $this->name = $name;

        $this->attribute->addValue($this);
    }

    /**
     * Returns the array representations of this object.
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            $this->attribute->getName(),
            $this->name,
        ];
    }
}
