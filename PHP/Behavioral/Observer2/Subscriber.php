<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Observer2;

use SplObserver;
use SplSubject;

/**
 * Subscriber
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Subscriber implements SplObserver
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
    public function update(SplSubject $subject)
    {
        /** @var Publisher $subject */
        $this->messages[] = $subject->getMessage();
    }

    /**
     * Returns count messages.
     *
     * @return int
     */
    public function getNumMessages(): int
    {
        return count($this->messages);
    }

    /**
     * Remove all messages.
     */
    public function removeMessages()
    {
        $this->messages = [];
    }
}
