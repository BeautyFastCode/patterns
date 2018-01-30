<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Strategy2\Unit;

use PHP\Behavioral\Strategy2\Behavior\BehaviorInterface;

/**
 * BaseUnit
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
abstract class BaseUnit
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
     * Do some action, the behavior changes
     *
     * @return string
     */
    public function action(): string
    {
        return $this->behavior->action();
    }

    /**
     * Says something
     *
     * @return string
     */
    abstract public function speak(): string;

    /**
     * Returns the name of the Unit
     *
     * @return string
     */
    protected function getName(): string
    {
        return $this->name;
    }

    /**
     * Returns the short class name
     *
     * @return string
     */
    protected function getClassName(): string
    {
        return (new \ReflectionClass($this))->getShortName();
    }
}
