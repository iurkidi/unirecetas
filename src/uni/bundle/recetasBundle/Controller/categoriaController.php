<?php

namespace uni\bundle\recetasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use uni\bundle\recetasBundle\Entity\categoria;
use uni\bundle\recetasBundle\Form\categoriaType;

/**
 * categoria controller.
 *
 */
class categoriaController extends Controller
{

    /**
     * Lists all categoria entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uniRecetasBundle:categoria')->findAll();

        return $this->render('uniRecetasBundle:categoria:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new categoria entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new categoria();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('categoria_show', array('id' => $entity->getId())));
        }

        return $this->render('uniRecetasBundle:categoria:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a categoria entity.
     *
     * @param categoria $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(categoria $entity)
    {
        $form = $this->createForm(new categoriaType(), $entity, array(
            'action' => $this->generateUrl('categoria_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new categoria entity.
     *
     */
    public function newAction()
    {
        $entity = new categoria();
        $form   = $this->createCreateForm($entity);

        return $this->render('uniRecetasBundle:categoria:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a categoria entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniRecetasBundle:categoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find categoria entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniRecetasBundle:categoria:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing categoria entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniRecetasBundle:categoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find categoria entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniRecetasBundle:categoria:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a categoria entity.
    *
    * @param categoria $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(categoria $entity)
    {
        $form = $this->createForm(new categoriaType(), $entity, array(
            'action' => $this->generateUrl('categoria_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing categoria entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniRecetasBundle:categoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find categoria entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('categoria_edit', array('id' => $id)));
        }

        return $this->render('uniRecetasBundle:categoria:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a categoria entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uniRecetasBundle:categoria')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find categoria entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('categoria'));
    }

    /**
     * Creates a form to delete a categoria entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('categoria_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
