<?php

/* ::base.html.twig */
class __TwigTemplate_223b4ce2ec1a5f83bdbc0a7a7b91db7f7c9126f8a886136f73bda5558e16c215 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cabecera' => array($this, 'block_cabecera'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'pie' => array($this, 'block_pie'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/unirecetas/js/jsrecetas.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 13
        echo "      
    </head>
    <body>
        
        
        <div id=\"cabecera\" class=\"imagencab\">
            ";
        // line 19
        $this->displayBlock('cabecera', $context, $blocks);
        // line 22
        echo "        </div>
        
        <div id=\"contenFormularios\">
            ";
        // line 25
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 27
        echo " 
        </div>
               ";
        // line 29
        echo "           
        <div id=\"pie\">
            ";
        // line 31
        $this->displayBlock('pie', $context, $blocks);
        // line 35
        echo "        </div>
       
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "uniRecetas";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "                <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/unirecetas/css/webrecetas.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 19
    public function block_cabecera($context, array $blocks = array())
    {
        // line 20
        echo "                <h1 class=\"letralogo textocentrado\"> uniRecetas </h1>  
            ";
    }

    // line 25
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 26
        echo "                Cuerpo
            ";
    }

    // line 31
    public function block_pie($context, array $blocks = array())
    {
        // line 32
        echo "                <p class=\"izquierda separarIzq15 negrita\">2015/2016</p>
                <p class=\"derecha separarDcha20 negrita\">Itziar Urkidi</p>
            ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 32,  111 => 31,  106 => 26,  103 => 25,  98 => 20,  95 => 19,  88 => 8,  85 => 7,  79 => 5,  71 => 35,  69 => 31,  65 => 29,  61 => 27,  59 => 25,  54 => 22,  52 => 19,  44 => 13,  40 => 11,  37 => 10,  35 => 7,  30 => 5,  24 => 1,);
    }
}
