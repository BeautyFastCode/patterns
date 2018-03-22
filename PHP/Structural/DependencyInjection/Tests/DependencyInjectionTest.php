<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\DependencyInjection\Test;

use PHP\Structural\DependencyInjection\Author;
use PHP\Structural\DependencyInjection\Question;
use PHPUnit\Framework\TestCase;

/**
 * Test cases for the Dependency Injection Design Pattern.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class DependencyInjectionTest extends TestCase
{
    /**
     * Tests the dependency injection.
     */
    public function testMain(): void
    {
        $author = new Author('Jon', 'Bean');

        $this->assertEquals('Jon', $author->getFirstName());
        $this->assertEquals('Bean', $author->getLastName());

        $question = new Question('How are you?', $author);

        $this->assertEquals('How are you?', $question->getQuestion());
        $this->assertEquals($author, $question->getAuthor());

        return;
    }
}
