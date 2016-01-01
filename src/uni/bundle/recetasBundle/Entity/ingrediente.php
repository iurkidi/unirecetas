<?php

namespace uni\bundle\recetasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ingrediente
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ingrediente
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
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;
    
    /**
    * @ORM\OneToMany(targetEntity="ingredrec", mappedBy="iingrediente", cascade={"remove"})
    */
    protected $recingr;
    
    public function __construct() {
        $this->recingr = new ArrayCollection();
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
     * @return ingrediente
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return ingrediente
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
     * Add recingr
     *
     * @param \uni\bundle\recetasBundle\Entity\ingredrec $recingr
     * @return ingrediente
     */
    public function addRecingr(\uni\bundle\recetasBundle\Entity\ingredrec $recingr)
    {
        $this->recingr[] = $recingr;

        return $this;
    }

    /**
     * Remove recingr
     *
     * @param \uni\bundle\recetasBundle\Entity\ingredrec $recingr
     */
    public function removeRecingr(\uni\bundle\recetasBundle\Entity\ingredrec $recingr)
    {
        $this->recingr->removeElement($recingr);
    }

    /**
     * Get recingr
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRecingr()
    {
        return $this->recingr;
    }
}
