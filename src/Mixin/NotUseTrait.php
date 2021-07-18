<?php

namespace Chaos\Entity\Mixin;

/**
 * Trait NotUseTrait.
 */
trait NotUseTrait
{
    /**
     * @var bool
     *
     * @JMS\Serializer\Annotation\Type("bool")
     *
     * @Doctrine\ORM\Mapping\Column(name="not_use", type="boolean", nullable=true)
     */
    private $NotUse = false;

    /**
     * @return bool
     */
    public function isNotUse()
    {
        return $this->NotUse;
    }

    /**
     * @param bool $notUse Value.
     *
     * @return $this
     */
    public function setNotUse($notUse)
    {
        $this->NotUse = $notUse;

        return $this;
    }
}
