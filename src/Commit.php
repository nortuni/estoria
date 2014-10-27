<?php

namespace Nortuni\Estoria;

interface Commit
{
    public function equals(Commit $other);
    public function getEvents();
}
