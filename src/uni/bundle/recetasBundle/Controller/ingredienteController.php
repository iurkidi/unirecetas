<?php

namespace uni\bundle\recetasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use uni\bundle\recetasBundle\Entity\ingrediente;
use uni\bundle\recetasBundle\Form\ingredienteType;

/**
 * ingrediente controller.
 *
 */
class ingredienteController extends Controller
{

    /**
     * Lists all ingrediente entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uniRecetasBundle:ingrediente')->findAll();

        return $this->render('uniRecetasBundle:ingrediente:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new ingrediente entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new ingrediente();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ingrediente_show', array('id' => $entity->getId())));
        }

        return $this->render('uniRecetasBundle:ingrediente:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a ingrediente entity.
     *
     * @param ingrediente $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ingrediente $entity)
    {
        $form = $this->createForm(new ingredienteType(), $entity, array(
            'action' => $this->generateUrl('ingrediente_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ingrediente entity.
     *
     */
    public function newAction()
    {
        $entity = new ingrediente();
        $form   = $this->createCreateForm($entity);

        return $this->render('uniRecetasBundle:ingrediente:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ingrediente entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniRecetasBundle:ingrediente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ingrediente entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniRecetasBundle:ingrediente:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ingrediente entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniRecetasBundle:ingrediente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ingrediente entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniRecetasBundle:ingrediente:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a ingrediente entity.
    *
    * @param ingrediente $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ingrediente $entity)
    {
        $form = $this->createForm(new ingredienteType(), $entity, array(
            'action' => $this->generateUrl('ingrediente_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ingrediente entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniRecetasBundle:ingrediente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ingrediente entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ingrediente_edit', array('id' => $id)));
        }

        return $this->render('uniRecetasBundle:ingrediente:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ingrediente entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uniRecetasBundle:ingrediente')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ingrediente entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ingrediente'));
    }

    /**
     * Creates a form to delete a ingrediente entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ingrediente_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
