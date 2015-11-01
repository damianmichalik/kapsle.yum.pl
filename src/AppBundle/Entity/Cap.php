<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use AdminBundle\Libs\ZebraImage;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CapRepository")
 * @ORM\Table(name="caps", options={"collate"="utf8_polish_ci", "charset"="utf8"}) 
 * @ORM\HasLifecycleCallbacks
 */
class Cap {
    
    const DEFAULT_IMAGE = 'default-thumbnail.jpg';
    const UPLOAD_DIR = 'uploads/caps/';
    
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
     */
    private $image = null;
    
    /**
     * 
     * @Assert\NotBlank(
     *      groups = {"NewCap"}
     * )
     * @Assert\Image(
     *      minWidth = 166,
     *      minHeight = 166,
     *      maxWidth = 1920,
     *      maxHeight = 1080,
     *      maxSize = "1M",
     *      groups = {"NewCap"}
     * )
     */
    private $imageFile;
    
    private $imageTemp;
    
    /**
     * @ORM\Column(name="create_date", type="datetime")
     */
    private $createDate;
    
    /**
     * @ORM\Column(name="update_date", type="datetime")
     */
    private $updateDate;
    
    /**
     * @ORM\ManyToOne(targetEntity="Brewery", inversedBy="caps")
     * @ORM\JoinColumn(name="brewery_id", referencedColumnName="id")
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
    
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getSlug() {
        return $this->slug;
    }

    public function getCreateDate() {
        return $this->createDate;
    }
    
    public function getImage() {

        if(null == $this->image){
            return Cap::UPLOAD_DIR.Cap::DEFAULT_IMAGE;
        }
        
        return Cap::UPLOAD_DIR.$this->image;
    }
    
    public function getThumb() {

        if(null == $this->image){
            return Cap::UPLOAD_DIR.Cap::DEFAULT_IMAGE;
        }
        
        return Cap::UPLOAD_DIR . 'm_' . $this->image;
    }

    public function getImageFile() {
        return $this->imageFile;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setSlug($slug) {
        $this->slug = $slug;
        return $this;
    }

    public function setCreateDate($createDate) {
        $this->createDate = $createDate;
        return $this;
    }
    
    public function setImage($image) {
        $this->image = $image;
        return $this;
    }

    public function setImageFile(UploadedFile $imageFile) {
        $this->imageFile = $imageFile;
        $this->updateDate = new \DateTime();
        return $this;
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function preSave(){
        
        if(null !== $this->getImageFile()){
            
            if(null !== $this->image){
                $this->imageTemp = $this->image;
            }

            $slug = \AdminBundle\Libs\Utils::sluggify($this->getName());
            $fileName = $slug . '_' . uniqid();
            
            $this->image = $fileName.'.'.$this->getImageFile()->guessExtension();
        }
        
        if(null == $this->createDate){
            $this->createDate = new \DateTime();
        }
    }
    
    /**
     * @ORM\PostPersist
     * @ORM\PostUpdate
     */
    public function postSave(){
        
        if(NULL !== $this->getImageFile()){
            $res = $this->getImageFile()->move($this->getUploadRootDir(), $this->image);
            
            $zimageSmall = new ZebraImage();
            $zimageSmall->source_path = $this->getUploadRootDir().'/'.$this->image;
            $zimageSmall->target_path = $this->getUploadRootDir().'/m_'.$this->image;
            $zimageSmall->jpeg_quality = 100;
            $zimageSmall->resize(166, 166, ZEBRA_IMAGE_BOXED);
            unset($zimageSmall);
            
            $zimage = new ZebraImage();
            $zimage->source_path = $this->getUploadRootDir().'/'.$this->image;
            $zimage->target_path = $this->getUploadRootDir().'/'.$this->image;
            $zimage->jpeg_quality = 100;
            $zimage->resize(334, 334, ZEBRA_IMAGE_BOXED);
            unset($zimage);
            
            unset($this->imageFile);
            
            if(isset($this->imageTemp)){
                unlink($this->getUploadRootDir().'/'.$this->imageTemp);
                unset($this->imageTemp);
            }
        }
    }
    
    /**
     * @ORM\PostRemove
     */
    public function postRemove() {
        if(null !== $this->image){
            unlink($this->getUploadRootDir().'/'.$this->image);
        }
    }
    
    public function getUploadRootDir(){
        return __DIR__.'/../../../web/'.self::UPLOAD_DIR;
    }
    
}
