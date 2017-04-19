<?php
/**
 * Created by PhpStorm.
 * User: Damian
 * Date: 2017-03-06
 * Time: 19:40
 */

namespace AppBundle\Form\Admin;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\Fact;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class FactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('text', TextType::class, array(
                'label' => 'Opis',
            ))
            ->add('year', IntegerType::class, array(
                'label' => 'Rok',
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Fact::class,
        ));
    }
}
