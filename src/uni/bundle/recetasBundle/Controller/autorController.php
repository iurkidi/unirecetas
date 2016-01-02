<?php

namespace uni\bundle\recetasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use uni\bundle\recetasBundle\Entity\autor;
use uni\bundle\recetasBundle\Form\autorType;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * autor controller.
 *
 */
class autorController extends Controller
{

    
    /**
     * Carga select autores en la pagina de busqueda de autores.
     *
     */
    public function buscarAutorAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uniRecetasBundle:autor')->findBy(
             array(), 
             array('apellidos' => 'ASC','nombre' => 'ASC')
           );
        
        $recetasAutor=new ArrayCollection();

        return $this->render('uniRecetasBundle:autor:buscarAutor.html.twig', array(
            'entities' => $entities,
            'recetasAutor' => $recetasAutor,
        ));
    }
    
    /**
     * Respuesta de pagina de busqueda de autores.
     *
     */
    public function buscarAutorRespAction(Request $req)
    {
        $idAutor = $req->request->get('nombre');
        $em = $this->getDoctrine()->getManager();
        
        
        $dql = "select r from uniRecetasBundle:receta r where r.aut = :idAutor";
        $query = $em->createQuery($dql);
        $query->setParameter('idAutor', $idAutor);
        $recetasAutor = $query->getResult();
        
        $entities = $em->getRepository('uniRecetasBundle:autor')->findBy(
             array(), 
             array('apellidos' => 'ASC','nombre' => 'ASC')
           );

//        $recetasAutor = $em->getRepository('uniRecetasBundle:recetas')->findByAutor($idAutor);

        return $this->render('uniRecetasBundle:autor:buscarAutor.html.twig', array(
            'entities' => $entities,
            'recetasAutor' => $recetasAutor,
        ));
    }
    
    /**
     * Lists all autor entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uniRecetasBundle:autor')->findAll();

        return $this->render('uniRecetasBundle:autor:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new autor entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new autor();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('autor_show', array('id' => $entity->getId())));
        }

        return $this->render('uniRecetasBundle:autor:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a autor entity.
     *
     * @param autor $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(autor $entity)
    {
        $form = $this->createForm(new autorType(), $entity, array(
            'action' => $this->generateUrl('autor_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new autor entity.
     *
     */
    public function newAction()
    {
        $entity = new autor();
        $form   = $this->createCreateForm($entity);

        return $this->render('uniRecetasBundle:autor:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a autor entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniRecetasBundle:autor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find autor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniRecetasBundle:autor:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing autor entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniRecetasBundle:autor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find autor entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('uniRecetasBundle:autor:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a autor entity.
    *
    * @param autor $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(autor $entity)
    {
        $form = $this->createForm(new autorType(), $entity, array(
            'action' => $this->generateUrl('autor_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing autor entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('uniRecetasBundle:autor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find autor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('autor_edit', array('id' => $id)));
        }

        return $this->render('uniRecetasBundle:autor:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a autor entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('uniRecetasBundle:autor')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find autor entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('autor'));
    }

    /**
     * Creates a form to delete a autor entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('autor_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
