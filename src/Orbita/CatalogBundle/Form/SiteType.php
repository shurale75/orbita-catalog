<?php

namespace Orbita\CatalogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SiteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text', array('label' => 'Название'))
            ->add('link', 'text', array('label' => 'URL сайта'))
            ->add('description', 'textarea', array('label' => 'Описание сайта'))
            //->add('image', 'text', ['data' => 'Default value'])
            //->add('vip')
            //->add('status')
            //->add('created')
            //->add('updated')
            //->add('grade')
            ->add('key_words')
            ->add('lang')
            ->add('cat_id')
            ->add('uid') ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Orbita\CatalogBundle\Entity\Site'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'orbita_catalogbundle_site';
    }


}
