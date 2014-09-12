<?php

namespace Ridwan\EntityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VolunteerpersonalType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('nicorpassport')
            ->add('gender', 'choice', array(
                    'choices' => array(
                        'M' => 'Male',
                        'F' => 'Female'
                    )

                ))
            ->add('dateofbirth', 'text', array(
                    'label_attr' => array('class' => 'control-label'),
                    'label' => 'Date',
                    'attr' => array(
                        'placeholder' => 'date',
                        'class' => 'input-large datepicker',
                        'data' => \Date('today'),
                    )
                ))
            ->add('nationality')
            ->add('category', 'choice', array(
                    'choices' => array(
                        'Oversea Foreigner' => 'Oversea Foreigner',
                        'Local Foreigner' => 'Local Foreigner',
                        'Srilankan' => 'Srilankan'
                    )

                ))
            ->add('Civilstatus', 'choice', array(
                    'choices' => array(
                        '0' => 'Single',
                        '1' => 'Married'
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
            'data_class' => 'Ridwan\EntityBundle\Entity\Volunteerpersonal'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ridwan_entitybundle_volunteerpersonal';
    }
}
