<?php

namespace AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use \AppBundle\Repository\CountryRepository;
use AdminBundle\Form\Type\FactType;
use AppBundle\Entity\Brewery;

class BreweryType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'label' => 'Nazwa',
                'required'  => false,
            ))
            ->add('city', TextType::class, array(
                'label' => 'Miasto',
                'required'  => false,
            ))
            ->add('address', TextType::class, array(
                'label' => 'Adres',
                'required'  => false,
            ))
            ->add('postcode', TextType::class, array(
                'label' => 'Kod pocztowy',
                'required'  => false,
            ))
            ->add('country', EntityType::class, array(
                'label' => 'Kraj',
                'class' => 'AppBundle\Entity\Country',
                'choice_label' => 'name',
                'placeholder' => 'Wybierz kraj',
                'attr' => array(
                    'class' => 'select2',
                ),
                'query_builder' => function (CountryRepository $cr) {
                    return $cr->createQueryBuilder('c')
                        ->orderBy('c.name', 'ASC');
                },
            ))
            ->add('lat', TextType::class, array(
                'label' => 'Szerokość geograficzna',
                'required'  => false,
            ))
            ->add('lng', TextType::class, array(
                'label' => 'Długość geograficzna',
                'required'  => false,
            ))
            ->add('facts', CollectionType::class, array(
                'entry_type' => FactType::class,
                'allow_add' => true,
                'allow_delete' => true,
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Brewery::class,
        ));
    }
}
