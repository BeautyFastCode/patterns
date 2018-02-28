<?php

declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\State\Tests;

use PHP\Behavioral\State\StateMachine;
use PHP\Behavioral\State\States\BattleState;
use PHP\Behavioral\State\States\MainMenuState;
use PHP\Behavioral\State\States\MapState;
use PHP\Behavioral\State\States\ScoreState;
use PHPUnit\Framework\TestCase;

/**
 * Test cases for the State design pattern.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class StateTest extends TestCase
{
    /**
     * Tests for the State design pattern.
     */
    public function testMain(): void
    {
        $stateMachine = new StateMachine();

        $stateMachine->add('Main Menu', new MainMenuState())
            ->add('Map', new MapState())
            ->add('Battle', new BattleState())
            ->add('Score', new ScoreState())
            ->change('Main Menu')
            ->update(1);

        $this->assertEquals(
            [
                'You go to the Main Menu',
                'Displays Main Menu',
            ]
            , $stateMachine->readGameLog());

        $stateMachine->change('Map');
        $stateMachine->update(2);

        $this->assertEquals(
            [
                'You go to the Main Menu',
                'Displays Main Menu',
                'You are leaving the Main Menu',
                'You enter the village',
                'You spend 2h in the village',
            ]
            , $stateMachine->readGameLog());

        $stateMachine->change('Battle');
        $stateMachine->update(3);

        $this->assertEquals(
            [
                'You go to the Main Menu',
                'Displays Main Menu',
                'You are leaving the Main Menu',
                'You enter the village',
                'You spend 2h in the village',
                'You exit the village',
                'Your life is 100',
                'You are in the middle of the battle',
            ]
            , $stateMachine->readGameLog());

        $stateMachine->change('Map');
        $stateMachine->update(4);

        $this->assertEquals(
            [
                'You go to the Main Menu',
                'Displays Main Menu',
                'You are leaving the Main Menu',
                'You enter the village',
                'You spend 2h in the village',
                'You exit the village',
                'Your life is 100',
                'You are in the middle of the battle',
                'Your life is 99',
                'You enter the village',
                'You spend 4h in the village',
            ]
            , $stateMachine->readGameLog());

        $stateMachine->change('Score');
        $stateMachine->update(5);

        $this->assertEquals(
            [
                'You go to the Main Menu',
                'Displays Main Menu',
                'You are leaving the Main Menu',
                'You enter the village',
                'You spend 2h in the village',
                'You exit the village',
                'Your life is 100',
                'You are in the middle of the battle',
                'Your life is 99',
                'You enter the village',
                'You spend 4h in the village',
                'You exit the village',
                'You go to the score screen',
                'Your score is 1',
            ]
            , $stateMachine->readGameLog());

        return;
    }
}
