<?php

namespace uni\bundle\recetasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * categoria
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class categoria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=50)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;

    /**
    * @ORM\OneToMany(targetEntity="receta", mappedBy="categ", cascade={"remove"})
    */
    protected $recetas;
    
    public function __construct() {
        $this->recetas = new ArrayCollection();
    }
    
    public function __toString() {
        return $this->titulo;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return categoria
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return categoria
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Add recetas
     *
     * @param \uni\bundle\recetasBundle\Entity\receta $recetas
     * @return categoria
     */
    public function addReceta(\uni\bundle\recetasBundle\Entity\receta $recetas)
    {
        $this->recetas[] = $recetas;

        return $this;
    }

    /**
     * Remove recetas
     *
     * @param \uni\bundle\recetasBundle\Entity\receta $recetas
     */
    public function removeReceta(\uni\bundle\recetasBundle\Entity\receta $recetas)
    {
        $this->recetas->removeElement($recetas);
    }

    /**
     * Get recetas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRecetas()
    {
        return $this->recetas;
    }
}
