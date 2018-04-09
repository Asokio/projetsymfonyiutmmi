<?php

namespace AppBundle\Form;

use Symfony\Conponent\Form\AbstractType;
use Symfony\Conponent\Form\FormBuilderInterface;
use Symfony\Conponent\Form\Extension\Core\Type\TextType;

class LoisirType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class, array('required' => true));
    }
    
    public function getBlockPrefix()
    {
        return 'form_loisir';
    }
}