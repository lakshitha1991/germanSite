<?php

namespace Ship\CruiseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RouteType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('route')
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
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Ship\CruiseBundle\Entity\Route'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'ship_cruisebundle_route';
    }

}
