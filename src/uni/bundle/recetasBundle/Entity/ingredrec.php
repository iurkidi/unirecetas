<?php

namespace uni\bundle\recetasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ingredrec
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ingredrec
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
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="unidad", type="string", length=50)
     */
    private $unidad;
    
    /**
    * @ORM\ManyToOne(targetEntity="receta", inversedBy="recingr", cascade={"persist"})    
    */
    protected $ireceta;
    
    /**
    * @ORM\ManyToOne(targetEntity="ingrediente", inversedBy="recingr", cascade={"persist"})    
    */
    protected $iingrediente;


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
     * Set cantidad
     *
     * @param integer $cantidad
     * @return ingredrec
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set unidad
     *
     * @param string $unidad
     * @return ingredrec
     */
    public function setUnidad($unidad)
    {
        $this->unidad = $unidad;

        return $this;
    }

    /**
     * Get unidad
     *
     * @return string 
     */
    public function getUnidad()
    {
        return $this->unidad;
    }

    /**
     * Set ireceta
     *
     * @param \uni\bundle\recetasBundle\Entity\receta $ireceta
     * @return ingredrec
     */
    public function setIreceta(\uni\bundle\recetasBundle\Entity\receta $ireceta = null)
    {
        $this->ireceta = $ireceta;

        return $this;
    }

    /**
     * Get ireceta
     *
     * @return \uni\bundle\recetasBundle\Entity\receta 
     */
    public function getIreceta()
    {
        return $this->ireceta;
    }

    /**
     * Set iingrediente
     *
     * @param \uni\bundle\recetasBundle\Entity\ingrediente $iingrediente
     * @return ingredrec
     */
    public function setIingrediente(\uni\bundle\recetasBundle\Entity\ingrediente $iingrediente = null)
    {
        $this->iingrediente = $iingrediente;

        return $this;
    }

    /**
     * Get iingrediente
     *
     * @return \uni\bundle\recetasBundle\Entity\ingrediente 
     */
    public function getIingrediente()
    {
        return $this->iingrediente;
    }
}
