<?php

namespace AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BreweryType extends AbstractType {
    
    public function getName() {
        return 'brewery';
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        $builder
            ->add('name', 'text', array(
                'label' => 'Nazwa',
                'required'  => false,
            )) 
            ->add('city', 'text', array(
                'label' => 'Miasto',
                'required'  => false,
            )) 
            ->add('address', 'text', array(
                'label' => 'Adres',
                'required'  => false,
            )) 
            ->add('postcode', 'text', array(
                'label' => 'Kod pocztowy',
                'required'  => false,
            )) 
            ->add('country', 'entity', array(
                'label' => 'Kraj',
                'class' => 'AppBundle\Entity\Country',
                'property' => 'name',
                'empty_value' => 'Wybierz kraj'
            ))
            ->add('save', 'submit', array(
                'label' => 'Zapisz'
            ));   
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Brewery'
        ));
    }

}
