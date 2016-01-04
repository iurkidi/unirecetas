<?php

/* uniRecetasBundle:ingrediente:show.html.twig */
class __TwigTemplate_1f3d58271e70bf83a061e5d532ff309b227316f857b11bcc7df34f45e68f182f extends Twig_Template
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
        echo "<h1>Detalle ingrediente</h1>

    <table class=\"record_properties\">
        <tbody>           
            <tr>
                <th>Nombre</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
         
     <div class=\"LineaFormulario\">  </div>
       <div class=\"LineaFormulario\">   
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("ingrediente");
        echo "\"> Volver atrás</a>
            <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ingrediente_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">Editar ingrediente</a>
            ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
        </div>
";
    }

    public function getTemplateName()
    {
        return "uniRecetasBundle:ingrediente:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 23,  60 => 22,  56 => 21,  46 => 14,  39 => 10,  31 => 4,  28 => 3,);
    }
}
