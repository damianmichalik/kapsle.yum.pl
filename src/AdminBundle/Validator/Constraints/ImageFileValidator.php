<?php
/**
 * Created by PhpStorm.
 * User: Damian
 * Date: 2017-02-06
 * Time: 20:35
 */

namespace AdminBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\HttpFoundation\File\File as FileObject;

class ImageFileValidator extends ConstraintValidator
{
    private $rootDir;

    public function __construct($rootDir)
    {
        $this->rootDir = $rootDir;
    }

    public function validate($value, Constraint $constraint)
    {
        $filePath = $this->rootDir.'/../web'.$value;
        $fileObject = new FileObject($filePath);

        if (!is_file($filePath)) {
            $this->context->buildViolation($constraint->messageNotFile)
                ->setParameter('%string%', $value)
                ->addViolation();
            return;
        }

        $size = @getimagesize($filePath);

        if (empty($size) || ($size[0] === 0) || ($size[1] === 0)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('%string%', $value)
                ->addViolation();

            return;
        }

        if ($constraint->mimeTypes) {
            $mimeTypes = (array) $constraint->mimeTypes;
            $mime = $fileObject->getMimeType();

            foreach ($mimeTypes as $mimeType) {
                if ($mimeType === $mime) {
                    return;
                }

                if ($discrete = strstr($mimeType, '/*', true)) {
                    if (strstr($mime, '/', true) === $discrete) {
                        return;
                    }
                }
            }

            $this->context->buildViolation($constraint->message)
                ->setParameter('%string%', $value)
                ->addViolation();
            return;
        }
    }
}