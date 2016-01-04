<?php

/* uniRecetasBundle:categoria:show.html.twig */
class __TwigTemplate_271cef9dbbf7fda331be003998ea15704ba355a8b4c45d23d63c936a3a3a02e5 extends Twig_Template
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
        echo "<h1>Detalle categoría</h1>

    <table class=\"record_properties\">
        <tbody>           
            <tr>
                <th>Titulo</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titulo"), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("categoria");
        echo "\"> Volver atrás</a>
            <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">Editar categoría</a>
           ";
        // line 24
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "uniRecetasBundle:categoria:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 24,  60 => 22,  56 => 21,  46 => 14,  39 => 10,  31 => 4,  28 => 3,);
    }
}
