<?php

namespace Chaos\Entity;

use Chaos\Support\Object\Model;

use function Chaos\serializer;

/**
 * Class Document.
 *
 * @author t(-.-t) <ntd1712@mail.com>
 */
class Document extends Model
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
