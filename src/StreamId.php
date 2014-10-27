<?php

namespace Nortuni\Estoria;

final class StreamId
{
    private $streamId;

    public function __construct($streamId)
    {
        $this->streamId = (string) $streamId;
    }

    public function __toString()
    {
        return $this->streamId;
    }
}
