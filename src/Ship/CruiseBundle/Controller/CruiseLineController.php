<?php

namespace Ship\CruiseBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ship\CruiseBundle\Entity\CruiseLine;
use Ship\CruiseBundle\Form\CruiseLineType;

/**
 * CruiseLine controller.
 *
 */
class CruiseLineController extends Controller
{

    /**
     * Lists all CruiseLine entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ShipCruiseBundle:CruiseLine')->findAll();

        return $this->render('ShipCruiseBundle:CruiseLine:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new CruiseLine entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new CruiseLine();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cruiseline_show', array('id' => $entity->getId())));
        }

        return $this->render('ShipCruiseBundle:CruiseLine:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a CruiseLine entity.
     *
     * @param CruiseLine $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(CruiseLine $entity)
    {
        $form = $this->createForm(new CruiseLineType(), $entity, array(
            'action' => $this->generateUrl('cruiseline_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new CruiseLine entity.
     *
     */
    public function newAction()
    {
        $entity = new CruiseLine();
        $form   = $this->createCreateForm($entity);

        return $this->render('ShipCruiseBundle:CruiseLine:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a CruiseLine entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ShipCruiseBundle:CruiseLine')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CruiseLine entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ShipCruiseBundle:CruiseLine:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing CruiseLine entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ShipCruiseBundle:CruiseLine')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CruiseLine entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ShipCruiseBundle:CruiseLine:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a CruiseLine entity.
    *
    * @param CruiseLine $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(CruiseLine $entity)
    {
        $form = $this->createForm(new CruiseLineType(), $entity, array(
            'action' => $this->generateUrl('cruiseline_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing CruiseLine entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ShipCruiseBundle:CruiseLine')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CruiseLine entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('cruiseline_edit', array('id' => $id)));
        }

        return $this->render('ShipCruiseBundle:CruiseLine:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a CruiseLine entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ShipCruiseBundle:CruiseLine')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CruiseLine entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cruiseline'));
    }

    /**
     * Creates a form to delete a CruiseLine entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cruiseline_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
