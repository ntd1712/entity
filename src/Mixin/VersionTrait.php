<?php

namespace Chaos\Entity\Mixin;

/**
 * Trait VersionTrait.
 */
trait VersionTrait
{
    /**
     * @var int
     *
     * @JMS\Serializer\Annotation\Type("int")
     *
     * @Doctrine\ORM\Mapping\Version
     * @Doctrine\ORM\Mapping\Column(name="version", type="integer", nullable=true)
     */
    private $Version;

    /**
     * @return int
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param int $version Value.
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->Version = $version;

        return $this;
    }
}
