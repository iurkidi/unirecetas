<?php

namespace uni\bundle\recetasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class recetaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo')
            ->add('elaboracion')
            ->add('foto')
            ->add('numpers')
            ->add('categ')
            ->add('aut')
            ->add('fotopeq')
            ->add('fechaPub')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'uni\bundle\recetasBundle\Entity\receta'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uni_bundle_recetasbundle_receta';
    }
}
