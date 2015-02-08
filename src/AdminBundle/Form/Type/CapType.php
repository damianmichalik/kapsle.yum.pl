<?php

namespace AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CapType extends AbstractType {
    
    public function getName() {
        return 'cap';
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        $builder
            ->add('name', 'text', array(
                'label' => 'Nazwa',
                'required'  => false,
            ))
            ->add('imageFile', 'file', array(
                'label' => 'Zdjęcie',
                'required'  => false
            ))   
            ->add('save', 'submit', array(
                'label' => 'Zapisz'
            ));   
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Cap'
        ));
    }

}
