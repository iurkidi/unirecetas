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

//        $entities = $em->getRepository('uniRecetasBundle:receta')->findAll();        
        $entities = $em->getRepository('uniRecetasBundle:receta')->findBy(
             array(), 
             array('fechaPub' => 'DESC')
           );

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
        //echo ($id);
        
        $eRecetas = $em->getRepository('uniRecetasBundle:receta')->  findByCateg($id);
        $eCategoria = $em->getRepository('uniRecetasBundle:categoria')->  findOneById($id);
               
        return $this->render('uniRecetasBundle:receta:indexporcat.html.twig', array(
            'recetas' => $eRecetas,
            'ecategoria' => $eCategoria,
            'categoria' => $id
        ));
    }
    
    /**
     * Displays a form to create a new receta entity.
     *
     */
    public function newAction()
    {
        $em = $this->getDoctrine()->getManager();

        $eautores = $em->getRepository('uniRecetasBundle:autor')->findBy(
             array(), 
             array('apellidos' => 'ASC','nombre' => 'ASC')
           );
        
        $eingredientes = $em->getRepository('uniRecetasBundle:ingrediente')->findBy(
             array(), 
             array('nombre' => 'ASC')
           );
        
        $ecategorias = $em->getRepository('uniRecetasBundle:categoria')->findBy(
             array(), 
             array('titulo' => 'ASC')
           );
        
        return $this->render('uniRecetasBundle:receta:new.html.twig', array(            
            'entities' => $eautores,
            'ecat' => $ecategorias,
            'eingredientes' => $eingredientes,
        ));
    }
    
    public function newRecCatAction($id)
    {
//        REDIRIGIR DIRECTAMENTE A LA PAGINA DE NUEVO Q SE HARA UN FORM A PIñON.
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('uniRecetasBundle:autor')->findBy(
             array(), 
             array('apellidos' => 'ASC','nombre' => 'ASC')
           );
        
        $eingredientes = $em->getRepository('uniRecetasBundle:ingrediente')->findBy(
             array(), 
             array('nombre' => 'ASC')
           );
        
        $eCat = $em->getRepository('uniRecetasBundle:categoria')->findOneById($id);
        if (!$eCat) {
            throw $this->createNotFoundException('Unable to find categoria relacionado.');
        }
        
        return $this->render('uniRecetasBundle:receta:newreccat.html.twig', array(
            'idCat' => $id,  
            'entities' => $entities,
            'eingredientes' => $eingredientes,
            'eCat' => $eCat,
        ));
    }
    
        /**
     * Saves a new receta.
     * SE REUTILIZA para una Categoria CONCRETA y un formulario completo.
     *
     */
    public function saveRecCatAction(Request $request)
    {        
        $eReceta= new receta();
        $titulo= $request->request->get('titulo');
        $eReceta->setTitulo($titulo);
        
        $textElab= $request->request->get('textElab');
        $eReceta->setElaboracion($textElab);
                
        $foto= $request->request->get('foto');
        $eReceta->setFoto($foto);
        
        $fotop= $request->request->get('fotop');
        $eReceta->setFotoPeq($fotop);
        
        $eReceta->setFechaPub(new \DateTime("now"));
        
        $numpers= $request->request->get('numpers');
        $eReceta->setNumpers($numpers);
        
        $em = $this->getDoctrine()->getManager();
        
        $autor= $request->request->get('idAutorRec');        
        $eAutor = $em->getRepository('uniRecetasBundle:autor')->findOneById($autor);
        if (!$eAutor) {
            throw $this->createNotFoundException('Unable to find autor relacionado.');
        }
        $eReceta->setAut($eAutor); 
        
        $id= $request->request->get('idCat');
        //echo($id);        
        $eCat = $em->getRepository('uniRecetasBundle:categoria')->findOneById($id);
        if (!$eCat) {
            throw $this->createNotFoundException('Unable to find categoria relacionado.');
        }
        $eReceta->setCateg($eCat);   
        
        //INGREDIENTES
        //for(1 <= 15){
            $cantIngred=$request->request->get('tb1');
            $unidIngred=$request->request->get('tb11');
            $ingred=$request->request->get('tb111');
            
            echo($cantIngred);
            echo($unidIngred);
            echo($ingred);
        //}
//        $eIngreRec=new ingredrec();
//        $eIngreRec->setCantidad($cantIngred);
//        $eIngreRec->setUnidad($unidIngred);
//        $eIngreRec->setIIngrediente($ingred);
       /// $eIngreRec->setIReceta();
        
//        $eReceta->addRecingr($eIngreRec);
                
        $em->persist($eReceta);
        $em->flush();

//        $eRecetas = $em->getRepository('uniRecetasBundle:receta')->  findByCateg($id);                       
//        DA ERROR AL REDIRIGIR A INDEXCATEGORIA
//        return $this->render('uniRecetasBundle:receta:indexporcat.html.twig', array(
//            'recetas' => $eRecetas,
//            'ecategoria' => $eCat,
//            'categoria' => $id,
//        ));
        
        $entities = $em->getRepository('uniRecetasBundle:receta')->findBy(
             array(), 
             array('fechaPub' => 'DESC')
           );
        return $this->render('uniRecetasBundle:receta:index.html.twig', array(
            'entities' => $entities,
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
      
        $autores = $em->getRepository('uniRecetasBundle:autor')->findBy(
             array(), 
             array('apellidos' => 'ASC','nombre' => 'ASC')
           );
        
         $categorias = $em->getRepository('uniRecetasBundle:categoria')->findBy(
             array(), 
             array('titulo' => 'ASC')
           );
         
         $eingredientes = $em->getRepository('uniRecetasBundle:ingrediente')->findBy(
             array(), 
             array('nombre' => 'ASC')
           );            

        return $this->render('uniRecetasBundle:receta:edit2.html.twig', array(
            'entity'       => $entity,
            'autores'      => $autores,
            'categorias'   => $categorias,
           'eingredientes' => $eingredientes,
        ));
    }
    
     /**
     * Update de receta seleccionada.
     *
     */
    public function updateRec2Action(Request $request)
    {        
        $idReceta= $request->request->get('idReceta');
                
        $em = $this->getDoctrine()->getManager();
        $eReceta = $em->getRepository('uniRecetasBundle:receta')->findOneById($idReceta);
                        
        $titulo= $request->request->get('titulo');
        $eReceta->setTitulo($titulo);
        
        $textElab= $request->request->get('textElab');
        $eReceta->setElaboracion($textElab);
                
        $foto= $request->request->get('foto');
        $eReceta->setFoto($foto);
        
        $fotop= $request->request->get('fotop');
        $eReceta->setFotoPeq($fotop);
              
        $fechapub= $request->request->get('fechapub');
        $eReceta->setFechaPub(new \DateTime($fechapub));
        
        $numpers= $request->request->get('numpers');
        $eReceta->setNumpers($numpers);
                      
        $autor= $request->request->get('idAutorRec');        
        $eAutor = $em->getRepository('uniRecetasBundle:autor')->findOneById($autor);
        if (!$eAutor) {
            throw $this->createNotFoundException('Unable to find autor relacionado.');
        }
        $eReceta->setAut($eAutor); 
        
        $id= $request->request->get('idCatRec');
        //echo($cat);        
        $eCat = $em->getRepository('uniRecetasBundle:categoria')->  findOneById($id);
        if (!$eCat) {
            throw $this->createNotFoundException('Unable to find categoria relacionado.');
        }
        $eReceta->setCateg($eCat);                                      
                
        $em->persist($eReceta);
        $em->flush();                
                   
        $entity = $em->getRepository('uniRecetasBundle:receta')->findOneById($idReceta);
        return $this->render('uniRecetasBundle:receta:show.html.twig', array(
            'entity' => $entity,
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
