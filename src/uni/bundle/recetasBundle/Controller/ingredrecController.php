<?php

namespace uni\bundle\recetasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use uni\bundle\recetasBundle\Entity\ingredrec;
use uni\bundle\recetasBundle\Form\ingredrecType;

/**
 * ingredrec controller.
 *
 */
class ingredrecController extends Controller
{

    /**
     * Lists all ingredrec entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uniRecetasBundle:ingredrec')->findAll();

        return $this->render('uniRecetasBundle:ingredrec:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new ingredrec entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new ingredrec();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ingredrec_show', array('id' => $entity->getId())));
        }

        return $this->render('uniRecetasBundle:ingredrec:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a ingredrec entity.
     *
     * @param ingredrec $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ingredrec $entity)
    {
        $form = $this->createForm(new ingredrecType(), $entity, array(
            'action' => $this->generateUrl('ingredrec_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ingredrec entity.
     *
     */
    public function newAction()
    {
        $entity = new ingredrec();
        $form   = $this->createCreateForm($entity);

        return $this->render('uniRecetasBundle:ingredrec:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ingredrec entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniRecetasBundle:ingredrec')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ingredrec entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniRecetasBundle:ingredrec:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ingredrec entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniRecetasBundle:ingredrec')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ingredrec entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniRecetasBundle:ingredrec:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a ingredrec entity.
    *
    * @param ingredrec $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ingredrec $entity)
    {
        $form = $this->createForm(new ingredrecType(), $entity, array(
            'action' => $this->generateUrl('ingredrec_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ingredrec entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniRecetasBundle:ingredrec')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ingredrec entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ingredrec_edit', array('id' => $id)));
        }

        return $this->render('uniRecetasBundle:ingredrec:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ingredrec entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uniRecetasBundle:ingredrec')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ingredrec entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ingredrec'));
    }

    /**
     * Creates a form to delete a ingredrec entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ingredrec_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
