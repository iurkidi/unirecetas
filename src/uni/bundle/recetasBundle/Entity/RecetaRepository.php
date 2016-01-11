<?php

namespace uni\bundle\recetasBundle\Entity;

//use uni\bundle\recetasBundle\Entity\receta;
use Doctrine\ORM\EntityRepository;

class RecetaRepository extends EntityRepository
{
    public function findAllOrderedById()
    {
        return $this->getEntityManager()
            ->createQuery('SELECT r FROM uniRecetasBundle:receta r ORDER BY r.id DESC')
            ->getResult();
    }
}

?>

