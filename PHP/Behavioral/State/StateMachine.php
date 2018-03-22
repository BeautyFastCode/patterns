<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\State;

use PHP\Behavioral\State\States\StateInterface;

/**
 * StateMachine.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class StateMachine
{
    /**
     * The current active state.
     *
     * @var StateInterface
     */
    private $currentState;

    /**
     * Array of states.
     *
     * @var array
     */
    private $states;

    /**
     * The game log.
     *
     * @var array
     */
    private $gameLog;

    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->states = [];
        $this->gameLog = [];
        $this->currentState = null;
    }

    /**
     * Update the State Machine.
     *
     * @param int $elapsedTime How much time has elapsed
     *
     * @return StateMachine
     */
    public function update(int $elapsedTime): self
    {
        $this->currentState->update($elapsedTime);

        $this->gameLog[] = $this->currentState->render();

        return $this;
    }

    /**
     * Changes the current state.
     *
     * @param string $stateName The name of the state to activate
     *
     * @return StateMachine
     */
    public function change(string $stateName): self
    {
        if (null !== $this->currentState) {
            $this->gameLog[] = $this->currentState->exit();
        }

        if (!empty($this->states)) {
            $this->currentState = $this->states[$stateName];
            $this->gameLog[] = $this->currentState->enter();
        }

        return $this;
    }

    /**
     * Adds new state to the State Machine.
     *
     * @param string         $stateName The state name
     * @param StateInterface $state     The state object
     *
     * @return StateMachine
     */
    public function add(string $stateName, StateInterface $state): self
    {
        $this->states[$stateName] = $state;

        return $this;
    }

    /**
     * Returns the game log.
     *
     * @return array
     */
    public function readGameLog(): array
    {
        return $this->gameLog;
    }
}
