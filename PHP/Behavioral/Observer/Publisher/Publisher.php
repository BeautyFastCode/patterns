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
 * Publisher
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Publisher implements PublisherInterface
{
    /**
     * The publisher name.
     *
     * @var string
     */
    private $name;

    /**
     * The list of subscribers.
     *
     * @var array
     */
    private $subscribers;

    /**
     * Constructor for the publisher class.
     *
     * @param string $name The publisher name
     */
    public function __construct($name)
    {
        $this->subscribers = [];
        $this->name = $name;
    }

    /**
     * {@inheritdoc}
     */
    public function addSubscriber(SubscriberInterface $subscriber): string
    {
        $this->subscribers[] = $subscriber;

        return sprintf("Subscriber %s was added\n", $subscriber->getName());
    }

    /**
     * {@inheritdoc}
     */
    public function removeSubscriber(SubscriberInterface $subscriber): string
    {
        $key = array_search($subscriber, $this->subscribers);

        $subscriber->removeMessages();
        unset($this->subscribers[$key]);

        return sprintf("Subscriber %s was removed\n", $subscriber->getName());
    }

    /**
     * {@inheritdoc}
     */
    public function sendMessage($message)
    {
        $message = sprintf("%s: %s\n", $this->name, $message);

        foreach ($this->subscribers as $subscriber) {
            $subscriber->setMessage($message);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getNumSubscribers(): int
    {
        return count($this->subscribers);
    }
}
