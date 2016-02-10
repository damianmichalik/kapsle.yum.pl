<?php

namespace AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use \AppBundle\Repository\BreweryRepository;

class CapType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        $builder
            ->add('name', TextType::class, array(
                'label' => 'Nazwa',
                'required'  => false,
            ))  
            ->add('brewery', EntityType::class, array(
                'label' => 'Browar',
                'class' => 'AppBundle\Entity\Brewery',
                'choice_label' => 'name',
                'placeholder' => 'Wybierz browar',
                'query_builder' => function (BreweryRepository $br) {
                    return $br->createQueryBuilder('b')
                        ->orderBy('b.name', 'ASC');
                }
            ))
            ->add('imageFile', FileType::class, array(
                'label' => 'Zdjęcie',
                'required'  => false
            )) 
            ->add('save', SubmitType::class, array(
                'label' => 'Zapisz'
            ));   
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Cap',
            'validation_groups' => function(FormInterface $form){
                $data = $form->getData();                                
                if($data->getId() === null) {
                    return array('Default', 'NewCap');
                } else {
                    return array('Default');
                }
            }   
        ));
    }

}
