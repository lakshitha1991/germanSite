<?php

namespace Ship\CruiseBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ship\CruiseBundle\Entity\CabinRecommendation;
use Ship\CruiseBundle\Form\CabinRecommendationType;

/**
 * CabinRecommendation controller.
 *
 */
class CabinRecommendationController extends Controller
{

    /**
     * Lists all CabinRecommendation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ShipCruiseBundle:CabinRecommendation')->findAll();

        return $this->render('ShipCruiseBundle:CabinRecommendation:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new CabinRecommendation entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new CabinRecommendation();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cabinrecommendation_show', array('id' => $entity->getId())));
        }

        return $this->render('ShipCruiseBundle:CabinRecommendation:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a CabinRecommendation entity.
     *
     * @param CabinRecommendation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(CabinRecommendation $entity)
    {
        $form = $this->createForm(new CabinRecommendationType(), $entity, array(
            'action' => $this->generateUrl('cabinrecommendation_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new CabinRecommendation entity.
     *
     */
    public function newAction()
    {
        $entity = new CabinRecommendation();
        $form   = $this->createCreateForm($entity);

        return $this->render('ShipCruiseBundle:CabinRecommendation:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a CabinRecommendation entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ShipCruiseBundle:CabinRecommendation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CabinRecommendation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ShipCruiseBundle:CabinRecommendation:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing CabinRecommendation entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ShipCruiseBundle:CabinRecommendation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CabinRecommendation entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ShipCruiseBundle:CabinRecommendation:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a CabinRecommendation entity.
    *
    * @param CabinRecommendation $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(CabinRecommendation $entity)
    {
        $form = $this->createForm(new CabinRecommendationType(), $entity, array(
            'action' => $this->generateUrl('cabinrecommendation_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing CabinRecommendation entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ShipCruiseBundle:CabinRecommendation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CabinRecommendation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('cabinrecommendation_edit', array('id' => $id)));
        }

        return $this->render('ShipCruiseBundle:CabinRecommendation:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a CabinRecommendation entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ShipCruiseBundle:CabinRecommendation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CabinRecommendation entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cabinrecommendation'));
    }

    /**
     * Creates a form to delete a CabinRecommendation entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cabinrecommendation_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
