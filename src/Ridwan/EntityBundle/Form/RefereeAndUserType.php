<?php

namespace Ridwan\EntityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RefereeAndUserType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('referee1', 'entity', array(
                    'label' => 'Referee 1',
                    'class' => 'RidwanEntityBundle:Referees',
                    'property' => 'name',
                    'label_attr' => array('class' => 'control-label'),
                    'attr' => array(
                        'class' => 'controls',
                        'data-rel' => 'chosen'
                    )

                ))

            ->add('referee2', 'entity', array(
                    'label' => 'Referee 1',
                    'class' => 'RidwanEntityBundle:Referees',
                    'property' => 'name',
                    'label_attr' => array('class' => 'control-label'),
                    'attr' => array(
                        'class' => 'controls',
                        'data-rel' => 'chosen'
                    )

                ))


        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ridwan\EntityBundle\Entity\RefereeAndUser'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ridwan_entitybundle_refereeanduser';
    }
}
