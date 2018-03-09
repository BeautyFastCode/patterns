<?php

declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\UnitOfWork\Repository;

use PHP\Behavioral\UnitOfWork\Database\DataStorage;
use PHP\Behavioral\UnitOfWork\Entity\EntityInterface;
use PHP\Behavioral\UnitOfWork\Entity\Post;

/**
 * Access to the Post in the database.
 * CRUD operations - create, read, update, delete.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class PostRepository implements RepositoryInterface
{
    /**
     * Database, storage for the Posts.
     *
     * @var DataStorage
     */
    private $dataStorage;

    /**
     * Class constructor
     */
    public function __construct()
    {
        $this->dataStorage = new DataStorage();
    }

    /**
     * {@inheritdoc}
     */
    public function findById(int $id): EntityInterface
    {
        $data = $this->dataStorage->retrieve($id);
        $post = new Post();

        /*
         * Convert post to the array.
         */
        return $post->fromArray($data);
    }

    /**
     * {@inheritdoc}
     */
    public function findAll(): array
    {
        $posts = [];

        $dataAllPosts = $this->dataStorage->retrieveAll();

        /*
         * Convert posts to the array.
         */
        foreach ($dataAllPosts as $data) {
            $post = new Post();
            $posts[] = $post->fromArray($data);
        }

        return $posts;
    }

    /**
     * {@inheritdoc}
     */
    public function add(EntityInterface $entity): int
    {
        /**@var Post $entity */
        return $this->dataStorage->persist($entity->toArray());
    }

    /**
     * {@inheritdoc}
     */
    public function remove(EntityInterface $entity): void
    {
        $this->dataStorage->delete($entity->getId());

        return;
    }

    /**
     * {@inheritdoc}
     */
    public function update(EntityInterface $entity): void
    {
        $this->dataStorage->update($entity->getId(), $entity->toArray());

        return;
    }
}
