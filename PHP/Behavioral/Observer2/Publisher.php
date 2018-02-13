<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Observer2;

use SplObjectStorage;
use SplObserver;
use SplSubject;

/**
 * Publisher
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Publisher implements SplSubject
{
    /**
     * The publisher name.
     *
     * @var string
     */
    private $name;

    /**
     * The message to send.
     *
     * @var string
     */
    private $message;

    /**
     * The storage for subscribers.
     *
     * @var SplObjectStorage
     */
    private $subscribers;

    /**
     * Constructor for the publisher class.
     *
     * @param string $name The publisher name
     */
    public function __construct($name)
    {
        $this->subscribers = new SplObjectStorage();
        $this->name = $name;
    }

    /**
     * {@inheritdoc}
     */
    public function attach(SplObserver $observer)
    {
        $this->subscribers->attach($observer);
    }

    /**
     * {@inheritdoc}
     */
    public function detach(SplObserver $observer)
    {
        /** @var Subscriber $observer */
        $observer->removeMessages();
        $this->subscribers->detach($observer);
    }

    /**
     * {@inheritdoc}
     */
    public function notify()
    {
        foreach ($this->subscribers as $subscriber) {
            $subscriber->update($this);
        }
    }

    /**
     * Create message for subscribers, and notify them
     *
     * @param $message
     */
    public function sendMessage($message)
    {
        $this->message = sprintf("%s: %s\n", $this->name, $message);
        $this->notify();
    }

    /**
     * Returns the amount of subscribers
     *
     * @return int
     */
    public function getNumSubscribers(): int
    {
        return $this->subscribers->count();
    }

    /**
     * Get the message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}
