<?php

declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\Builder\Tests;

use PHP\Creation\Builder\ArticlePageBuilder;
use PHP\Creation\Builder\MainPageBuilder;
use PHP\Creation\Builder\PageDirector;
use PHPUnit\Framework\TestCase;

/**
 * Test case for Builder Design Pattern.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class BuilderTest extends TestCase
{
    /**
     * Tests the MainPageBuilder.
     */
    public function testMainPageBuilder(): void
    {
        $mainPageBuilder = new MainPageBuilder();
        $pageDirector = new PageDirector();

        $this->assertEquals(
            '<header>Builder</header><p>Lorem ipsum.</p><p>Donec ut vehicula nisl.</p><footer>(c) 2018</footer>',
            $pageDirector->buildPage($mainPageBuilder));

        return;
    }

    /**
     * Tests the ArticlePageBuilder.
     */
    public function testArticlePageBuilder(): void
    {
        $articlePageBuilder = new ArticlePageBuilder();
        $pageDirector = new PageDirector();

        $this->assertEquals(
            '<article>Article Page</article>',
            $pageDirector->buildPage($articlePageBuilder));

        return;
    }
}
