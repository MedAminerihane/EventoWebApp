<?php

namespace Pidev\FrontOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EvenementType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('titre', 'text', array('attr' => array('size' => '50')))
            ->add('lieu', 'text', array('attr' => array('size' => '50')))
            ->add('dateDebut')
            ->add('dateFin')
            ->add('confidentialite','choice', array('choices' => array('public' => 'Public', 'prive' => 'Prive')))
            ->add('description', 'textarea', array('attr' => array('rows' => '5','cols' => '50')) )
            ->add('prix', 'number', array('attr' => array('size' => '50')))
            ->add('type','choice', array('choices' => array('art' => 'Art', 'musique' => 'Musique')))
           ;
        
  
        
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pidev\FrontOfficeBundle\Entity\Evenement'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pidev_frontofficebundle_evenement';
    }
}
