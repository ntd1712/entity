<?php

namespace Chaos\Entity\Mixin;

/**
 * Trait AuditTrait.
 */
trait AuditTrait
{
    /**
     * @var \DateTime
     *
     * @JMS\Serializer\Annotation\Type("DateTime<'Y-m-d H:i:s'>")
     *
     * @Doctrine\ORM\Mapping\Column(name="created_at", type="datetime", nullable=true)
     */
    private $CreatedAt;

    /**
     * @var string
     *
     * @JMS\Serializer\Annotation\Type("string")
     *
     * @Doctrine\ORM\Mapping\Column(name="created_by", type="string", nullable=true)
     */
    private $CreatedBy;

    /**
     * @var \DateTime
     *
     * @JMS\Serializer\Annotation\Type("DateTime<'Y-m-d H:i:s'>")
     *
     * @Doctrine\ORM\Mapping\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $UpdatedAt;

    /**
     * @var string
     *
     * @JMS\Serializer\Annotation\Type("string")
     *
     * @Doctrine\ORM\Mapping\Column(name="updated_by", type="string", nullable=true)
     */
    private $UpdatedBy;

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->CreatedAt;
    }

    /**
     * @param \DateTime $createdAt Value.
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->CreatedAt = $createdAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->CreatedBy;
    }

    /**
     * @param string $createdBy Value.
     *
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->CreatedBy = $createdBy;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->UpdatedAt;
    }

    /**
     * @param \DateTime $updatedAt Value.
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->UpdatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->UpdatedBy;
    }

    /**
     * @param string $updatedBy Value.
     *
     * @return $this
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->UpdatedBy = $updatedBy;

        return $this;
    }
}
