<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class ContactType extends AbstractType
{
    
    public function getName() 
    {
        return 'contact';
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options) 
    {
        
        $builder->add('name', 'text', array(
            'label' => 'Imię',
            'constraints' => array(
                new Assert\NotBlank()
            )
        ))
        ->add('email', 'text', array(
            'label' => 'Email',
            'constraints' => array(
                new Assert\NotBlank(),
                new Assert\Email()
            )
        ))
        ->add('content', 'textarea', array(
            'label' => 'Treść',
            'constraints' => array(
                new Assert\NotBlank()
            )
        ))
        ->add('save','submit',array('label' => 'Wyślij'));
        
    }
    
    
}
