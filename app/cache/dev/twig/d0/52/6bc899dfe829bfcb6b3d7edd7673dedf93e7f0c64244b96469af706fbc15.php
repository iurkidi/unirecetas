<?php

/* uniRecetasBundle:categoria:edit.html.twig */
class __TwigTemplate_d0526bc899dfe829bfcb6b3d7edd7673dedf93e7f0c64244b96469af706fbc15 extends Twig_Template
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
        echo "<h1>Editar categoría</h1>
   
        ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "    
   
   <div class=\"LineaFormulario\">  </div>
       <div class=\"LineaFormulario\">   
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("categoria");
        echo "\"> Volver atrás</a>          
    </div>
";
    }

    public function getTemplateName()
    {
        return "uniRecetasBundle:categoria:edit.html.twig";
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
