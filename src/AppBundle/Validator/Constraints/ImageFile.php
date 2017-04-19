<?php
/**
 * Created by PhpStorm.
 * User: Damian
 * Date: 2017-02-06
 * Time: 20:34
 */

namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class ImageFile extends Constraint
{
    public $messageNotFile = '"%string%" nie jest plikiem.';
    public $message = '"%string%" nie jest plikiem graficznym.';
    public $mimeTypes = 'image/*';
}