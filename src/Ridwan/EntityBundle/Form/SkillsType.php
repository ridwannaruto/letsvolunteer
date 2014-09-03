<?php

namespace Ridwan\EntityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SkillsType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('skills', 'choice', array(
                    'expanded' => true,
                    'multiple' => true,
                    'choices'  => array(
                        's1' => 'Photography',
                        's2'  => 'Video and Graphic Design',
                        's3'   => 'Teaching',
                        's4'   => 'Consulting',
                        's5'   => 'Team Management'
                    ),
                ))
            ->add('causes', 'choice', array(
                    'expanded' => true,
                    'multiple' => true,
                    'choices'  => array(
                        'c1' => 'Poverty Eradication',
                        'c2'  => 'Education',
                        'c3'   => 'Wild Life',
                        'c4'   => 'Peace and Reconciliation',
                        'c5'   => 'International Understanding '
                    ),
                ))
            ->add('other','textarea',array(
                    'attr' => array(
                        'rows' => 8,
                        'class' => 'span10'
                    )
                ))
            ->add('languages', 'choice', array(
                    'expanded' => true,
                    'multiple' => true,
                    'choices'  => array(
                        'l1' => 'English',
                        'l2'  => 'Sinhala',
                        'l3'   => 'Tamil',
                        'l4'   => 'Hindi',
                        'l5'   => 'Spanish'
                    ),
                ))

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ridwan\EntityBundle\Entity\Skills'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ridwan_entitybundle_skills';
    }
}
