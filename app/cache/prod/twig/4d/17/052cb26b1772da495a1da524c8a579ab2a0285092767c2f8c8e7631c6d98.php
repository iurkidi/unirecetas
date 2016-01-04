<?php

/* uniRecetasBundle::layout.html.twig */
class __TwigTemplate_4d17052cb26b1772da495a1da524c8a579ab2a0285092767c2f8c8e7631c6d98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
            'menuSup' => array($this, 'block_menuSup'),
            'central' => array($this, 'block_central'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo " 
        <div id=\"menuSup\">
            ";
        // line 7
        $this->displayBlock('menuSup', $context, $blocks);
        // line 36
        echo "        </div>
 
        
        <div id=\"central\">
            
            ";
        // line 41
        $this->displayBlock('central', $context, $blocks);
        // line 44
        echo "            
        </div>
 
 
 ";
    }

    // line 7
    public function block_menuSup($context, array $blocks = array())
    {
        // line 8
        echo "                
             <ul id=\"menu-horizontal\">
                <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("receta");
        echo "\" title=\"Texto\">INICIO</a>                
                <li><a href=\"#\" title=\"Texto\">Entrantes</a>
                    <ul>
                        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("receta_categ_index", array("id" => 1));
        echo "\" title=\"Texto\">Picoteo</a></li>
                        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("receta_categ_index", array("id" => 2));
        echo "\" title=\"Texto\">Ensaladas</a></li>
                        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("receta_categ_index", array("id" => 3));
        echo "\" title=\"Texto\">Sopas</a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("receta_categ_index", array("id" => 4));
        echo "\" title=\"Texto\">Cuchara</a></li>
                <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("receta_categ_index", array("id" => 5));
        echo "\" title=\"Texto\">Tenedor</a></li>
                <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("receta_categ_index", array("id" => 6));
        echo "\" title=\"Texto\">Postre</a></li>                              
                <li><a href=\"#\" title=\"Texto\">Buscar</a>
                    <ul>
                        <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("autor_buscar");
        echo "\" title=\"Texto\">Por autor</a></li>                        
                    </ul>
                </li>
                <li><a href=\"#\" title=\"Texto\">Administracion</a>
                    <ul>
                        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("categoria");
        echo "\" title=\"Texto\">Categorias</a></li>
                        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("autor");
        echo "\" title=\"Texto\">Autores</a></li>
                        <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("ingrediente");
        echo "\" title=\"Texto\">Ingredientes</a></li>
                    </ul>
                </li>
             </ul>
             
            ";
    }

    // line 41
    public function block_central($context, array $blocks = array())
    {
        // line 42
        echo "            
            ";
    }

    public function getTemplateName()
    {
        return "uniRecetasBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 42,  123 => 41,  113 => 30,  109 => 29,  91 => 20,  87 => 19,  83 => 18,  77 => 15,  73 => 14,  69 => 13,  63 => 10,  59 => 8,  48 => 44,  46 => 41,  39 => 36,  37 => 7,  33 => 5,  30 => 4,  120 => 27,  105 => 28,  97 => 23,  92 => 20,  88 => 19,  81 => 16,  76 => 13,  70 => 12,  65 => 10,  61 => 9,  56 => 7,  54 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
