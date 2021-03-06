<?php
/**
 * Created by PhpStorm.
 * User: Damian
 * Date: 2017-03-06
 * Time: 19:35
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FactsRepository")
 * @ORM\Table(name="facts")
 */
class Fact
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", nullable=false)
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     * @Assert\NotBlank
     */
    private $text;

    /**
     * @ORM\Column(type="integer", nullable=false)
     * @Assert\Regex(
     *     pattern="/\d{4}/",
     *     message="Rok musi mieć format RRRR"
     * )
     * @Assert\GreaterThanOrEqual(1000)
     */
    private $year;

    /**
     * @ORM\ManyToMany(targetEntity="Brewery", mappedBy="facts")
     */
    private $breweries;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->breweries = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add brewery
     *
     * @param \AppBundle\Entity\Brewery $brewery
     *
     * @return Fact
     */
    public function addBrewery(\AppBundle\Entity\Brewery $brewery)
    {
        $this->breweries[] = $brewery;

        return $this;
    }

    /**
     * Remove brewery
     *
     * @param \AppBundle\Entity\Brewery $brewery
     */
    public function removeBrewery(\AppBundle\Entity\Brewery $brewery)
    {
        $this->breweries->removeElement($brewery);
    }

    /**
     * Get breweries
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBreweries()
    {
        return $this->breweries;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return Fact
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set year
     *
     * @param integer $year
     *
     * @return Fact
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer
     */
    public function getYear()
    {
        return $this->year;
    }
}
