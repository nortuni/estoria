<?php

namespace Nortuni\Estoria;

interface Commit
{
    /**
     * @param Commit $other
     * @return boolean
     */
    public function equals(Commit $other);

    /**
     * @return CommittableEvent[]
     */
    public function getEvents();
}
