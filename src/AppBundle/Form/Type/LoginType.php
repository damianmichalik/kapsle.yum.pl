<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class LoginType extends AbstractType {
        
    public function getName() {
        return 'login';
    }
    
    public function buildForm (FormBuilderInterface $builder, array $options) {
        $builder->add('username','text',array('label' => 'Login'))
                ->add('password','password',array('label' => 'Hasło'))
                ->add('save','submit',array('label' => 'Zaloguj'));
    }

}
