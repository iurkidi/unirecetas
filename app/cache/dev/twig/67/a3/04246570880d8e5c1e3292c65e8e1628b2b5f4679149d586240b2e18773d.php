<?php

/* uniRecetasBundle:receta:show.html.twig */
class __TwigTemplate_67a304246570880d8e5c1e3292c65e8e1628b2b5f4679149d586240b2e18773d extends Twig_Template
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
        echo "<h1>receta</h1>

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
                <th>Elaboracion</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "elaboracion"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Foto</th>
                <td><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/unirecetas/img/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "foto")) . "")), "html", null, true);
        echo "\"/></td>
            </tr>
            <tr>
                <th>Numpers</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numpers"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Autor</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "aut"), "nombre"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Categoria</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categ"), "titulo"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <h1>Ingredientes</h1>
    ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "recingr"));
        foreach ($context['_seq'] as $context["_key"] => $context["ingred"]) {
            // line 36
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ingred"]) ? $context["ingred"] : $this->getContext($context, "ingred")), "cantidad"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ingred"]) ? $context["ingred"] : $this->getContext($context, "ingred")), "unidad"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingred"]) ? $context["ingred"] : $this->getContext($context, "ingred")), "iingrediente"), "nombre"), "html", null, true);
            echo "<br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingred'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("receta");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("receta_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "uniRecetasBundle:receta:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 50,  112 => 46,  104 => 41,  99 => 38,  86 => 36,  82 => 35,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,);
    }
}
