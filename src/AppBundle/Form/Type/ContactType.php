<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('name', TextType::class, array(
            'label' => 'Imię',
            'constraints' => array(
                new Assert\NotBlank(),
            ),
        ))
        ->add('email', TextType::class, array(
            'label' => 'Email',
            'constraints' => array(
                new Assert\NotBlank(),
                new Assert\Email(),
            ),
        ))
        ->add('content', TextareaType::class, array(
            'label' => 'Treść',
            'constraints' => array(
                new Assert\NotBlank(),
            ),
        ))
        ->add('save', SubmitType::class, array('label' => 'Wyślij'));
    }
}
