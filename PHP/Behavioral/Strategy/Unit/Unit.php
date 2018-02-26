<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Strategy\Unit;

use PHP\Behavioral\Strategy\Behavior\BehaviorInterface;

/**
 * Unit.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Unit
{
    /**
     * The name of the Unit.
     *
     * @var string
     */
    private $name;

    /**
     * The short class name.
     *
     * @var string
     */
    private $className;

    /**
     * What behavior have unit.
     *
     * @var BehaviorInterface
     */
    private $behavior;

    /**
     * @param string            $name     The name of the Unit
     * @param BehaviorInterface $behavior The behavior of the Unit
     */
    public function __construct(string $name, BehaviorInterface $behavior)
    {
        $this->name = $name;
        $this->className = $this->getClassName();
        $this->behavior = $behavior;
    }

    /**
     * Says something.
     *
     * @return string
     */
    public function speak(): string
    {
        return sprintf("%s says: I'm the %s\n", $this->className, $this->name);
    }

    /**
     * Behavior changes depends of interface.
     *
     * @return string
     */
    public function behaviorAction(): string
    {
        return $this->behavior->action();
    }

    /**
     * Returns the short class name.
     *
     * @return string
     */
    private function getClassName(): string
    {
        return (new \ReflectionClass($this))->getShortName();
    }
}
