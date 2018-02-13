<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Observer\Tests;

use PHP\Behavioral\Observer\Publisher\Publisher;
use PHP\Behavioral\Observer\Subscriber\Subscriber;
use PHPUnit\Framework\TestCase;

/**
 * ObserverTest
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class ObserverTest extends TestCase
{
    /**
     * The main test for Observer pattern.
     */
    public function testMain()
    {
        $publisher = new Publisher('IT News');

        $subscriberA = new Subscriber('Alan');
        $subscriberB = new Subscriber('Brad');
        $subscriberC = new Subscriber('Joe');

        $publisher->addSubscriber($subscriberA);
        $publisher->addSubscriber($subscriberB);
        $publisher->addSubscriber($subscriberC);

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
        $publisher->removeSubscriber($subscriberB);
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
    }
}
