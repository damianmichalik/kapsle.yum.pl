<?php
/**
 * Created by PhpStorm.
 * User: Damian
 * Date: 2017-03-03
 * Time: 19:18
 */

namespace AppBundle\Utils;

use AppBundle\Entity\Cap;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\File as FileObject;

class CapImageHandler
{
    private $rootDir;

    /**
     *
     * @var \Doctrine\Bundle\DoctrineBundle\Registry
     */
    private $doctrine;

    public function __construct($rootDir, $doctrine)
    {
        $this->rootDir = $rootDir;
        $this->doctrine = $doctrine;
    }

    public function setCapImage(Cap $cap)
    {
        $fs = new Filesystem();

        $filePath = $this->rootDir.'/../web'.$cap->getImage();
        if (stripos('/web/images/', $filePath) !== false) {
            return;
        }

        $fileObject = new FileObject($filePath);

        $destImage = '/images/'.$cap->getSlug().'_'.uniqid().'.'.$fileObject->getExtension();

        $destPath = $this->rootDir.'/../web/'.$destImage;
        if (file_exists($filePath)) {
            $fs->copy($filePath, $destPath);

            $em = $this->doctrine->getManager();
            $cap->setImage($destImage);
            $em->persist($cap);
            $em->flush();
        }
    }

    public function removeCapImage(Cap $cap)
    {
        $filePath = $this->rootDir.'/../web'.$cap->getImage();
        if (file_exists($filePath)) {
            unlink($filePath);
        }
    }
}
