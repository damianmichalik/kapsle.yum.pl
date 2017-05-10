<?php

namespace AppBundle\Form\Admin;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\NotBlank;
use AppBundle\Entity\User;
use AppBundle\Utils\Tools;

class UserType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('email', TextType::class, array(
                'required' => true,
                'label' => 'Email',
            ))
            ->add('username', TextType::class, array(
                'required' => true,
                'label' => 'Login',
                'constraints' => new NotBlank(),
            ))
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'required' => true,
                'first_options' => array(
                    'label' => 'Hasło',
                ),
                'second_options' => array(
                    'label' => 'Powtórz hasło',
                ),
            ))
            ->add('enabled', CheckboxType::class, array(
                'label' => 'Konto aktywowane',
                'required' => false,
                'attr' => array('class' => 'js-switch'),
                'label_attr' => array('class' => 'hidden-label'),
            ))
            ->add('roles', ChoiceType::class, array(
                'label' => 'Rola',
                'multiple' => true,
                'expanded' => false,
                'choices' => Tools::getRoles(),
            ));

        $formModifier = function (FormInterface $form, $id = null) {
            if ($id !== null) {
                $field = $form->get('plainPassword');
                $form->remove('plainPassword');
                $options = $field->getConfig()->getOptions();
                $options['required'] = false;
                $form->add('plainPassword', RepeatedType::class, $options);
            }
        };

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifier) {
                $data = $event->getData();
                $formModifier($event->getForm(), $data->getId());
            }
        );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => User::class,
        ));
    }
}
