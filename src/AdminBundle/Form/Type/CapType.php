<?php

namespace AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use \AppBundle\Repository\BreweryRepository;
use FM\ElfinderBundle\Form\Type\ElFinderType;
use AdminBundle\Form\Type\TagsInputType;

class CapType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'label' => 'Nazwa',
                'required'  => false,
            ))
            ->add('brewery', EntityType::class, array(
                'required' => false,
                'label' => 'Browar',
                'class' => 'AppBundle\Entity\Brewery',
                'choice_label' => 'name',
                'placeholder' => 'Wybierz browar',
                'attr' => array(
                    'class' => 'select2',
                ),
                'query_builder' => function (BreweryRepository $br) {
                    return $br->createQueryBuilder('b')
                        ->orderBy('b.name', 'ASC');
                },
            ))
            ->add('image', ElFinderType::class, array(
                'label' => 'Zdjęcie',
                'required' => true,
                'instance'=>'default',
                'enable' => true,
                'attr' => array('class' => 'form-control'),
            ))
            ->add('tags', TagsInputType::class, array(
                'label' => 'Tagi',
                'required' => false,
            ))
            ->add('publishedAt', DateTimePickerType::class, array(
                'label' => 'Data publikacji',
                'empty_data' => null,
                'format' => 'YYYY-MM-DD HH:mm',
                'required' => false,
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'Zapisz',
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Cap',
            'validation_groups' => function (FormInterface $form) {
                $data = $form->getData();
                if ($data->getId() === null) {
                    return array('Default', 'NewCap');
                } else {
                    return array('Default');
                }
            },
        ));
    }
}
