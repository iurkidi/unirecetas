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
      
            <h3 class=\"izquierda separarIzq20\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "aut"), "nombre"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaPub"), "Y/m/d"), "html", null, true);
        echo "</h3>
              
        <div id=\"notaingred\" class=\"centrado\">
            <br>
                <p class=\"izquierda separarIzq20 letranegra negrita\">Ingredientes para ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numpers"), "html", null, true);
        echo " personas</p>
                <br><br>
            <ol class=\"letranegra\">
                ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "recingr"));
        foreach ($context['_seq'] as $context["_key"] => $context["ingred"]) {
            // line 24
            echo "                    <li class=\"textoizq sinnegrita\">
                    ";
            // line 25
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
        // line 27
        echo "                              
            </ol>        
        
        <br><br><br><br><p class=\"letranegra\"><b><u>(";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categ"), "titulo"), "html", null, true);
        echo ")</b></u> ";
        echo nl2br($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "elaboracion"));
        echo "</p>
            </div>
        <div class=\"LineaFormulario\"></div>
        <div class=\"LineaFormulario\"></div>

            <div class=\"LineaFormulario\">
                <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("receta");
        echo "\"> Volver atras</a>  
                <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("receta_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
                   Editar
               </a>
             ";
        // line 41
        echo "            </div>
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
        return array (  90 => 30,  81 => 16,  70 => 12,  76 => 13,  53 => 18,  58 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  67 => 30,  38 => 6,  21 => 2,  25 => 4,  93 => 28,  78 => 36,  94 => 38,  89 => 20,  75 => 27,  68 => 14,  27 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  62 => 20,  49 => 14,  114 => 32,  88 => 19,  85 => 27,  71 => 30,  65 => 23,  61 => 9,  44 => 13,  24 => 3,  127 => 42,  117 => 44,  113 => 30,  105 => 37,  97 => 22,  91 => 27,  87 => 33,  77 => 15,  63 => 25,  59 => 20,  56 => 8,  34 => 5,  31 => 5,  28 => 3,  46 => 14,  26 => 6,  19 => 1,  79 => 18,  72 => 25,  69 => 24,  47 => 15,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 27,  115 => 43,  111 => 41,  108 => 36,  101 => 36,  98 => 31,  96 => 31,  83 => 18,  74 => 35,  66 => 15,  55 => 15,  52 => 18,  50 => 16,  43 => 14,  41 => 9,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 43,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 29,  106 => 26,  103 => 25,  99 => 31,  95 => 19,  92 => 20,  86 => 28,  82 => 22,  80 => 28,  73 => 14,  64 => 24,  60 => 22,  57 => 11,  54 => 7,  51 => 14,  48 => 8,  45 => 16,  42 => 10,  39 => 10,  36 => 8,  33 => 4,  30 => 7,);
    }
}
