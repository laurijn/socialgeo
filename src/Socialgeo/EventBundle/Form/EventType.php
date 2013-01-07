<?php

namespace Socialgeo\EventBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('imagename')
            ->add('time')
            ->add('location')
            ->add('details')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Socialgeo\EventBundle\Entity\Event'
        ));
    }

    public function getName()
    {
        return 'socialgeo_eventbundle_eventtype';
    }
}
