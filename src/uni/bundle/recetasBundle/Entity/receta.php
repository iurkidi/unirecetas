<?php

namespace uni\bundle\recetasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * receta
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class receta
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
     * @ORM\Column(name="elaboracion", type="text")
     */
    private $elaboracion;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=50)
     */
    private $foto;

    /**
     * @var integer
     *
     * @ORM\Column(name="numpers", type="integer")
     */
    private $numpers;
    
    /**
    * @ORM\ManyToOne(targetEntity="categoria", inversedBy="recetas", cascade={"remove"})    
    */
    protected $categ;

    /**
    * @ORM\ManyToOne(targetEntity="autor", inversedBy="recetas", cascade={"remove"})    
    */
    protected $aut;
    
    /**
    * @ORM\OneToMany(targetEntity="ingredrec", mappedBy="ireceta", cascade={"remove"})
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
     * Set titulo
     *
     * @param string $titulo
     * @return receta
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
     * Set elaboracion
     *
     * @param string $elaboracion
     * @return receta
     */
    public function setElaboracion($elaboracion)
    {
        $this->elaboracion = $elaboracion;

        return $this;
    }

    /**
     * Get elaboracion
     *
     * @return string 
     */
    public function getElaboracion()
    {
        return $this->elaboracion;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return receta
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set numpers
     *
     * @param integer $numpers
     * @return receta
     */
    public function setNumpers($numpers)
    {
        $this->numpers = $numpers;

        return $this;
    }

    /**
     * Get numpers
     *
     * @return integer 
     */
    public function getNumpers()
    {
        return $this->numpers;
    }

    /**
     * Set categ
     *
     * @param \uni\bundle\recetasBundle\Entity\categoria $categ
     * @return receta
     */
    public function setCateg(\uni\bundle\recetasBundle\Entity\categoria $categ = null)
    {
        $this->categ = $categ;

        return $this;
    }

    /**
     * Get categ
     *
     * @return \uni\bundle\recetasBundle\Entity\categoria 
     */
    public function getCateg()
    {
        return $this->categ;
    }

    /**
     * Set aut
     *
     * @param \uni\bundle\recetasBundle\Entity\autor $aut
     * @return receta
     */
    public function setAut(\uni\bundle\recetasBundle\Entity\autor $aut = null)
    {
        $this->aut = $aut;

        return $this;
    }

    /**
     * Get aut
     *
     * @return \uni\bundle\recetasBundle\Entity\autor 
     */
    public function getAut()
    {
        return $this->aut;
    }

    /**
     * Add recingr
     *
     * @param \uni\bundle\recetasBundle\Entity\ingredrec $recingr
     * @return receta
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
