<?php

namespace Tests\AdminBundle\Validator\Constraints;

use AdminBundle\Validator\Constraints\ImageFile;
use AdminBundle\Validator\Constraints\ImageFileValidator;
use Symfony\Component\Validator\Tests\Constraints\AbstractConstraintValidatorTest;

class ImageFileValidatorTest extends AbstractConstraintValidatorTest
{
    protected $image;
    protected $imageLandscape;
    protected $imagePortrait;
    protected $image4By3;
    protected $foo;
    protected $fake;

    protected function createValidator()
    {
        $rootDir = __DIR__;
        return new ImageFileValidator($rootDir);
    }

    protected function setUp()
    {
        parent::setUp();

        $this->fake = '/fake';
        $this->foo = '/foo';
        $this->image = '/test.gif';
        $this->imageLandscape = '/test_landscape.gif';
        $this->imagePortrait = '/test_portrait.gif';
        $this->image4By3 = '/test_4by3.gif';
    }

    public function testValidate()
    {
        $this->validator->validate($this->image, new ImageFile());

        $this->assertNoViolation();
    }

    public function testInValidate()
    {
        $constraint = new ImageFile(array(
            'message' => 'myMessage',
        ));

        $this->validator->validate($this->foo, $constraint);

        $this->buildViolation('myMessage')
            ->setParameter('%string%', $this->foo)
            ->assertRaised();
    }

    public function testNotFile()
    {
        $constraint = new ImageFile(array(
            'messageNotFile' => 'myMessageNotFile',
        ));

        $this->validator->validate($this->fake, $constraint);

        $this->buildViolation('myMessageNotFile')
            ->setParameter('%string%', $this->fake)
            ->assertRaised();
    }
}