<?php

namespace Proxies\__CG__\uni\bundle\recetasBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class receta extends \uni\bundle\recetasBundle\Entity\receta implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'uni\\bundle\\recetasBundle\\Entity\\receta' . "\0" . 'id', '' . "\0" . 'uni\\bundle\\recetasBundle\\Entity\\receta' . "\0" . 'titulo', '' . "\0" . 'uni\\bundle\\recetasBundle\\Entity\\receta' . "\0" . 'elaboracion', '' . "\0" . 'uni\\bundle\\recetasBundle\\Entity\\receta' . "\0" . 'foto', '' . "\0" . 'uni\\bundle\\recetasBundle\\Entity\\receta' . "\0" . 'fotopeq', '' . "\0" . 'uni\\bundle\\recetasBundle\\Entity\\receta' . "\0" . 'fechaPub', '' . "\0" . 'uni\\bundle\\recetasBundle\\Entity\\receta' . "\0" . 'numpers', 'categ', 'aut', 'recingr');
        }

        return array('__isInitialized__', '' . "\0" . 'uni\\bundle\\recetasBundle\\Entity\\receta' . "\0" . 'id', '' . "\0" . 'uni\\bundle\\recetasBundle\\Entity\\receta' . "\0" . 'titulo', '' . "\0" . 'uni\\bundle\\recetasBundle\\Entity\\receta' . "\0" . 'elaboracion', '' . "\0" . 'uni\\bundle\\recetasBundle\\Entity\\receta' . "\0" . 'foto', '' . "\0" . 'uni\\bundle\\recetasBundle\\Entity\\receta' . "\0" . 'fotopeq', '' . "\0" . 'uni\\bundle\\recetasBundle\\Entity\\receta' . "\0" . 'fechaPub', '' . "\0" . 'uni\\bundle\\recetasBundle\\Entity\\receta' . "\0" . 'numpers', 'categ', 'aut', 'recingr');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (receta $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitulo($titulo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitulo', array($titulo));

        return parent::setTitulo($titulo);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitulo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitulo', array());

        return parent::getTitulo();
    }

    /**
     * {@inheritDoc}
     */
    public function setElaboracion($elaboracion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setElaboracion', array($elaboracion));

        return parent::setElaboracion($elaboracion);
    }

    /**
     * {@inheritDoc}
     */
    public function getElaboracion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getElaboracion', array());

        return parent::getElaboracion();
    }

    /**
     * {@inheritDoc}
     */
    public function setFoto($foto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFoto', array($foto));

        return parent::setFoto($foto);
    }

    /**
     * {@inheritDoc}
     */
    public function getFoto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFoto', array());

        return parent::getFoto();
    }

    /**
     * {@inheritDoc}
     */
    public function setFotoPeq($foto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFotoPeq', array($foto));

        return parent::setFotoPeq($foto);
    }

    /**
     * {@inheritDoc}
     */
    public function getFotoPeq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFotoPeq', array());

        return parent::getFotoPeq();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaPub($fechaPub)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaPub', array($fechaPub));

        return parent::setFechaPub($fechaPub);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaPub()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaPub', array());

        return parent::getFechaPub();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumpers($numpers)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumpers', array($numpers));

        return parent::setNumpers($numpers);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumpers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumpers', array());

        return parent::getNumpers();
    }

    /**
     * {@inheritDoc}
     */
    public function setCateg(\uni\bundle\recetasBundle\Entity\categoria $categ = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCateg', array($categ));

        return parent::setCateg($categ);
    }

    /**
     * {@inheritDoc}
     */
    public function getCateg()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCateg', array());

        return parent::getCateg();
    }

    /**
     * {@inheritDoc}
     */
    public function setAut(\uni\bundle\recetasBundle\Entity\autor $aut = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAut', array($aut));

        return parent::setAut($aut);
    }

    /**
     * {@inheritDoc}
     */
    public function getAut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAut', array());

        return parent::getAut();
    }

    /**
     * {@inheritDoc}
     */
    public function addRecingr(\uni\bundle\recetasBundle\Entity\ingredrec $recingr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRecingr', array($recingr));

        return parent::addRecingr($recingr);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRecingr(\uni\bundle\recetasBundle\Entity\ingredrec $recingr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRecingr', array($recingr));

        return parent::removeRecingr($recingr);
    }

    /**
     * {@inheritDoc}
     */
    public function getRecingr()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecingr', array());

        return parent::getRecingr();
    }

}
