<?php
// src/AppBundle/Form/RegistrationType.php

namespace UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationProFormType extends AbstractType
{
    

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstName');
        $builder->add('lastName');
        $builder->add('CIN');
        $builder->add('phone');
        $builder->add('birthDate');
        $builder->add('job');
        $builder->add('company');
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }
}