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
 * Entity
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Entity
{
    /**
     * The values for the entity.
     *
     * @var Value[]
     */
    private $values;

    /**
     * The name of the entity.
     */
    private $name;

    /**
     * Class constructor
     *
     * @param string $name The name of the entity
     */
    public function __construct(string $name)
    {
        $this->values = [];
        $this->name = $name;
    }

    /**
     * Add the value to the entity.
     *
     * @param Value $value
     */
    public function addValue(Value $value): void
    {
        $this->values[] = $value;

        return;
    }

    /**
     * Returns the array representations of this object.
     *
     * @return array
     */
    public function toArray():array
    {
        $entity = [$this->name];

        foreach ($this->values as $value) {
            /**@var Value $value */
            $entity[] = $value->toArray();
        }

        return $entity;
    }
}
