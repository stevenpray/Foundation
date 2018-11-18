<?php

namespace PommProject\Foundation\Event;

use League\Event\Event as BaseEvent;

/**
 * Class QueryEvent
 */
class QueryEvent extends BaseEvent
{
    /**
     * @var string
     */
    protected $sql;

    /**
     * @var array
     */
    protected $parameters;

    /**
     * @var int
     */
    protected $count;

    /**
     * @var float
     */
    protected $time;

    /**
     * QueryEvent constructor.
     *
     * @param string $sql
     * @param array $parameters
     * @param $count
     * @param $time
     */
    public function __construct($sql, $parameters, $count, $time)
    {
        parent::__construct(get_class($this));

        $this->sql = $sql;
        $this->parameters = $parameters;
        $this->count = $count;
        $this->time = $time;
    }

    /**
     * @return string
     */
    public function getSql()
    {
        return $this->sql;
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return float
     */
    public function getTime()
    {
        return $this->time;
    }
}
