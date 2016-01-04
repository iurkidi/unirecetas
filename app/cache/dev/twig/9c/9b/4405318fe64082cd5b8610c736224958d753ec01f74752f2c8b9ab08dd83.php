<?php

/* uniRecetasBundle:ingrediente:new.html.twig */
class __TwigTemplate_9c9b4405318fe64082cd5b8610c736224958d753ec01f74752f2c8b9ab08dd83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("uniRecetasBundle::layout.html.twig");

        $this->blocks = array(
            'central' => array($this, 'block_central'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "uniRecetasBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_central($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Nuevo ingrediente</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "   
        
       <div class=\"LineaFormulario\">  </div>
       <div class=\"LineaFormulario\">   
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("ingrediente");
        echo "\"> Volver atrás</a>          
       </div>
";
    }

    public function getTemplateName()
    {
        return "uniRecetasBundle:ingrediente:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  35 => 6,  31 => 4,  28 => 3,);
    }
}
