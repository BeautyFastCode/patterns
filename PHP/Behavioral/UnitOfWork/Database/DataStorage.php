<?php

declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\UnitOfWork\Database;

/**
 * DataStorage
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class DataStorage
{
    /**
     * The array for the data.
     *
     * @var array
     */
    private $data;

    /**
     * First empty slot for data.
     *
     * @var int
     */
    private $currentId;

    /**
     * Class constructor
     */
    public function __construct()
    {
        $this->data = [];
        $this->currentId = 0;
    }

    /**
     * Save data.
     *
     * @param array $data
     * @return int
     */
    public function persist(array $data): int
    {
        $data['id'] = $this->currentId++;
        $this->data[$data['id']] = $data;

        return $data['id'];
    }

    /**
     * Update data.
     *
     * @param int   $id
     * @param array $data
     *
     * @return void
     */
    public function update(int $id, array $data): void
    {
        $this->data[$id] = $data;

        return;
    }

    /**
     * Load data.
     *
     * @param int $id
     *
     * @return array
     */
    public function retrieve(int $id): array
    {
        if (!isset($this->data[$id])) {
            // exception
        }

        return $this->data[$id];
    }

    /**
     * Returns all data.
     *
     * @return array
     */
    public function retrieveAll(): array
    {
        return $this->data;
    }

    /**
     * Delete data by ID.
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id):bool
    {
        if (!isset($this->data[$id])) {
            // exception
        }

        unset($this->data[$id]);

        return true;
    }
}
