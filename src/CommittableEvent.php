<?php

namespace Nortuni\Estoria;

final class CommittableEvent
{
    /**
     * @var string
     */
    private $eventId;

    /**
     * @var string
     */
    private $eventType;

    /**
     * @var object
     */
    private $data;

    /**
     * @var object
     */
    private $metadata;

    public function __construct($eventId, $eventType, $data, $metadata)
    {
        $this->eventId = $eventId;
        $this->eventType = $eventType;
        $this->data = $data;
        $this->metadata = $metadata;
    }

    /**
     * @return string
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * @return string
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * @return object
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return object
     */
    public function getMetadata()
    {
        return $this->metadata;
    }
}
