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
     * @param string $message
     */
    public function setMessage(string $message): void;

    /**
     * Remove all messages.
     */
    public function removeMessages(): void;

    /**
     * Get subscriber name.
     *
     * @return string The name
     */
    public function getName(): string;
}
