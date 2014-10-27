<?php

namespace Nortuni\Estoria;

use Iterator;

interface Stream extends Iterator
{
    public function append(Commit $commit);
}
