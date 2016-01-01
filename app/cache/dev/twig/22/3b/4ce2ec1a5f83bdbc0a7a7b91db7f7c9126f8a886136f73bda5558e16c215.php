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
        ";
        // line 12
        echo "
        <script type=\"text/javascript\">
                    </script>

";
        // line 17
        echo "        
    </head>
    <body>
        
        
        <div id=\"cabecera\">
            ";
        // line 23
        $this->displayBlock('cabecera', $context, $blocks);
        // line 26
        echo "        </div>
        
        <div id=\"contenFormularios\">
            ";
        // line 29
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 31
        echo " 
        </div>
               ";
        // line 33
        echo "           
        <div id=\"pie\">
            ";
        // line 35
        $this->displayBlock('pie', $context, $blocks);
        // line 39
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

    // line 23
    public function block_cabecera($context, array $blocks = array())
    {
        // line 24
        echo "                <h1 class=\"letralogo textocentrado\"> uniRecetas </h1>  
            ";
    }

    // line 29
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 30
        echo "                Cuerpo
            ";
    }

    // line 35
    public function block_pie($context, array $blocks = array())
    {
        // line 36
        echo "                <p class=\"izquierda separarIzq15 negrita\">2015/2016</p>
                <p class=\"derecha separarDcha20 negrita\">Itziar Urkidi</p>
            ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  116 => 36,  113 => 35,  108 => 30,  105 => 29,  100 => 24,  97 => 23,  90 => 8,  87 => 7,  81 => 5,  73 => 39,  71 => 35,  67 => 33,  61 => 29,  54 => 23,  40 => 12,  35 => 7,  24 => 1,  91 => 35,  88 => 34,  79 => 23,  63 => 31,  59 => 8,  56 => 26,  48 => 37,  46 => 17,  39 => 29,  37 => 10,  33 => 5,  30 => 5,);
    }
}
