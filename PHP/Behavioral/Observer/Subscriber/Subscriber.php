<?php

declare(strict_types=1);

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
    public function setMessage(string $message): void
    {
        $this->messages[] = $message;

        return;
    }

    /**
     * {@inheritdoc}
     */
    public function removeMessages(): void
    {
        $this->messages = [];

        return;
    }

    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return $this->name;
    }
}
