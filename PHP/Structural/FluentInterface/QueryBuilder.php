<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\FluentInterface;

/**
 * QueryBuilder.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class QueryBuilder
{
    /**
     * The database name.
     *
     * @var string
     */
    private $databaseName;

    /**
     * The table name.
     *
     * @var string
     */
    private $tableName;

    /**
     * The condition to filter the data.
     *
     * @var string
     */
    private $condition;

    /**
     * The order to sorting the data.
     *
     * @var string
     */
    private $order;

    /**
     * The query to build.
     *
     * @var string
     */
    private $query;

    /**
     * Select the database.
     *
     * @param string $databaseName
     *
     * @return QueryBuilder
     */
    public function select(string $databaseName): self
    {
        $this->databaseName = $databaseName;

        return $this;
    }

    /**
     * Select the data from the table.
     *
     * @param string $tableName
     *
     * @return QueryBuilder
     */
    public function from(string $tableName): self
    {
        $this->tableName = $tableName;

        return $this;
    }

    /**
     * Filter the selected data.
     *
     * @param string $condition
     *
     * @return QueryBuilder
     */
    public function where(string $condition): self
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * Order by property the selected data.
     *
     * @param string $propertyName
     * @param string $order
     *
     * @return QueryBuilder
     */
    public function orderBy(string $propertyName, string $order): self
    {
        $this->order = sprintf('%s = %s', $propertyName, $order);

        return $this;
    }

    /**
     * Build and returns the query.
     *
     * @return string
     */
    public function build(): string
    {
        $this->query = sprintf(
            'SELECT %s FROM %s WHERE %s ORDER %s',
            $this->databaseName,
            $this->tableName,
            $this->condition,
            $this->order
        );

        return $this->query;
    }
}
