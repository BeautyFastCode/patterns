<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Observer\Publisher;

use PHP\Behavioral\Observer\Subscriber\SubscriberInterface;

/**
 * PublisherInterface.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
interface PublisherInterface
{
    /**
     * Add subscriber to list.
     *
     * @param SubscriberInterface $subscriber The Subscriber
     *
     * @return string
     */
    public function addSubscriber(SubscriberInterface $subscriber): string;

    /**
     * Remove subscriber from list.
     *
     * @param SubscriberInterface $subscriber The Subscriber
     *
     * @return string
     */
    public function removeSubscriber(SubscriberInterface $subscriber): string;

    /**
     * Create message for subscribers - change object state.
     *
     * @param $message string The message for subscribers
     */
    public function sendMessage($message);

    /**
     * Returns the amount of subscribers from subscriber list.
     *
     * @return int
     */
    public function getNumSubscribers(): int;
}
