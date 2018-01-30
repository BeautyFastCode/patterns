<?php

/*
 * (c)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Strategy;

use PHP\Behavioral\Strategy\Behavior\BehaviorInterface;

/**
 * Unit
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Unit
{
    /**
     * The name of the Unit
     *
     * @var string
     */
    private $name;

    /**
     * The short class name
     *
     * @var string
     */
    private $className;

    /**
     * What behavior have unit
     *
     * @var BehaviorInterface
     */
    private $behavior;

    /**
     * @param string $name The name of the Unit
     * @param        $behavior
     */
    public function __construct($name, BehaviorInterface $behavior)
    {
        $this->name = $name;
        $this->className = $this->getClassName();
        $this->behavior = $behavior;
    }

    /**
     * Says something
     */
    public function speak()
    {
        printf("%s says: I'm the %s\n", $this->className, $this->name);

        // behavior changes
        $this->behavior->action();
    }

    /**
     * Returns the short class name
     *
     * @return string
     */
    public function getClassName()
    {
        return (new \ReflectionClass($this))->getShortName();
    }
}
