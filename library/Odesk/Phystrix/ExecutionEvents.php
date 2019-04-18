<?php

namespace Odesk\Phystrix;

class ExecutionEvents
{
    public const EVENT_SUCCESS = 'SUCCESS';
    public const EVENT_FAILURE = 'FAILURE';
    public const EVENT_TIMEOUT = 'TIMEOUT';
    public const EVENT_CIRCUIT_OPEN = 'CIRCUIT_OPEN';
    public const EVENT_CIRCUIT_CLOSED = 'CIRCUIT_CLOSED';
    public const EVENT_SHORT_CIRCUITED = 'SHORT_CIRCUITED';
    public const EVENT_FALLBACK_SUCCESS = 'FALLBACK_SUCCESS';
    public const EVENT_FALLBACK_FAILURE = 'FALLBACK_FAILURE';
    public const EVENT_EXCEPTION_THROWN = 'EXCEPTION_THROWN';
    public const EVENT_RESPONSE_FROM_CACHE = 'RESPONSE_FROM_CACHE';

    /**
     * Events logged during execution
     *
     * @var array
     */
    private $executionEvents = array();

    /**
     * Logic to record events and exceptions as they take place
     *
     * @param string $eventName type from class constants EVENT_*
     */
    public function recordExecutionEvent($eventName)
    {
        $this->executionEvents[] = $eventName;
    }

    /**
     * Returns events collected
     *
     * @return array
     */
    public function getExecutionEvents()
    {
        return $this->executionEvents;
    }
}