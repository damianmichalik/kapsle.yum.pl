<?php

namespace AppBundle\Entity;

use AppBundle\Traits\TimestampableTrait;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use AdminBundle\Validator\Constraints as CapAssert;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CapRepository")
 * @ORM\Table(name="caps", options={"collate"="utf8_polish_ci", "charset"="utf8"})
 */
class Cap
{
    use TimestampableTrait;

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=120)
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
     * @ORM\Column(type="string", length=80, nullable=true)
     * @CapAssert\ImageFile
     * @Assert\NotBlank
     */
    private $image = null;

    /**
     * @ORM\ManyToOne(targetEntity="Brewery", inversedBy="caps")
     * @ORM\JoinColumn(name="brewery_id", referencedColumnName="id", onDelete="SET NULL")
     */
    protected $brewery;

    /**
     * Set brewery
     *
     * @param \AppBundle\Entity\Brewery $brewery
     * @return Brewery
     */
    public function setBrewery(\AppBundle\Entity\Brewery $brewery = null)
    {
        $this->brewery = $brewery;

        return $this;
    }

    /**
     * Get brewery
     *
     * @return \AppBundle\Entity\Brewery
     */
    public function getBrewery()
    {
        return $this->brewery;
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

    public function getImage()
    {
        return $this->image;
    }

    public function getThumb()
    {
        return $this->image;
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

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
}
