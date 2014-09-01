<?php

namespace Ridwan\EntityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VolunteercontactdetailsType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mobile')
            ->add('phone')
            ->add('fax')
            ->add('streetnumber')
            ->add('street')
            ->add('city')
            ->add('divisionalsecretary')
            ->add('district')
            ->add('country')
            ->add('province')
            ->add('user')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ridwan\EntityBundle\Entity\Volunteercontactdetails'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ridwan_entitybundle_volunteercontactdetails';
    }
}
