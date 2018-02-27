<?php

declare(strict_types = 1);

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
     * Tests the composite design pattern
     */
    public function testMain(): void
    {
        /*
         * Post Menu
         */
        $postMenuExpected = [
            'Posts',
            [
                'All Posts',
                'Add New',
                'Categories',
                'Tags',
            ],
        ];

        $postMenu = new Menu('Posts');

        $postMenu->addItem(new MenuItem('All Posts'))
            ->addItem(new MenuItem('Add New'))
            ->addItem(new MenuItem('Categories'))
            ->addItem(new MenuItem('Tags'));

        $this->assertEquals(4, $postMenu->getNumChildItems());
        $this->assertEquals('Tags', $postMenu->getItem(3)->getLabel());
        $this->assertEquals($postMenuExpected, $postMenu->render());

        /*
         * Main Menu
         */
        $mainMenuExpected = [
            'Main Menu',
            [
                'Dashboard',
                [
                    'Posts',
                    [
                        'All Posts',
                        'Add New',
                        'Categories',
                        'Tags',
                    ],
                ],
                'Comments',
                'Users',
                'Settings',
            ],
        ];

        $mainMenu = new Menu('Main Menu');

        $mainMenu->addItem(new LabelItem('Dashboard'))
            ->addItem($postMenu)
            ->addItem(new MenuItem('Comments'))
            ->addItem(new MenuItem('Users'))
            ->addItem(new MenuItem('Settings'));

        $this->assertEquals(5, $mainMenu->getNumChildItems());
        $this->assertEquals('Posts', $mainMenu->getItem(1)->getLabel());
        $this->assertEquals($mainMenuExpected, $mainMenu->render());


        return;
    }

}
