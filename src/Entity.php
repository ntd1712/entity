<?php

namespace Chaos\Entity;

use Chaos\Support\Object\Model;

use function Chaos\serializer;

/**
 * Class Entity.
 *
 * An entity is a person, place, thing, or event that must be represented in the database.
 * These will become the tables or rows in a database.
 *
 * @author t(-.-t) <ntd1712@mail.com>
 */
class Entity extends Model
{
    /**
     * {@inheritDoc}
     *
     * @return array
     */
    public function getArrayCopy()
    {
        return serializer()->toArray($this);
    }
}
