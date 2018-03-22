<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\UnitOfWork\Entity;

/**
 * EntityInterface.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
interface EntityInterface
{
    /**
     * Sets the ID.
     *
     * @param int $id
     *
     * @return EntityInterface
     */
    public function setId(int $id): self;

    /**
     * Returns the ID.
     *
     * @return int|null
     */
    public function getId(): ?int;
}
