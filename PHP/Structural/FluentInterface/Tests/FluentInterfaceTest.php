<?php

declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\FluentInterface\Tests;

use PHP\Structural\FluentInterface\QueryBuilder;
use PHPUnit\Framework\TestCase;

/**
 * Test case for the Fluent Interface Design Pattern.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class FluentInterfaceTest extends TestCase
{
    /**
     * Tests the fluent interface for build the query.
     */
    public function testQueryBuilder(): void
    {
        $queryBuilder = new QueryBuilder();

        $queryBuilder
            ->select('u')
            ->from('User u')
            ->where('u.id = :identifier')
            ->orderBy('u.name', 'ASC');

        $this->assertEquals(
            'SELECT u FROM User u WHERE u.id = :identifier ORDER u.name = ASC',
            $queryBuilder->build()
        );

        return;
    }
}
