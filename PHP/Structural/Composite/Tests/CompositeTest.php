<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\Composite\Tests;

use PHP\Structural\Composite\Menu\LabelItem;
use PHP\Structural\Composite\Menu\Menu;
use PHP\Structural\Composite\Menu\MenuItem;
use PHPUnit\Framework\TestCase;

/**
 * Test cases for the composite design pattern.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class CompositeTest extends TestCase
{
    /**
     *  Tests one menu item.
     */
    public function testOneItem(): void
    {
        $label = new LabelItem('label');

        $this->assertEquals(
            [
                'label' => 'LABEL',
            ],
            $label->renderItem()
        );

        $item = new MenuItem('All Posts', '/posts');

        $this->assertEquals(
            [
                'label' => 'All Posts',
                'url' => '/posts',
            ],
            $item->renderItem()
        );

        return;
    }

    /**
     * Test one menu and children.
     */
    public function testMenuAndChildren(): void
    {
        /*
         * Post Menu
         */
        $postMenu = new Menu('Posts');
        $tags = new MenuItem('Tags', '/tags');

        $postMenu->addItem(new MenuItem('All Posts', '/posts'))
            ->addItem(new MenuItem('Add New', '/posts/new'))
            ->addItem($tags)
            ->addItem(new MenuItem('Categories', '/categories'))
            ->removeItem($tags);

        $this->assertEquals(3, $postMenu->getNumChildItems());
        $this->assertEquals('Categories', $postMenu->getItem(2)->getLabel());

        $this->assertEquals(
            [
                [
                    'label' => 'All Posts',
                    'url' => '/posts',
                ],

                [
                    'label' => 'Add New',
                    'url' => '/posts/new',
                ],

                [
                    'label' => 'Categories',
                    'url' => '/categories',
                ],
            ],
            $postMenu->renderChildren()
        );

        $this->assertEquals(
            [
                'label' => 'Posts',
                'children' => [
                        [
                            'label' => 'All Posts',
                            'url' => '/posts',
                        ],

                        [
                            'label' => 'Add New',
                            'url' => '/posts/new',
                        ],

                        [
                            'label' => 'Categories',
                            'url' => '/categories',
                        ],
                    ],
            ],
            $postMenu->renderItem()
        );

        return;
    }

    /**
     * Tests main menu, sub-menu and children.
     */
    public function testMain(): void
    {
        $postMenu = new Menu('Posts');

        $postMenu->addItem(new MenuItem('All Posts', '/posts'));

        $this->assertEquals(1, $postMenu->getNumChildItems());
        $this->assertEquals(
            [
                'label' => 'Posts',
                'children' => [
                        [
                            'label' => 'All Posts',
                            'url' => '/posts',
                        ],
                    ],
            ],
            $postMenu->renderItem()
        );

        /*
         * Main Menu
         */

        $mainMenu = new Menu('Main Menu');

        $mainMenu->addItem(new LabelItem('Dashboard'))
            ->addItem($postMenu)
            ->addItem(new MenuItem('Comments', '/comments'));

        $this->assertEquals(3, $mainMenu->getNumChildItems());
        $this->assertEquals('Posts', $mainMenu->getItem(1)->getLabel());

        $this->assertEquals(
            [
                'label' => 'Main Menu',
                'children' => [
                        [
                            'label' => 'DASHBOARD',
                        ],
                        [
                            'label' => 'Posts',
                            'children' => [
                                    [
                                        'label' => 'All Posts',
                                        'url' => '/posts',
                                    ],
                                ],
                        ],
                        [
                            'label' => 'Comments',
                            'url' => '/comments',
                        ],
                    ],
            ],
            $mainMenu->renderItem()
        );

        return;
    }
}
