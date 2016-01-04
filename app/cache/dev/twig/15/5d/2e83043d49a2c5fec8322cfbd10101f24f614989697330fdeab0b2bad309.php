<?php

/* uniRecetasBundle:ingrediente:index.html.twig */
class __TwigTemplate_155d2e83043d49a2c5fec8322cfbd10101f24f614989697330fdeab0b2bad309 extends Twig_Template
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
        echo "<h1>Ingredientes</h1>

    <table class=\"records_list\">
        <thead>
            <tr>                
                <th>Nombre</th>
                <th>Descripcion</th>               
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 15
            echo "            <tr>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ingrediente_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
            echo "</a></td>                
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion"), "html", null, true);
            echo "</td>
               ";
            // line 28
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>
    
       <div class=\"LineaFormulario\">  </div>
       <div class=\"LineaFormulario\">   
            <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("receta");
        echo "\"> Volver atrás</a>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("ingrediente_new");
        echo "\">Añadir ingrediente</a>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "uniRecetasBundle:ingrediente:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 36,  74 => 35,  67 => 30,  60 => 28,  56 => 17,  50 => 16,  47 => 15,  43 => 14,  31 => 4,  28 => 3,);
    }
}
