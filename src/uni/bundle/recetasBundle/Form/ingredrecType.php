<?php

namespace uni\bundle\recetasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ingredrecType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cantidad')
            ->add('unidad')
            ->add('ireceta')
            ->add('iingrediente')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'uni\bundle\recetasBundle\Entity\ingredrec'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uni_bundle_recetasbundle_ingredrec';
    }
}
