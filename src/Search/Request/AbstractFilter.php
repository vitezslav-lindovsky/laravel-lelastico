<?php

namespace Lelastico\Search\Request;

use Lelastico\Search\Query\AbstractQuery;

abstract class AbstractFilter
{
    abstract public function createQuery(): AbstractQuery;

    abstract public function canApply(): bool;
}
