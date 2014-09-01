<?php

namespace Ridwan\EntityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EducationType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('institution')
            ->add('field')
            ->add('degree')
            ->add('duration')
            ->add('user')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ridwan\EntityBundle\Entity\Education'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ridwan_entitybundle_education';
    }
}
