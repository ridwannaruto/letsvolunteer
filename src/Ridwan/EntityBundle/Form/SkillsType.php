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
                        'Photography' => 'Photography',
                        'Video and Graphic Design'  => 'Video and Graphic Design',
                        'Teaching'   => 'Teaching',
                        'Consulting'   => 'Consulting',
                        'Team Management'   => 'Team Management'
                    ),
                ))
            ->add('causes', 'choice', array(
                    'expanded' => true,
                    'multiple' => true,
                    'choices'  => array(
                        'Poverty Eradication' => 'Poverty Eradication',
                        'Education'  => 'Education',
                        'Wild Life'   => 'Wild Life',
                        'Peace and Reconciliation'   => 'Peace and Reconciliation',
                        'International Understanding '   => 'International Understanding '
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
                        'English' => 'English',
                        'Sinhala'  => 'Sinhala',
                        'Tamil'   => 'Tamil',
                        'Hindi'   => 'Hindi',
                        'Spanish'   => 'Spanish'
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
