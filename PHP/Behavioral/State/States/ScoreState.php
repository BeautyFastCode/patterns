<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\State\States;

/**
 * ScoreState.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class ScoreState implements StateInterface
{
    /**
     * Yor score.
     *
     * @var int
     */
    private $score;

    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->score = 0;
    }

    /**
     * {@inheritdoc}
     */
    public function update(int $elapsedTime): void
    {
        ++$this->score;

        return;
    }

    /**
     * {@inheritdoc}
     */
    public function render(): string
    {
        return sprintf('Your score is %s', $this->score);
    }

    /**
     * {@inheritdoc}
     */
    public function enter(): string
    {
        return sprintf('You go to the score screen');
    }

    /**
     * {@inheritdoc}
     */
    public function exit(): string
    {
        return sprintf('You are leaving the score screen');
    }
}
