<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Iterator;

/**
 * Sheep.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Sheep
{
    /**
     * The sheep name.
     *
     * @var string
     */
    protected $name;

    /**
     * Class constructor.
     *
     * @param string $name The sheep name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Returns the sheep name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
