<?php

declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Compound\MVC\Model;

use PHP\Compound\MVC\Database\DataStorage;

/**
 * PostRepository
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class PostRepository
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
     * Find one Post by ID.
     *
     * @param int $id
     *
     * @return Post
     */
    public function findById(int $id): Post
    {
        $data = $this->dataStorage->retrieve($id);
        $post = new Post();

        /*
         * Convert post to the array.
         */
        return $post->fromArray($data);
    }

    /**
     * Find all the Posts.
     *
     * @return array
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
     * Add one Post to the data storage.
     *
     * @param Post $post
     *
     * @return int
     */
    public function add(Post $post): int
    {
        return $this->dataStorage->persist($post->toArray());
    }

    /**
     * Remove one Post from the data storage.
     *
     * @param Post $post
     */
    public function remove(Post $post): void
    {
        $this->dataStorage->delete($post->getId());

        return;
    }
}
