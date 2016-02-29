<?php

namespace Ship\CruiseBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ship\CruiseBundle\Entity\Ship;
use Ship\CruiseBundle\Form\ShipType;

/**
 * Ship controller.
 *
 */
class ShipController extends Controller
{

    /**
     * Lists all Ship entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ShipCruiseBundle:Ship')->findAll();

        return $this->render('ShipCruiseBundle:Ship:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Ship entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Ship();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ship_show', array('id' => $entity->getId())));
        }

        return $this->render('ShipCruiseBundle:Ship:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Ship entity.
     *
     * @param Ship $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Ship $entity)
    {
        $form = $this->createForm(new ShipType(), $entity, array(
            'action' => $this->generateUrl('ship_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Ship entity.
     *
     */
    public function newAction()
    {
        $entity = new Ship();
        $form   = $this->createCreateForm($entity);

        return $this->render('ShipCruiseBundle:Ship:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Ship entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ShipCruiseBundle:Ship')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ship entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ShipCruiseBundle:Ship:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Ship entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ShipCruiseBundle:Ship')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ship entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ShipCruiseBundle:Ship:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Ship entity.
    *
    * @param Ship $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Ship $entity)
    {
        $form = $this->createForm(new ShipType(), $entity, array(
            'action' => $this->generateUrl('ship_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Ship entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ShipCruiseBundle:Ship')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ship entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ship_edit', array('id' => $id)));
        }

        return $this->render('ShipCruiseBundle:Ship:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Ship entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ShipCruiseBundle:Ship')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Ship entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ship'));
    }

    /**
     * Creates a form to delete a Ship entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ship_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
