<?php

namespace Nortuni\Estoria;

interface EventStore
{
    /**
     * @param StreamId $streamId
     * @return Stream
     */
    public function getStream(StreamId $streamId);

    /**
     * @param StreamId $streamId
     * @return Stream
     */
    public function getOrCreateStream(StreamId $streamId);
}
