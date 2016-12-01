<?php
/**
 * Created by PhpStorm.
 * User: Damian
 * Date: 2016-11-18
 * Time: 21:01
 */

namespace AdminBundle\Form\Type;

use AppBundle\Repository\PageRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class PageType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'label' => 'Nazwa',
                'required'  => true,
            ))
            ->add('parent', EntityType::class, array(
                'empty_data'  => null,
                'required' => false,
                'label' => 'Strona nadrzędna',
                'class' => 'AppBundle\Entity\Page',
                'choice_label' => 'indentedTitle',
                'placeholder' => 'Wybierz stronę nadrzędną',
                'query_builder' => function (PageRepository $cr) {
                    return $cr->createQueryBuilder('p')
                        ->orderBy('p.root', 'ASC')
                        ->addOrderBy('p.lft', 'ASC');
                },
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'Zapisz',
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Page',
        ));
    }
}
