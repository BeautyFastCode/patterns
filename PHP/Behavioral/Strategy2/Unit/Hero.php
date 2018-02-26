<?php declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Strategy2\Unit;

use PHP\Behavioral\Strategy2\Behavior\DoNothing;

/**
 * Hero.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Hero extends BaseUnit
{
    /**
     * The power of the Hero.
     *
     * @var int
     */
    private $power;

    /**
     * {@inheritdoc}
     *
     * @param string $power The power of the Hero
     */
    public function __construct(string $name, int $power)
    {
        parent::__construct($name, new DoNothing());

        $this->power = $power;
    }

    /**
     * {@inheritdoc}
     */
    public function speak(): string
    {
        return sprintf(
            "I'm %s. I'm the %s. The Hero don't speak, and do nothing.\n The Hero has the Power %s MW\n",
            $this->getName(),
            $this->getClassName(),
            $this->power
        );
    }
}
