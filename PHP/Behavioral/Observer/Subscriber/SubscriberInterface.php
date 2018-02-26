<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Observer\Subscriber;

/**
 * SubscriberInterface.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
interface SubscriberInterface
{
    /**
     * Check amount messages from subscriber.
     *
     * @return int The amount messages
     */
    public function getNumMessages(): int;

    /**
     * Set the message.
     *
     * @param $message
     */
    public function setMessage($message);

    /**
     * Remove all messages.
     */
    public function removeMessages();

    /**
     * Get subscriber name.
     *
     * @return string The name
     */
    public function getName(): string;
}
