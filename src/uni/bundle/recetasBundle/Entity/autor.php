<?php

namespace uni\bundle\recetasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * autor
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class autor
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
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=100)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="restaurante", type="string", length=100)
     */
    private $restaurante;
    
    /**
    * @ORM\OneToMany(targetEntity="receta", mappedBy="aut", cascade={"remove"})
    */
    protected $recetas;
    
    public function __construct() {
        $this->recetas = new ArrayCollection();
    }
    
    public function __toString() {
        return $this->nombre;
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
     * Set nombre
     *
     * @param string $nombre
     * @return autor
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return autor
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set restaurante
     *
     * @param string $restaurante
     * @return autor
     */
    public function setRestaurante($restaurante)
    {
        $this->restaurante = $restaurante;

        return $this;
    }

    /**
     * Get restaurante
     *
     * @return string 
     */
    public function getRestaurante()
    {
        return $this->restaurante;
    }

    /**
     * Add recetas
     *
     * @param \uni\bundle\recetasBundle\Entity\receta $recetas
     * @return autor
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
