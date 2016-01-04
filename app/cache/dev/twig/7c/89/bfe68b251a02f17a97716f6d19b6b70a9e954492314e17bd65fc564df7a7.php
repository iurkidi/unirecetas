<?php

/* uniRecetasBundle:autor:index.html.twig */
class __TwigTemplate_7c89bfe68b251a02f17a97716f6d19b6b70a9e954492314e17bd65fc564df7a7 extends Twig_Template
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
        // line 5
        echo "<div class=\"LineaFormulario\">  
        <h1>Autores</h1>
       </div>

    <table class=\"records_list\">
        <thead>
            <tr>                
                <th>Nombre</th>
               
                <th>Restaurante</th>                
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("autor_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apellidos"), "html", null, true);
            echo "</a></td>
               
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "restaurante"), "html", null, true);
            echo "</td>
                
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tbody>
    </table>

        <div class=\"LineaFormulario\">  </div>
       <div class=\"LineaFormulario\">   
            <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("receta");
        echo "\"> Volver atrás</a>
            <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("autor_new");
        echo "\">Añadir autor</a>
        </div>
    
    ";
    }

    public function getTemplateName()
    {
        return "uniRecetasBundle:autor:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 32,  79 => 31,  72 => 26,  62 => 22,  53 => 20,  50 => 19,  46 => 18,  31 => 5,  28 => 3,);
    }
}
