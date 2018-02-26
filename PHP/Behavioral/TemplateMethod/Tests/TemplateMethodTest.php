<?php

declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\TemplateMethod\Tests;

use PHP\Behavioral\TemplateMethod\GameEngine\AsteroidsGame;
use PHP\Behavioral\TemplateMethod\GameEngine\SnakeGame;
use PHPUnit\Framework\TestCase;

/**
 * TemplateMethodTest, test cases for the Template Method design pattern.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class TemplateMethodTest extends TestCase
{
    /**
     * Main test for Template Method design pattern.
     */
    public function testMain(): void
    {
        $expected = [
            'Loading the game assets',
            'Creating the Ship sprite',
            'Rendering',
            'You\'re dead, game over',
        ];

        $asteroids = new AsteroidsGame();
        $this->assertEquals($expected, $asteroids->play());

        $expected = [
            'Loading the game assets',
            'Creating the Snake sprite',
            'Rendering',
            'The Snake run away',
            'You\'re dead, game over',
        ];

        $snake = new SnakeGame();
        $this->assertEquals($expected, $snake->play());

        return;
    }
}
