<?php

namespace Pidev\FrontOfficeBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class AbonnementForm extends AbstractType {
      public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Type', 'choice', array('choices' => array('Annuel' => 'Annuel', 'Mensuel' => 'Mensuel')))
            ->add('dateDebut', 'date', array(
                                                'widget' => 'single_text',
                                                'input' => 'datetime',
                                                'format' => 'dd/MM/yyyy',
                                                'attr' => array('class' => 'date'),
                                                ))
            ->add('dateFin', 'date', array(
                                                'widget' => 'single_text',
                                                'input' => 'datetime',
                                                'format' => 'dd/MM/yyyy',
                                                'attr' => array('class' => 'date'),
                                                ))
            ->add('Valider', 'submit')   
         
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pidev\FrontOfficeBundle\Entity\Abonnement'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pidev_frontofficebundle_Abonnement';
    }
}
