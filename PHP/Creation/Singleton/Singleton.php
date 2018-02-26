<?php declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\Singleton;

/**
 * Singleton, classic example
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Singleton
{
    /**
     * Only one instance in whole program.
     *
     * @var Singleton
     */
    public static $uniqueInstance;

    /***
     * Creates (first usage) and return the instance, lazy initialization.
     */
    public static function getInstance(): Singleton
    {
        if (static::$uniqueInstance === null) {
            static::$uniqueInstance = new static();
        }

        return static::$uniqueInstance;
    }

    /**
     * Class constructor - there isn't outside access.
     */
    private function __construct()
    {
    }

    /**
     * Prevents from cloning.
     */
    private function __clone()
    {
    }

    /**
     * Prevents from being unserialized.
     */
    private function __wakeup()
    {
    }
}
