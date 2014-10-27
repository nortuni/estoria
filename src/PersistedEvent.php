<?php

namespace Nortuni\Estoria;

final class PersistedEvent
{
    /**
     * @var StreamId
     */
    private $streamId;

    /**
     * @var integer
     */
    private $eventNumber;

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

    public function __construct(StreamId $streamId, $eventNumber, $eventType, $data, $metadata)
    {
        $this->streamId = $streamId;
        $this->eventNumber = $eventNumber;
        $this->eventType = $eventType;
        $this->data = $data;
        $this->metadata = $metadata;
    }

    /**
     * @return StreamId
     */
    public function getStreamId()
    {
        return $this->streamId;
    }

    /**
     * @return integer
     */
    public function getEventNumber()
    {
        return $this->eventNumber;
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
