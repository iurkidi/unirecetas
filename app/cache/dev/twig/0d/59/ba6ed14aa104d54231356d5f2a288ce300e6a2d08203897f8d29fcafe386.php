<?php

/* uniRecetasBundle:categoria:index.html.twig */
class __TwigTemplate_0d59ba6ed14aa104d54231356d5f2a288ce300e6a2d08203897f8d29fcafe386 extends Twig_Template
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
        echo "<h1>Categorias</h1>

    <table class=\"records_list\">
        <thead>
            <tr>                
                <th>Titulo</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titulo"), "html", null, true);
            echo "</a></td>                
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion"), "html", null, true);
            echo "</td>             
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </tbody>
    </table>      
                
       <div class=\"LineaFormulario\">  </div>
       <div class=\"LineaFormulario\">   
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("receta");
        echo "\"> Volver atrás</a>
            <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("categoria_new");
        echo "\">Añadir categoría</a>
           ";
        // line 28
        echo "        </div>
    ";
    }

    public function getTemplateName()
    {
        return "uniRecetasBundle:categoria:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 28,  76 => 26,  72 => 25,  65 => 20,  56 => 17,  50 => 16,  47 => 15,  43 => 14,  31 => 4,  28 => 3,);
    }
}
