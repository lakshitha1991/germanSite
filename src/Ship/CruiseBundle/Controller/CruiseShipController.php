<?php

namespace Ship\CruiseBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ship\CruiseBundle\Entity\CruiseShip;
use Ship\CruiseBundle\Form\CruiseShipType;

/**
 * CruiseShip controller.
 *
 */
class CruiseShipController extends Controller
{

    /**
     * Lists all CruiseShip entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ShipCruiseBundle:CruiseShip')->findAll();

        return $this->render('ShipCruiseBundle:CruiseShip:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    
    
    /**
     * Creates a new CruiseShip entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new CruiseShip();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cruiseship_show', array('id' => $entity->getId())));
        }

        return $this->render('ShipCruiseBundle:CruiseShip:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a CruiseShip entity.
     *
     * @param CruiseShip $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(CruiseShip $entity)
    {
        $form = $this->createForm(new CruiseShipType(), $entity, array(
            'action' => $this->generateUrl('cruiseship_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new CruiseShip entity.
     *
     */
    public function newAction()
    {
        $entity = new CruiseShip();
        $form   = $this->createCreateForm($entity);

        return $this->render('ShipCruiseBundle:CruiseShip:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a CruiseShip entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ShipCruiseBundle:CruiseShip')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CruiseShip entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ShipCruiseBundle:CruiseShip:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing CruiseShip entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ShipCruiseBundle:CruiseShip')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CruiseShip entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ShipCruiseBundle:CruiseShip:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a CruiseShip entity.
    *
    * @param CruiseShip $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(CruiseShip $entity)
    {
        $form = $this->createForm(new CruiseShipType(), $entity, array(
            'action' => $this->generateUrl('cruiseship_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing CruiseShip entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ShipCruiseBundle:CruiseShip')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CruiseShip entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('cruiseship_edit', array('id' => $id)));
        }

        return $this->render('ShipCruiseBundle:CruiseShip:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a CruiseShip entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ShipCruiseBundle:CruiseShip')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CruiseShip entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cruiseship'));
    }

    /**
     * Creates a form to delete a CruiseShip entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cruiseship_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
