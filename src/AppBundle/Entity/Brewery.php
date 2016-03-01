<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BreweryRepository")
 * @ORM\Table(name="breweries", options={"collate"="utf8_polish_ci", "charset"="utf8"}) 
 * @ORM\HasLifecycleCallbacks
 */
class Brewery {
    
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
     * @ORM\Column(type="string")
     * @Assert\NotBlank
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
     * @ORM\Column(name="create_date", type="datetime")
     */
    private $createDate;
    
    /**
     * @ORM\Column(name="update_date", type="datetime")
     */
    private $updateDate;
    
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
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return Brewery
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime 
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set updateDate
     *
     * @param \DateTime $updateDate
     * @return Brewery
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return \DateTime 
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
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
    public function preSave(){
        
        if(null == $this->createDate){
            $this->createDate = new \DateTime();
        }
        $this->updateDate = new \DateTime();
    }
    
    public function getAddressToGeocode()
    {
        $addressToGeocode = $this->getAddress() . ', ' . 
                $this->getPostcode() .' ' . $this->getCity();    
        if($this->getCountry() != null) {
            $addressToGeocode .= ', ' . $this->getCountry()->getName();
        }
        return $addressToGeocode;
    }
    
    /**
     * Add breweries
     *
     * @param \AppBundle\Entity\Cap Cap
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
}
