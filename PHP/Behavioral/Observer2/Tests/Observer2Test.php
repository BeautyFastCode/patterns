<?php declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Observer2\Tests;

use PHP\Behavioral\Observer2\Publisher;
use PHP\Behavioral\Observer2\Subscriber;
use PHPUnit\Framework\TestCase;

/**
 * Observer2Test, test cases for the Observer pattern.
 *
 * Standard PHP Library (SPL): http://php.net/manual/en/book.spl.php
 * SplSubject - Publisher
 * SplObserver - Subscriber
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Observer2Test extends TestCase
{
    /**
     * The main test for Observer pattern.
     */
    public function testMain(): void
    {
        $publisher = new Publisher('IT News');

        $subscriberA = new Subscriber('Alan');
        $subscriberB = new Subscriber('Brad');
        $subscriberC = new Subscriber('Joe');

        $publisher->attach($subscriberA);
        $publisher->attach($subscriberB);
        $publisher->attach($subscriberC);

        $this->assertEquals(3, $publisher->getNumSubscribers());

        /*
         * Creates some messages
         */
        $publisher->sendMessage('One');
        $publisher->sendMessage('Two');

        /*
         * Checks if all subscribers are informed
         */
        $this->assertEquals(2, $subscriberA->getNumMessages());
        $this->assertEquals(2, $subscriberB->getNumMessages());
        $this->assertEquals(2, $subscriberC->getNumMessages());

        /*
         * Remove one subscriber
         */
        $publisher->detach($subscriberB);
        $this->assertEquals(2, $publisher->getNumSubscribers());

        /*
         * Next message
         */
        $publisher->sendMessage('Three');

        /*
         * Checks if subscribers are informed
         */
        $this->assertEquals(3, $subscriberA->getNumMessages());
        $this->assertEquals(0, $subscriberB->getNumMessages());
        $this->assertEquals(3, $subscriberC->getNumMessages());

        return;
    }
}
