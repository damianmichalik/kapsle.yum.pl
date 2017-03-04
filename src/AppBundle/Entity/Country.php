<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;
use AppBundle\Traits\TimestampableTrait;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CountryRepository")
 * @ORM\Table(name="countries", options={"collate"="utf8_polish_ci", "charset"="utf8"})
 * @ORM\HasLifecycleCallbacks
 */
class Country
{
    use TimestampableTrait;

    /**
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     * @Assert\Length(
     *      max = 120
     * )
     */
    private $name;

    /**
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(type="string", length=120, unique=true)
     */
    private $slug;

    /**
     * @ORM\OneToMany(targetEntity="Brewery", mappedBy="country")
     */
    protected $breweries;

    public function __construct()
    {
        $this->breweries = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function preSave()
    {
    }

    /**
     * Add breweries
     *
     * @param \AppBundle\Entity\Brewery $breweries
     * @return Country
     */
    public function addBrewery(\AppBundle\Entity\Brewery $breweries)
    {
        $this->breweries[] = $breweries;

        return $this;
    }

    /**
     * Remove breweries
     *
     * @param \AppBundle\Entity\Brewery $breweries
     */
    public function removeBrewery(\AppBundle\Entity\Brewery $breweries)
    {
        $this->breweries->removeElement($breweries);
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
}
