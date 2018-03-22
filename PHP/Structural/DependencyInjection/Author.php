<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\DependencyInjection;

/**
 * Author.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Author
{
    /**
     * The first name of the author.
     *
     * @var string
     */
    private $firstName;

    /**
     * The last name of the author.
     *
     * @var string
     */
    private $lastName;

    /**
     * Class constructor.
     *
     * @param string $firstName The Author first name
     * @param string $lastName  The Author last name
     */
    public function __construct(string $firstName, string $lastName)
    {
        $this
            ->setFirstName($firstName)
            ->setLastName($lastName);
    }

    /**
     * Set the first name of the author.
     *
     * @param string $firstName
     *
     * @return Author
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Returns the first name of the author.
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * Set the last name of the author.
     *
     * @param string $lastName
     *
     * @return Author
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Returns the last name of the author.
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
}
