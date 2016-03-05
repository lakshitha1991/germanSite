<?php

namespace Ship\CruiseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ship\CruiseBundle\Form\HomeType;
use Ship\CruiseBundle\Form\EmptyType;
use Ship\CruiseBundle\Model\Home;
use Symfony\Component\BrowserKit\Request;

class DefaultController extends Controller {

    public function homeAction() {
        $entity = new Home();
        $form = $this->createCreateForm($entity);
        $request = $this->getRequest();
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $form2 = $this->createForm(new EmptyType(), null, array(
                    'action' => $this->generateUrl('ship_cruise_result'),
                    'method' => 'POST',
                ));
                $form2->add('submit', 'submit', array(
//            'attr'=>array('align'=>'right'),
                    'button_class' => 'btn btn-primary center-block',
                    'label' => '...is Here'
                ));

                return $this->render('ShipCruiseBundle:Default:page2.html.twig', array(
                            'entities' => null,
                            'form' => $form2->createView(),
                ));
            } else {
                $this->get('session')->getFlashBag()->add('danger', 'flash.home.error');
                return $this->render('ShipCruiseBundle:Default:index.html.twig', array(
                            'entity' => $entity,
                            'form' => $form->createView(),
                ));
            }
        }

        return $this->render('ShipCruiseBundle:Default:index.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    private function createCreateForm(Home $entity) {
        $form = $this->createForm(new HomeType(), $entity, array(
            'action' => $this->generateUrl('ship_cruise_homepage'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array(
//            'attr'=>array('align'=>'right'),
            'button_class' => 'btn btn-primary center-block',
            'label' => 'Find sunny side'
        ));

        return $form;
    }
    
    public function resultAction() {
        return $this->render('ShipCruiseBundle:Default:page3.html.twig');
    }
    
    public function contactAction() {
        return $this->render('ShipCruiseBundle:Default:Contact.html.twig');
    }
    
    public function impressumeAction() {
        return $this->render('ShipCruiseBundle:Default:Impressume.html.twig');
    }
    
    public function uberUnsAction() {
        return $this->render('ShipCruiseBundle:Default:UberUns.html.twig');
    }
}
