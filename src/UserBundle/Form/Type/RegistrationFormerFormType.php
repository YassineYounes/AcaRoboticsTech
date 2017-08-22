<?php
// src/AppBundle/Form/RegistrationType.php

namespace UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationFormerFormType extends AbstractType
{
    

    public function getParent()
    {
        return 'fos_user_registration';
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstName');
        $builder->add('lastName');
        $builder->add('CIN');
        $builder->add('phone');
        $builder->add('birthDate');
        $builder->add('job');
    }

    public function getName()
    {
        return 'app_user_registration';
    }
}