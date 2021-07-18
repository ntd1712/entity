<?php

namespace Chaos\Entity\Mixin;

/**
 * Trait AppTrait.
 */
trait AppTrait
{
    /**
     * @var string
     *
     * @JMS\Serializer\Annotation\Type("string")
     *
     * @Doctrine\ORM\Mapping\Column(name="app_key", type="string", nullable=true)
     */
    private $AppKey;

    /**
     * @return string
     */
    public function getAppKey()
    {
        return $this->AppKey;
    }

    /**
     * @param string $appKey Value.
     *
     * @return $this
     */
    public function setAppKey($appKey)
    {
        $this->AppKey = $appKey;

        return $this;
    }
}
