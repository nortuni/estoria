<?php

namespace Nortuni\Estoria;

use Iterator;

interface Commit extends Iterator
{
    //public function equals(Commit $other);
    public function getEvents();
}
