<?php declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\Adapter;

use PHP\Structural\Adapter\Vendor\RobotInterface;

/**
 * CyborgAdapter
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class CyborgAdapter implements CyborgInterface
{
    /**
     * A robot that needs to be adapted.
     *
     * @var RobotInterface
     */
    private $robot;

    /**
     * Class constructor
     *
     * @param RobotInterface $robot A robot that needs to be adapted
     */
    public function __construct(RobotInterface $robot)
    {
        $this->robot = $robot;
    }

    /**
     * Transform robot->canWalk() to robot->move()
     *
     * {@inheritdoc}
     */
    public function move(): string
    {
        $walk = $this->robot->canWalk();
        $nameSpace = explode("\\", $walk[0]);

        return sprintf('%s moves.', $nameSpace[4]);
    }

    /**
     * Transform robot->canSpeak() to robot->says()
     *
     * {@inheritdoc}
     */
    public function says(): string
    {
        return strtr(ucfirst(strtolower($this->robot->canSpeak())), 'r', 'R');
    }
}
