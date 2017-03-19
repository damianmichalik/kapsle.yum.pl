<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use AppBundle\Traits\TimestampableTrait;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BreweryRepository")
 * @ORM\Table(name="breweries", options={"collate"="utf8_polish_ci", "charset"="utf8"})
 * @ORM\HasLifecycleCallbacks
 */
class Brewery
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
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     * @Assert\Length(
     *      max = 255
     * )
     */
    private $city;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     * @Assert\Length(
     *      max = 255
     * )
     */
    private $address;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\Length(
     *      max = 255
     * )
     */
    private $postcode;

    /**
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(type="string", length=120, unique=true)
     */
    private $slug;

    /**
     * @ORM\ManyToOne(targetEntity="Country", inversedBy="breweries")
     * @ORM\JoinColumn(name="country_id", referencedColumnName="id", onDelete="SET NULL")
     */
    protected $country;

    /**
     * @ORM\OneToMany(targetEntity="Cap", mappedBy="brewery")
     */
    protected $caps;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank
     */
    private $lat;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank
     */
    private $lng;

    /**
     * @ORM\ManyToMany(targetEntity="Fact", inversedBy="breweries", cascade={"persist"})
     * @ORM\JoinTable(name="breweries_facts")
     * @ORM\OrderBy({"year" = "ASC"})
     */
    protected $facts;

    public function __construct()
    {
        $this->facts = new ArrayCollection();
        $this->caps = new ArrayCollection();
    }

    public function getFacts()
    {
        return $this->facts;
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
     * Set name
     *
     * @param string $name
     * @return Brewery
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Brewery
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set country
     *
     * @param \AppBundle\Entity\Country $country
     * @return Brewery
     */
    public function setCountry(\AppBundle\Entity\Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \AppBundle\Entity\Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Brewery
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Brewery
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     * @return Brewery
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function preSave()
    {
    }

    public function getAddressToGeocode()
    {
        $addressToGeocode = $this->getAddress();
        if ($this->getPostcode() !== null) {
            $addressToGeocode .= ', '.$this->getPostcode();
        }
        $addressToGeocode .= ' '.$this->getCity();
        if ($this->getCountry() != null) {
            $addressToGeocode .= ', '.$this->getCountry()->getName();
        }

        return $addressToGeocode;
    }

    /**
     * Add breweries
     *
     * @param \AppBundle\Entity\Cap Cap $caps
     * @return Brewery
     */
    public function addCap(\AppBundle\Entity\Cap $caps)
    {
        $this->caps[] = $caps;

        return $this;
    }

    /**
     * Remove caps
     *
     * @param \AppBundle\Entity\Cap $caps
     */
    public function removeCap(\AppBundle\Entity\Cap $caps)
    {
        $this->caps->removeElement($caps);
    }

    /**
     * Get caps
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCaps()
    {
        return $this->caps;
    }

    /**
     * Set lat
     *
     * @param float $lat
     *
     * @return Brewery
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return float
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lng
     *
     * @param float $lng
     *
     * @return Brewery
     */
    public function setLng($lng)
    {
        $this->lng = $lng;

        return $this;
    }

    /**
     * Get lng
     *
     * @return float
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * Add fact
     *
     * @param \AppBundle\Entity\Fact $fact
     *
     * @return Brewery
     */
    public function addFact(\AppBundle\Entity\Fact $fact)
    {
        $this->facts[] = $fact;

        return $this;
    }

    /**
     * Remove fact
     *
     * @param \AppBundle\Entity\Fact $fact
     */
    public function removeFact(\AppBundle\Entity\Fact $fact)
    {
        $this->facts->removeElement($fact);
    }
}
