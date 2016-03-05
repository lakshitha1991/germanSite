<?php

namespace Ship\CruiseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CabinRecommendationType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('cruiseLine', 'entity', array(
                    'placeholder' => 'Choose cruise line',
                    'class' => 'ShipCruiseBundle:CruiseLine',
                    'property' => 'cruiseLine'
                ))
                ->add('ship', 'entity', array(
                    'placeholder' => 'Choose ship',
                    'class' => 'ShipCruiseBundle:Ship',
                    'property' => 'ship'
                ))
                ->add('route', 'entity', array(
                    'placeholder' => 'Choose route',
                    'class' => 'ShipCruiseBundle:Route',
                    'property' => 'route'
                ))
                ->add('cabinRecommendation')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Ship\CruiseBundle\Entity\CabinRecommendation'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'ship_cruisebundle_cabinrecommendation';
    }

}
