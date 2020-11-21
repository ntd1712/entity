<?php

namespace Chaos\Entity\Mixin;

/**
 * Trait SoftDeletesTrait.
 */
trait SoftDeletesTrait
{
    /**
     * @var \DateTime
     *
     * @JMS\Serializer\Annotation\Type("DateTime<'Y-m-d H:i:s'>")
     *
     * @Doctrine\ORM\Mapping\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $DeletedAt;

    /**
     * @var string
     *
     * @JMS\Serializer\Annotation\Type("string")
     *
     * @Doctrine\ORM\Mapping\Column(name="deleted_by", type="string", nullable=true)
     */
    private $DeletedBy;

    /**
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->DeletedAt;
    }

    /**
     * @param \DateTime $deletedAt Value.
     *
     * @return $this
     */
    public function setDeletedAt($deletedAt)
    {
        $this->DeletedAt = $deletedAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeletedBy()
    {
        return $this->DeletedBy;
    }

    /**
     * @param string $deletedBy Value.
     *
     * @return $this
     */
    public function setDeletedBy($deletedBy)
    {
        $this->DeletedBy = $deletedBy;

        return $this;
    }
}
