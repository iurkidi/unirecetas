<?php

namespace uni\bundle\recetasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use uni\bundle\recetasBundle\Entity\receta;
use uni\bundle\recetasBundle\Form\recetaType;

/**
 * receta controller.
 *
 */
class recetaController extends Controller
{

    /**
     * Lists all receta entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uniRecetasBundle:receta')->findAll();

        return $this->render('uniRecetasBundle:receta:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    
    
        /**
     * Lista de recetas de la categoria seleccionada.
     *
     */
    public function indexPorCategoriaAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        echo ($id);
        
        /*$dql = "select r from uniRecetasBundle:receta r where r.categ = :categoria";
        $query = $em->createQuery($dql);
        $query->setParameter('categoria',$cat);
        $recetas = $query->getResult();*/
        $eRecetas = $em->getRepository('uniRecetasBundle:receta')->  findByCateg($id);
        $eCategoria = $em->getRepository('uniRecetasBundle:categoria')->  findOneById($id);
               
        return $this->render('uniRecetasBundle:receta:indexporcat.html.twig', array(
            'recetas' => $eRecetas,
            'ecategoria' => $eCategoria,
            'categoria' => $id
        ));
    }
    
    /**
     * Creates a new receta entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new receta();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('receta_show', array('id' => $entity->getId())));
        }

        return $this->render('uniRecetasBundle:receta:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }   

    /**
     * Creates a form to create a receta entity.
     *
     * @param receta $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(receta $entity)
    {
        $form = $this->createForm(new recetaType(), $entity, array(
            'action' => $this->generateUrl('receta_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new receta entity.
     *
     */
    public function newAction()
    {
        $entity = new receta();
        $form   = $this->createCreateForm($entity);

        return $this->render('uniRecetasBundle:receta:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a receta entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniRecetasBundle:receta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find receta entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniRecetasBundle:receta:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing receta entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniRecetasBundle:receta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find receta entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniRecetasBundle:receta:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a receta entity.
    *
    * @param receta $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(receta $entity)
    {
        $form = $this->createForm(new recetaType(), $entity, array(
            'action' => $this->generateUrl('receta_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing receta entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniRecetasBundle:receta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find receta entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('receta_edit', array('id' => $id)));
        }

        return $this->render('uniRecetasBundle:receta:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a receta entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uniRecetasBundle:receta')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find receta entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('receta'));
    }

    /**
     * Creates a form to delete a receta entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('receta_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
