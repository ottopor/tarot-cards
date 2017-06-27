<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Card
 *
 * @ORM\Table(name="card")
 * @ORM\Entity
 */
class Card
{
    /**
     * @var string
     *
     * @ORM\Column(name="card_name", type="string", length=255, nullable=false)
     */
    private $cardName;

    /**
     * @var string
     *
     * @ORM\Column(name="power_one_name", type="string", length=50, nullable=false)
     */
    private $powerOneName;

    /**
     * @var string
     *
     * @ORM\Column(name="power_one_value", type="string", length=100, nullable=false)
     */
    private $powerOneValue;

    /**
     * @var string
     *
     * @ORM\Column(name="power_two_name", type="string", length=50, nullable=false)
     */
    private $powerTwoName;

    /**
     * @var string
     *
     * @ORM\Column(name="power_two_value", type="string", length=100, nullable=false)
     */
    private $powerTwoValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set cardName
     *
     * @param string $cardName
     *
     * @return Card
     */
    public function setCardName($cardName)
    {
        $this->cardName = $cardName;

        return $this;
    }

    /**
     * Get cardName
     *
     * @return string
     */
    public function getCardName()
    {
        return $this->cardName;
    }

    /**
     * Set powerOneName
     *
     * @param string $powerOneName
     *
     * @return Card
     */
    public function setPowerOneName($powerOneName)
    {
        $this->powerOneName = $powerOneName;

        return $this;
    }

    /**
     * Get powerOneName
     *
     * @return string
     */
    public function getPowerOneName()
    {
        return $this->powerOneName;
    }

    /**
     * Set powerOneValue
     *
     * @param string $powerOneValue
     *
     * @return Card
     */
    public function setPowerOneValue($powerOneValue)
    {
        $this->powerOneValue = $powerOneValue;

        return $this;
    }

    /**
     * Get powerOneValue
     *
     * @return string
     */
    public function getPowerOneValue()
    {
        return $this->powerOneValue;
    }

    /**
     * Set powerTwoName
     *
     * @param string $powerTwoName
     *
     * @return Card
     */
    public function setPowerTwoName($powerTwoName)
    {
        $this->powerTwoName = $powerTwoName;

        return $this;
    }

    /**
     * Get powerTwoName
     *
     * @return string
     */
    public function getPowerTwoName()
    {
        return $this->powerTwoName;
    }

    /**
     * Set powerTwoValue
     *
     * @param string $powerTwoValue
     *
     * @return Card
     */
    public function setPowerTwoValue($powerTwoValue)
    {
        $this->powerTwoValue = $powerTwoValue;

        return $this;
    }

    /**
     * Get powerTwoValue
     *
     * @return string
     */
    public function getPowerTwoValue()
    {
        return $this->powerTwoValue;
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
}
