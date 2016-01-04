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
        // line 5
        echo "<div class=\"detalleNot\">
        <div class=\"LineaFormulario\"></div>

        <h1 class=\"centrado\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titulo"), "html", null, true);
        echo "</h1>

        <div class=\"LineaFormulario\"></div>

        <div class=\"LineaFormulario centrado\">
            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/unirecetas/img/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "foto")) . "")), "html", null, true);
        echo "\" width=\"25%\" heigth=\"25%\"/>
        </div>

        <div class=\"LineaFormulario\">
            <h3 class=\"izquierda separarIzq20\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "aut"), "nombre"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaPub"), "Y/m/d"), "html", null, true);
        echo "</h3>
        </div>

        ";
        // line 22
        echo "        
        <div id=\"ingredientes\" class=\"centrado\">
            <br>
                <p class=\"izquierda separarIzq20\">Ingredientes para ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numpers"), "html", null, true);
        echo " personas</p>
               
            <ol>
                ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "recingr"));
        foreach ($context['_seq'] as $context["_key"] => $context["ingred"]) {
            // line 29
            echo "                    <li>
                    ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ingred"]) ? $context["ingred"] : $this->getContext($context, "ingred")), "cantidad"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ingred"]) ? $context["ingred"] : $this->getContext($context, "ingred")), "unidad"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingred"]) ? $context["ingred"] : $this->getContext($context, "ingred")), "iingrediente"), "nombre"), "html", null, true);
            echo "<br>
                    </li>                    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingred'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                <li>dfadfjadkfjadkfjadk</li>
                    <li>dfadfjadkfjadkfjadk</li>
                    <li>dfadfjadkfjadkfjadk</li>
                    <li>dfadfjadkfjadkfjadk</li>
            </ol>
            <div class=\"LineaFormulario\">
                <p><b><u>(";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categ"), "titulo"), "html", null, true);
        echo ")</b></u> ";
        echo nl2br($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "elaboracion"));
        echo "</p>
            </div> 
        </div>                      

        <div class=\"LineaFormulario\"></div>
        <div class=\"LineaFormulario\"></div>

            <div class=\"LineaFormulario\">
                <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("receta");
        echo "\"> Volver atras</a>  
                <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("receta_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
                   Editar
               </a>
               ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
            </div>
    </div>
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
        return array (  121 => 51,  115 => 48,  111 => 47,  98 => 39,  90 => 33,  77 => 30,  74 => 29,  70 => 28,  64 => 25,  59 => 22,  51 => 17,  44 => 13,  36 => 8,  31 => 5,  28 => 3,);
    }
}
