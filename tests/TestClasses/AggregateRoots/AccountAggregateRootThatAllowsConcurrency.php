<?php

namespace Spatie\EventSourcing\Tests\TestClasses\AggregateRoots;

class AccountAggregateRootThatAllowsConcurrency extends AccountAggregateRoot
{
    protected static $allowConcurrency = true;
}
