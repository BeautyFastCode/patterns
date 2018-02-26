<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Observer\Subscriber;

/**
 * Subscriber.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Subscriber implements SubscriberInterface
{
    /**
     * The list of messages.
     *
     * @var array
     */
    private $messages;

    /**
     * The subscriber name.
     *
     * @var string
     */
    private $name;

    /**
     * Constructor for the subscriber class.
     *
     * @param string $name The subscriber name
     */
    public function __construct($name)
    {
        $this->messages = [];
        $this->name = $name;
    }

    /**
     * {@inheritdoc}
     */
    public function getNumMessages(): int
    {
        return count($this->messages);
    }

    /**
     * {@inheritdoc}
     */
    public function setMessage($message)
    {
        $this->messages[] = $message;
    }

    /**
     * {@inheritdoc}
     */
    public function removeMessages()
    {
        $this->messages = [];
    }

    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return $this->name;
    }
}
