<?php

declare(strict_types=1);

namespace Zenstruck\Foundry\Utils\Rector\Tests\Fixtures;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

#[MongoDB\Document()]
class DummyPersistentDocument
{
    #[MongoDB\Field(type: 'uuid')]
    public int|null $id;
}
