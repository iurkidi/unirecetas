<?php

namespace uni\bundle\recetasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * receta
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="uni\bundle\recetasBundle\Entity\RecetaRepository")
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
     * @var string
     *
     * @ORM\Column(name="foto_peq", type="string", length=50)
     */
    private $fotopeq;
    
    /**
     * @var \Date
     *
     * @ORM\Column(name="fechapub", type="date")
     */
    private $fechaPub;

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
    * @ORM\OneToMany(targetEntity="ingredrec", mappedBy="ireceta", cascade={"persist"})
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
     * Set fotopeq
     *
     * @param string $foto
     * @return receta
     */
    public function setFotoPeq($foto)
    {
        $this->fotopeq = $foto;

        return $this;
    }

    /**
     * Get fotopeq
     *
     * @return string 
     */
    public function getFotoPeq()
    {
        return $this->fotopeq;
    }
    
    /**
     * Set fechaPub
     *
     * @param \Date $fechaPub
     * @return noticias
     */
    public function setFechaPub($fechaPub)
    {
        $this->fechaPub = $fechaPub;

        return $this;
    }

    /**
     * Get fechaPub
     *
     * @return \Date 
     */
    public function getFechaPub()
    {
        return $this->fechaPub;
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
    
    //SUBIDAS

    public function getAbsolutePath() {

        return null === $this->image ? null : $this->getUploadRootDir() . '/' . $this->image;

    }

    public function getWebPath() {

        return null === $this->image ? null : $this->getUploadDir() . '/' . $this->image;

    }

    public function getUploadRootDir() {

        //return __DIR__ . '/../../../../web/' . $this->getUploadDir();
        return __DIR__ . '/../../../../web/bundles/unirecetas/img' . $this->getUploadDir();

    }	

    protected function getUploadDir() {

        return 'uploads';

    }

    public function upload() {

       // the file property can be empty if the field is not required
    if (null === $this->getFile()) {
        return;
    }

    // aquí usa el nombre de archivo original pero lo debes
    // sanear al menos para evitar cualquier problema de seguridad

    // move takes the target directory and then the
    // target filename to move to
    $this->getFile()->move(
        $this->getUploadRootDir(),
        $this->getFile()->getClientOriginalName()
    );

    // set the path property to the filename where you've saved the file
    $this->path = $this->getFile()->getClientOriginalName();

    // limpia la propiedad «file» ya que no la necesitas más
    $this->file = null;

    }
    
    public function removeUpload()

    {

        if ($file = $this->getAbsolutePath()) {

            unlink($file);

        }

    }
}
