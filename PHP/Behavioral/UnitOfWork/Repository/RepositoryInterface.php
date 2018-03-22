<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\UnitOfWork\Repository;

use PHP\Behavioral\UnitOfWork\Entity\EntityInterface;

/**
 * Access to an entity in the database.
 * CRUD operations - create, read, update, delete.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
interface RepositoryInterface
{
    /**
     * Add one Entity to the data storage.
     *
     * @param EntityInterface $entity
     *
     * @return int
     */
    public function add(EntityInterface $entity): int;

    /**
     * Remove one Entity from the data storage.
     *
     * @param EntityInterface $entity
     */
    public function remove(EntityInterface $entity): void;

    /**
     * Updated one Entity in the data storage.
     *
     * @param EntityInterface $entity
     */
    public function update(EntityInterface $entity): void;

    /**
     * Find all the Entities in the Repository.
     *
     * @return array
     */
    public function findAll(): array;

    /**
     * Find one Entity by ID.
     *
     * @param int $id
     *
     * @return EntityInterface
     */
    public function findById(int $id): EntityInterface;
}
