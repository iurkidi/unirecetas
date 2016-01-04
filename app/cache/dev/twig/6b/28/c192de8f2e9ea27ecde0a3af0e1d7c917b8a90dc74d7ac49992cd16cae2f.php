<?php

/* uniRecetasBundle:autor:show.html.twig */
class __TwigTemplate_6b28c192de8f2e9ea27ecde0a3af0e1d7c917b8a90dc74d7ac49992cd16cae2f extends Twig_Template
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
        echo "<h1>Detalle autor</h1>

    <table class=\"record_properties\">
        <tbody>
            
            <tr>
                <th>Nombre</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apellidos"), "html", null, true);
        echo "</td>
            </tr>
           ";
        // line 17
        echo "            <tr>
                <th>Restaurante</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "restaurante"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        ";
        // line 37
        echo "    
     <div class=\"LineaFormulario\">  </div>
       <div class=\"LineaFormulario\">   
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("autor");
        echo "\"> Volver atrás</a>
            <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("autor_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">Editar autor</a>
            ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
        </div>
";
    }

    public function getTemplateName()
    {
        return "uniRecetasBundle:autor:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 42,  68 => 41,  64 => 40,  59 => 37,  51 => 19,  47 => 17,  40 => 11,  31 => 4,  28 => 3,);
    }
}
