<?php

namespace Ship\CruiseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HomeType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('cruiseLine', 'entity', array(
//                    'attr'=>array('class' => 'dropdown'),
                    'placeholder' => 'Choose cruise line',
                    'class' => 'ShipCruiseBundle:CruiseLine',
                    'label' => FALSE,
                    'property' => 'cruiseLine'
                ))
                ->add('ship', 'entity', array(
                    'placeholder' => 'Choose ship',
                    'class' => 'ShipCruiseBundle:Ship',
                    'label' => FALSE,
                    'property' => 'ship'
                ))
                ->add('route', 'entity', array(
                    'placeholder' => 'Choose route',
                    'class' => 'ShipCruiseBundle:Route',
                    'label' => FALSE,
                    'property' => 'route'
                ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Ship\CruiseBundle\Model\Home'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'ship_cruisebundle_home';
    }

}
