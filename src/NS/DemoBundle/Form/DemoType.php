<?php

namespace NS\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DemoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('integer_choice','integer_choice',array('empty_value'=>'Please Select...'))
            ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NS\DemoBundle\Entity\Demo'
        ));
    }

    public function getName()
    {
        return 'ns_demobundle_demotype';
    }
}
