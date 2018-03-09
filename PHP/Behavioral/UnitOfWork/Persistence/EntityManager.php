<?php

declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\UnitOfWork\Persistence;

use PHP\Behavioral\UnitOfWork\Entity\EntityInterface;
use PHP\Behavioral\UnitOfWork\Repository\PostRepository;
use PHP\Behavioral\UnitOfWork\Repository\RepositoryInterface;

/**
 * EntityManager is an example Unit of work.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class EntityManager
{
    /**
     * The list of changed entities.
     *
     * @var EntityInterface[]
     */
    private $changed;

    /**
     * The lists to new entities.
     *
     * @var EntityInterface[]
     */
    private $new;

    /**
     * The list of repositories for various kinds of entities.
     *
     * @var RepositoryInterface[]
     */
    private $repositoryInterface;

    /**
     * Class constructor
     */
    public function __construct()
    {
        $this->changed = [];
        $this->new = [];

        /*
         * todo: You can change this in future, if you have more repositories.
         */
        $this->repositoryInterface[] = new PostRepository();
    }

    /**
     * Add entity to manage and persist list.
     *
     * @param EntityInterface $entity The entity, new or changed
     *
     * @return EntityManager
     */
    public function persist(EntityInterface $entity): EntityManager
    {
        $repository = $this->repositoryInterface[0];

        /**@var $oldEntity EntityInterface */
        foreach ($repository->findAll() as $oldEntity) {
            if ($oldEntity->getId() === $entity->getId()) {

                $this->changed[] = $entity;

                return $this;
            }
        }

        $this->new[] = $entity;

        return $this;
    }

    /**
     * Flushes all changed and new entities to the data storage.
     */
    public function flush(): void
    {
        $repository = $this->repositoryInterface[0];

        foreach ($this->changed as $entity) {
            $repository->update($entity);
        }

        foreach ($this->new as $entity) {
            $repository->add($entity);
        }

        return;
    }

    /**
     * Return number an entities to flush.
     *
     * @return int
     */
    public function countToFlush(): int
    {
        return count($this->changed) + count($this->new);
    }

    /**
     * Returns the repository for an entity.
     *
     * @param string $entityClass The entity class that the repository you want
     *
     * @return RepositoryInterface
     */
    public function getRepository(string $entityClass): RepositoryInterface
    {
        /*
         * todo: You can change this in future, if you have more repositories.
         */
        return $this->repositoryInterface[0];
    }
}
