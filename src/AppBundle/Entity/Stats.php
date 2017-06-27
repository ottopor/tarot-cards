<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stats
 *
 * @ORM\Table(name="stats", indexes={@ORM\Index(name="IDX_574767AAAEC98E42", columns={"linkId"})})
 * @ORM\Entity
 */
class Stats
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="impressions", type="integer", nullable=false)
     */
    private $impressions;

    /**
     * @var integer
     *
     * @ORM\Column(name="clicks", type="integer", nullable=false)
     */
    private $clicks;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedTs", type="datetime", nullable=false)
     */
    private $updatedts;

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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Stats
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set impressions
     *
     * @param integer $impressions
     *
     * @return Stats
     */
    public function setImpressions($impressions)
    {
        $this->impressions = $impressions;

        return $this;
    }

    /**
     * Get impressions
     *
     * @return integer
     */
    public function getImpressions()
    {
        return $this->impressions;
    }

    /**
     * Set clicks
     *
     * @param integer $clicks
     *
     * @return Stats
     */
    public function setClicks($clicks)
    {
        $this->clicks = $clicks;

        return $this;
    }

    /**
     * Get clicks
     *
     * @return integer
     */
    public function getClicks()
    {
        return $this->clicks;
    }

    /**
     * Set updatedts
     *
     * @param \DateTime $updatedts
     *
     * @return Stats
     */
    public function setUpdatedts($updatedts)
    {
        $this->updatedts = $updatedts;

        return $this;
    }

    /**
     * Get updatedts
     *
     * @return \DateTime
     */
    public function getUpdatedts()
    {
        return $this->updatedts;
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
     * @return Stats
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
