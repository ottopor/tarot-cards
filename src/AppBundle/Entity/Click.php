<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Click
 *
 * @ORM\Table(name="click", indexes={@ORM\Index(name="IDX_BAF6C220AEC98E42", columns={"linkId"})})
 * @ORM\Entity
 */
class Click
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createsTs", type="datetime", nullable=false)
     */
    private $creatests;

    /**
     * @var array
     *
     * @ORM\Column(name="request", type="array", nullable=false)
     */
    private $request;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=255, nullable=false)
     */
    private $ip;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Link
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Link")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="linkId", referencedColumnName="id")
     * })
     */
    private $linkid;



    /**
     * Set creatests
     *
     * @param \DateTime $creatests
     *
     * @return Click
     */
    public function setCreatests($creatests)
    {
        $this->creatests = $creatests;

        return $this;
    }

    /**
     * Get creatests
     *
     * @return \DateTime
     */
    public function getCreatests()
    {
        return $this->creatests;
    }

    /**
     * Set request
     *
     * @param array $request
     *
     * @return Click
     */
    public function setRequest($request)
    {
        $this->request = $request;

        return $this;
    }

    /**
     * Get request
     *
     * @return array
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return Click
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set linkid
     *
     * @param \AppBundle\Entity\Link $linkid
     *
     * @return Click
     */
    public function setLinkid(\AppBundle\Entity\Link $linkid = null)
    {
        $this->linkid = $linkid;

        return $this;
    }

    /**
     * Get linkid
     *
     * @return \AppBundle\Entity\Link
     */
    public function getLinkid()
    {
        return $this->linkid;
    }
}
